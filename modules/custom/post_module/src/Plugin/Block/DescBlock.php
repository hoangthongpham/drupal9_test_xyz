<?php

namespace Drupal\post_module\Plugin\Block;
use Drupal\Core\Block\BlockBase;

class DescBlock extends BlockBase
{
  /**
   * Provides a 'desc_block' block.
   *
   * @Block(
   *   id = "desc_block",
   *   admin_label = @Translation("Description"),
   *   category = @Translation("Tab Block"),
   * )
   */
  public function build() {
echo 'thah';
  }
}
