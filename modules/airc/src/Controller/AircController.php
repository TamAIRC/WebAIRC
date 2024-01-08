<?php

namespace Drupal\airc\Controller;

use Drupal\Core\Controller\ControllerBase;

class AircController extends ControllerBase {

  public function index() {

    $content = [];
    $content ['name'] = 'Tôi là Nam';
    return [
      '#theme' => 'content-listing',
      '#content' => $content,
    ];
  }

  // public function content() {
  //   return [
  //     '#markup' => $this->t('Hello, this is custom content.'),
  //   ];
  // }

  // public function contrast() {
  //   return [
  //     '#markup' => $this->t('CHào mừng đến với contrast.'),
  //   ];
  // }

  // public function organizational () {
  //   return [
  //     '#markup' => $this->t('Chào mừng đến với cơ cấu tổ chức.'),
  //   ];
  // }


}
