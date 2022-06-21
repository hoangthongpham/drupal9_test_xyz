<?php
namespace Drupal\post_module\Controller;
class PostController
{
  public function search()
  {
    return array(
      '#markup' => 'Welcome to search post.'
    );
  }
  public function show()
  {
    return array(
      '#markup' => 'Welcome to show post.'
    );
  }
}
