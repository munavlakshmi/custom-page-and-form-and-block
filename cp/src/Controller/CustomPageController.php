<?php

namespace Drupal\cp\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class CustomPageController.
 *
 * @package Drupal\cp\Controller
 */
class CustomPageController extends ControllerBase {

  /**
   * Display.
   *
   * @return string
   *   Return Hello string.
   */
  public function display() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('This is example for custom page,it dispaly only page information')
    ];
  }

}
