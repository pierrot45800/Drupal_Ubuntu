<?php


namespace Drupal\mon_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'MonBlock' block
 *
 * @Block(
 * id = "mon_block",
 * admin_label = @Translation("Mon premier bloc"),
 * category = @Translation("custom"),
 * )
 */

class MonBlock extends BlockBase {

  public function build(){
    //$date_naissance = \Drupal::config('mon_module.settings')->get('message');
    $date_naissance2 = \Drupal::config('mon_module.settings')->get('message');

    return[
      '#markup' => 'Voici ma date de naissance aa:'.$date_naissance2
      ];
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
}
