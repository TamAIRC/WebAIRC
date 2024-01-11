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
    // $content = "xin chào mọi người";
    // return [
    //   'theme' => 'wellcome_airc',
    //   '#content' => $content,
    //   '#attached' => [
    //     'library' => [
    //       'airc/wellcome-airc'
    //     ]
    //   ]
    // ];
}
