<?php
/**
 * @file
 * Contains \Drupal\module_blocks\Form\TestForm
 */

namespace Drupal\module_blocks\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TestForm extends FormBase{





  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array
  {
    $form['type_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Type id:'),
      '#required' => TRUE,
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );
    return $form;
  }


  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

    if (strlen($form_state->getValue('type_name')) == 0) {
      $form_state->setErrorByName('type_name', $this->t('Veuillez indiquer un numéor svp.'));
    }

  }


  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $val = $form_state->getValue('type_name');
    $database = \Drupal::database();
    $query = $database->query("SELECT uuid FROM node where nid=$val");
    $result = $query->fetchAll();
    foreach ($result as $key => $value){
      \Drupal::messenger()->addMessage('type' . ': ' . get_class($value));
      $value_string = strval($value->uuid);
      \Drupal::messenger()->addMessage('type' . ': ' . $value_string);
      //echo $value_string;
    }


  }

  public function getFormId()
  {
    return 'module_blocks_test_form';
  }



}
