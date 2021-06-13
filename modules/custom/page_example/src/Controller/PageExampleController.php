<?php

namespace Drupal\page_exmample\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class PageExampleController extends ControllerBase{

  public function simple(){
    return[
      '#markup'=> '<p>' . $this->t('Simple page....').'</p>',
    ];
  }




































}
