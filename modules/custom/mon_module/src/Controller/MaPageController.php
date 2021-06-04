<?php

/**
 * @file
 * Contains \Drupal\mon_module\Controller\MaPageController.
 */
namespace Drupal\mon_module\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\mon_module\Service\Date;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MaPageController extends ControllerBase{
  protected $date;

  public function __construct()
  {
    $this->date = new Date();
  }
/*
  /**
   * @param ContainerInterface $container
   * @return static
   * {@inheritdoc}
   */
  /*
  public static function create(ContainerInterface $container): MaPageController
  {
    $serviceDate = \Drupal::service('mon_module.date');
    return new static(
      $container->get($serviceDate)
    );
  }
*/

  /**
   * @throws \Exception
   */
  public function maPage(){
    return [
      '#markup' => $this->date->differenceDate("2016-05-27","2018-06-09"),
		];

	}
}
?>
