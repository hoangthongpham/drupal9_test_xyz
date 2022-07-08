<?php

namespace Drupal\article_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\user\Entity\User;
use Drupal\node\Entity\Node;


class ArticleController extends ControllerBase
{
  public function index()
  {
    $langcodes = \Drupal::languageManager()->getLanguages();
    $langcodesList = array_keys($langcodes);
    return [
      '#theme' => 'index_template',
      '#markup' => 'Welcome to list article.',
      '#attached' => [
        'library' => [
          'article_module/datatables',
        ]
      ],
      '#langcodesList' => $langcodesList,
    ];
  }
  public function destroy($nodeID)
  {
    $node = Node::load($nodeID);
    $node->delete();
    return new JsonResponse(['result' => 'Success']);
  }

  public function datatable(Request $request)
  {
    $column = ["node_field_data_title", "user_name",'node_field_data_langcode','node_field_data_changed','node_field_data_changed','node_field_data_status'];
    $order=$request->get("order");
    $length=$request->get('length');
    $start=$request->get('start');
    $filter=$request->get('filter');
    $limit='';

    $query_string = "SELECT
              node_field_data.langcode AS node_field_data_langcode,
              node_field_data.created AS node_field_data_created,
              node_field_data.nid AS nid,
              node_field_data.title as node_field_data_title,
              node_field_data.changed as node_field_data_changed ,
              node_field_data.status as node_field_data_status ,
              userp.name as user_name
            FROM node_field_data
            LEFT JOIN users_field_data userp on node_field_data.uid = userp.uid
            WHERE node_field_data.type IN ('article_custom') ";
    if(isset($filter['language']) && $filter['language']!='All'){
      $query_string .= " AND node_field_data.langcode = '{$filter['language']}'";
    }
    if(isset($filter['status']) && $filter['status']!='All'){
      $query_string .= " AND node_field_data.status = {$filter['status']}";
    }
    if(isset($filter['title']) && $filter['title']!=''){
      $query_string .= " AND node_field_data.title LIKE '%".$filter['title']."%' ";

    }
    $recordsTotal_query= "SELECT COUNT(*) as total FROM node_field_data  WHERE node_field_data.type IN ('article_custom')";

    /* ORDER */
    if(isset($order))
    {
      $query_string .= ' ORDER BY '.$column[$order['0']['column']].' '.$order['0']['dir'].' ';
    }
    else
    {
      $query_string .= ' ORDER BY nid DESC ';
    }
    /* PAGING */
    if($length != -1)
    {
      $limit .= ' LIMIT ' . $length . ' OFFSET ' . $start;
    }

    $articles = \Drupal::database()->query($query_string.$limit)->fetchAll();
    $result['draw']= intval($request->get('draw'));
    $result['data'] = count($articles) ? $articles : [];
    $result['recordsTotal'] = intval(\Drupal::database()->query($recordsTotal_query)->fetch()->total);
    $result['recordsFiltered'] = intval(\Drupal::database()->query($query_string)->fetchAll());

    return new JsonResponse($result);
  }
}
