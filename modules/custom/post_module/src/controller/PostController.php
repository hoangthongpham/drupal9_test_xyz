<?php
namespace Drupal\post_module\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\Request;
use Drupal\Core\Url;
Use \Drupal\Core\Pager\PagerManagerInterface;

class PostController extends ControllerBase
{
  public function search()
  {
//    return array(
//
//    );
    return [
      '#theme' => 'post_template',
      '#markup' => 'Welcome to search post.',
    ];
  }
  public function show($id)
  {
    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $node = Node::load($id)->getTranslation($lang_code);
    $tags = [];
    foreach ($node->field_tags as $tag) {
      $result=\Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($tag->entity->id());
      $tags[]=[
        'name' => $result->name->value,
        'tid' => $result->tid->value
      ];
    }
    $images = [];
    foreach ($node->field_image as $img) {
      $images[]=\Drupal::entityTypeManager()->getStorage('file')->load($img->entity->id());
//      $images[]=[
//        'name' => $result->name->value,
//        'tid' => $result->tid->value
//      ];
    }


    $node->tags=$tags;
    $node->images=$images;
    return [
      '#theme' => 'show_template',
      '#markup' => 'Welcome to show post.',
      '_title' => $node->title,
      '#data' => $node
    ];
  }

  public function result(Request $request)
  {
    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $keyword=$request->get('keyword');

    $totalRecord_query="SELECT
                    COUNT(*) as total
                  FROM
                      node_field_data
                WHERE node_field_data.title LIKE '%".$keyword."%'";
    $totalrecord = intval(\Drupal::database()->query($totalRecord_query)->fetch()->total); // tổng số record @int

    $num_per_page = 1;
    $page= ($request->get('page') != null) ? $request->get('page') :1;
    $offset = $num_per_page * $page-1;

    $database = \Drupal::database();
    $query = $database->select('node_field_data', 'd')
    ->condition('d.title', $keyword,'REGEXP')
    ->fields('d', ['title', 'vid', 'nid', 'langcode']);
    $query=$query->extend('Drupal\Core\Database\Query\PagerSelectExtender')->limit(1);
    $result = $query->execute()->fetchAll();


    $query = \Drupal::entityQuery('taxonomy_term');
    $query_or = $query->orConditionGroup()
      ->condition('vid', 'tags')
      ->condition('vid', 'log');
    $query->condition($query_or);
    $tids = $query->execute();
    $tags = \Drupal\taxonomy\Entity\Term::loadMultiple($tids);

    foreach ($tags as &$tag) {
      if ($tag->hasTranslation($lang_code)) {
        $tag = \Drupal::service('entity.repository')->getTranslationFromContext($tag, $lang_code);
      }
      $tag->url=$tag->toUrl($rel = 'canonical',
        $options = [
          'language' => \Drupal::languageManager()->getLanguage($tag->langcode),
        ]
      )->toString();
    }

    foreach ($result as &$data) {
      $data->urlLink = Url::fromRoute('post_module.show', ['id' => $data->nid], [
        'language' => \Drupal::languageManager()->getLanguage($data->langcode),
      ]);
    }


    $build['data'] = [
      '#theme' => 'result_template',
      '#articles' => $result,
      '#tags' => $tags
      ];

    $build['pager'] = array(
        '#type' => 'pager'
      );
    return $build;

  }
}
