<?php

namespace Drupal\post_module\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "logs_block",
 *   admin_label = @Translation("Log"),
 *   category = @Translation("Log Block"),
 * )
 */

class LogsBlock extends BlockBase
{

  public function build()
  {
    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $query = \Drupal::entityQuery('taxonomy_term');
    $query->condition('vid', 'tags');
    $query->condition('langcode', $lang_code);
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

//    return [
//      '#markup' => $this->t('Tags'),
//      '#theme' => 'tags_block',
//      '#tags' => $tags
//    ];
    return [
      '#theme' => 'descriptionsection_block',
      '#logs' => $tags,
      '#description' => 'Websolutions Agency is the industry leading Drupal development agency in Croatia'
    ];
  }
}
