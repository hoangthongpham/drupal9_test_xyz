<?php
namespace Drupal\post\Controller;
use Drupal\Core\Controller\ControllerBase;

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
    return [
      '#theme' => 'show_template',
      '#markup' => 'Welcome to show post.',
    ];
  }
}
