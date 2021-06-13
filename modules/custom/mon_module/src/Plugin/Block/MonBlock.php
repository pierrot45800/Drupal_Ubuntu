<?php


namespace Drupal\mon_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Form\FormBase;


/**
 * Provides a 'MonBlock' block
 *
 * @Block(
 * id = "mon_module_block",
 * admin_label = @Translation("Un bloc !"),
 * category = @Translation("custom"),
 * )
 */

class MonBlock extends BlockBase {

  /**
   * {@inheritDoc}
   * result = rendering a form or a view
   */
  public function build(): array
  {
/*
    return array(
      '#theme' => 'bootstrap_sass',
      '#title' => 'Websolutions agency',
      '#description'=> 'Websolutions Agency is the industry meading bla bla bla...');

*/
    return \Drupal::formBuilder()->getForm('Drupal\mon_module\Form\TestForm');
  }


  public function blockForm($form, FormStateInterface $form_state){
    $form['mon_texte'] = [
      '#type' => 'textefield',
      '#title' => $this->t('Mon texte'),
      '#default_value' => isset($this->configuration['mon_texte']) ?
          $this->configuration['mon_texte'] : '',
    ];
    return $form;
  }


  /**
   * Overrides \Drupal\block\BlockBase::blockSubmit().
   */

  public function blockSubmit($form, FormStateInterface $form_state){
    $this->configuration['mon_texte'] = $form_state->getValue('mon_texte');
  }


  /**
   * {@inheritdoc }
   */

  protected function blockAccess(AccountInterface $account){
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }




}
