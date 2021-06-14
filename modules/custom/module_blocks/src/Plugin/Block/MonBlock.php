<?php


namespace Drupal\module_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Form\FormBase;
use PDO;


/**
 * Provides a 'MonBlock2' block
 *
 * @Block(
 * id = "module_blocks_form",
 * admin_label = @Translation("Bloc formulaire !"),
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

      //$pdo = new PDO("mysql:host=localhost;dbname=portal", "lima","lima");



    return \Drupal::formBuilder()->getForm('Drupal\module_blocks\Form\TestForm');
  }

/*
  public function blockForm($form, FormStateInterface $form_state){
    $form['mon_texte'] = [
      '#type' => 'textefield',
      '#title' => $this->t('Mon texte'),
      '#default_value' => isset($this->configuration['mon_texte']) ?
          $this->configuration['mon_texte'] : '',
    ];
    return $form;
  }
*/
/*
  /**
   * Overrides \Drupal\block\BlockBase::blockSubmit().
   */
/*
  public function blockSubmit($form, FormStateInterface $form_state){
    $this->configuration['mon_texte'] = $form_state->getValue('mon_texte');
  }
*/

  /**
   * {@inheritdoc }
   */
/*
  protected function blockAccess(AccountInterface $account){
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

*/


}
