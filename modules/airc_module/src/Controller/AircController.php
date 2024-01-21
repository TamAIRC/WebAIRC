<?php

namespace Drupal\airc_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines AircController class.
 */
class AircController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() { 
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Airc, Hello my friend!'),
    ];
  }

}
