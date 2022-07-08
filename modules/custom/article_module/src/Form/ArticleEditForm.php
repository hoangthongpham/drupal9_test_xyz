<?php
/**
 * @file
 * Contains \Drupal\userinfo\Form\UserinfoForm.
 */

namespace Drupal\article_module\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Drupal\Core\Url;
use Drupal\Core\Routing;
use Drupal\user\Entity\User;
use Drupal\node\Entity\Node;

class ArticleEditForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'userinfo_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state,$node=null) {
    $form['node_id'] = array(
      '#type' => 'hidden',
      '#required' => TRUE,
      '#default_value' => $node->get('nid')->value,
    );
    $form['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title'),
      '#required' => TRUE,
      '#default_value' => $node->get('title')->value,
      '#attributes' => [
        'class' => ['form-control']
      ]
    );
    $form['langcode'] = [
      '#type' => 'language_select',
      '#title' => t('Language'),
      '#default_value' => $node->get('title')->value,
      '#attributes' => [
        'class' => ['form-control']
      ]
    ];
    $form['body'] = array(
      '#type' => 'text_format',
      '#title' => t('Body'),
      '#default_value' => $node->get('body')->value , // tương tự $node->body->value
    );

    $tags = [];
    foreach ($node->field_tags as $tag) {
      $tags[]=\Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($tag->entity->id());
    }
    if ( $node->get('field_image')[0]->entity->fid->value != null) {
      $image=array($node->get('field_image')[0]->entity->fid->value);
    }

    $form['field_tags'] = array(
      '#type' => 'entity_autocomplete',
      '#title' => t('tagged with'),
      '#target_type' => 'taxonomy_term',
      '#size' => 30,
      '#maxlength' => 1024,
      '#tags' => TRUE,
      '#default_value' => $tags
    );
    $form['field_image'] = [
      //'#title' => t('Upload'),
      '#type' => 'managed_file',

      '#attributes' => [
        'class' => ['form-control'],
        'accept' => ['image/*']
      ],
      '#default_value' => $image
    ];
    $form['field_image']['alt'] = [
      '#type' => 'textfield',
      '#title' => t('Alternative text'),
      '#default_value' =>$node->field_image[0]->alt,
      '#maxlength' => 512,
    ];
    $form['status'] = array(
      '#type' => 'checkbox',
      '#title' => t('Published'),
      '#default_value' => $node->get('status')->value
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#attributes' => [
        'class' => ['btn btn-primary'],
      ]
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if ($form_state->getValue('title') == '') {
      $form_state->setErrorByName('title', $this->t('Please Enter Title'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    try{
      $field = $form_state->getValues();
      $user = User::load(\Drupal::currentUser()->id());

      $file = \Drupal::entityTypeManager()->getStorage('file')
        ->load($form_state->getValue('field_image')[0]);

      $tags=[];
      $field_tags=$form_state->getValue('field_tags');
      foreach ($field_tags as $tag){
        $tags[]=\Drupal::entityTypeManager()->getStorage('taxonomy_term')->load($tag['target_id']);
      }

      $node=Node::load($field['node_id']);
      $node->set("title", array('value' => $field['title']));
      $node->set("langcode", array('value' => $field['langcode']));
      $node->set('body',array('value' => $field['body']['value'], 'format' => $field['body']['format']));
      $node->set('field_tags', $tags);
      $node->set('field_image', $file);
      $node->set('status', $field['status']);
      $node->set('uid', $user->id());
      $node->save();

      \Drupal::messenger()->addMessage(t("The action has been successfully saved."));
      $url = Url::fromRoute('article_module.index');
      $form_state->setRedirectUrl($url);
    }
    catch(Exception $ex){
      \Drupal::logger('article custom')->error($ex->getMessage());
    }
  }
}
