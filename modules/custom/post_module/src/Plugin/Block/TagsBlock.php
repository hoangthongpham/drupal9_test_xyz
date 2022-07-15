<?php

namespace Drupal\post_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "tags_block",
 *   admin_label = @Translation("Tag"),
 *   category = @Translation("Tab Block"),
 * )
 */
class TagsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $lang_code = \Drupal::languageManager()->getCurrentLanguage()->getId();

    $query = \Drupal::entityQuery('taxonomy_term');
    $query->condition('vid', 'tags');
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

    return [
      '#markup' => $this->t('Tags'),
      '#theme' => 'tags_block',
      '#tags' => $tags
    ];
  }

}
