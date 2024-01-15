<?php

namespace Drupal\hello_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class WellcomeController extends ControllerBase {

  public function wellcome() {

    return [
      '#theme' => 'wellcome_body',
      '#attached' => [
        'library' => [
          'hello_module/hello_module',
        ],
      ],
    ];
  }
  public function detail() {

    return [
      '#theme' => 'detail',
      '#attached' => [
        'library' => [
          'hello_module/hello_module',
        ],
      ],
    ];
  }

}
