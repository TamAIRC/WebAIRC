# Tạo Module Drupal 10
## Các bước để xây dựng 1 module :
### Tạo 1 folder lưu trữ các file của module.
- Tạo 1 file ten_module.info.yml : Tệp này chứa thông tin về module, bao gồm tên, phiên bản, mô tả, và các yêu cầu về phiên bản core của Drupal.
~~~php
name: Hello Word
type: module
description: "Module test."
core_version_requirement: ^8.8 || ^9 || ^10

version: '8.x-1.0'

~~~
- Tạo 1 file ten_module.module : Đây là nơi bạn thêm các hàm, hooks, và mã nguồn chính của module.
~~~php
<?php

use Drupal\Core\Form\FormStateInterface;


function mymodule_cron() {
  \Drupal::messenger()->addMessage(t("Hello from mymodule cron hook"));
}

function mymodule_form_alter(array &$form, FormStateInterface $form_state, $form_id) {
  if ($form_id == 'node_article_edit_form') {
    $form['actions']['submit']['#value'] = t("Save this awesome article!");
  }
}
~~~

### Thư mục config (tên module/config):
Nếu module của bạn liên quan đến cấu hình, bạn có thể có thư mục config để lưu trữ các tệp cấu hình.

### Thư mục src (tên module/src):
Nếu module sử dụng các lớp PHP, bạn có thể đặt chúng trong thư mục src.

* Trong src
  1. Controller : Thông thường, bạn có thể đặt các lớp controller trong thư mục src/Controller.

  ~~~php
  namespace Drupal\custom_module\Controller;

  use Drupal\Core\Controller\ControllerBase;

  class CustomController extends ControllerBase {
    public function content() {
      return [
        '#markup' => $this->t('Hello, this is custom content.'),
      ];
    }
  }
  ~~~

  2. Forms : Nếu module của bạn liên quan đến các biểu mẫu, bạn có thể đặt các lớp form trong thư mục src/Form.
  ~~~php
  namespace Drupal\custom_module\Form;

  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;

  class CustomForm extends FormBase {
    public function getFormId() {
      return 'custom_module_custom_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
      // Xây dựng form ở đây.
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
      // Xử lý khi form được gửi.
    }
  }
  ~~~
  3. Services : Nếu bạn cần sử dụng các dịch vụ (services) trong module, bạn có thể tạo các lớp service và đặt chúng trong thư mục src/Service.

  4. Event Subscribers và EventListeners : Nếu bạn muốn phản ứng với các sự kiện (events) trong hệ thống, bạn có thể đặt các lớp event subscriber và event listener trong thư mục src/EventSubscriber hoặc src/EventListener.

  5. Plugins: Nếu module sử dụng các loại plugins, bạn có thể đặt các lớp plugin trong thư mục src/Plugin.

  6. Tests: Các lớp kiểm thử (tests) cho module cũng có thể được đặt trong thư mục src/Tests.

- Tạo 1 file ten_module.routing.yml : Tệp này để xác định các tuyến đường truyền.

~~~php
custom_module.route_name:
  path: '/custom-path'
  defaults:
    _controller: '\Drupal\custom_module\Controller\CustomController::content'
    _title: 'Custom Page'
  requirements:
    _permission: 'access content'
~~~

- Tạo 1 file ten_module.links.menu.yml : Nếu module thêm các liên kết vào menu, bạn có thể có một tệp YAML để định nghĩa chúng.

~~~php
custom_module.menu_link_name:
  menu_name: main-menu
  link_path: '/custom-path'
  link_title: 'Custom Page'
  weight: 10
~~~

### Thư mục templates (tên module/templates):

Nếu module sử dụng các mẫu Twig, bạn có thể đặt chúng trong thư mục templates.

### Thư mục tests (tên module/tests):

Nếu bạn viết các bài kiểm tra (tests) cho module, bạn có thể đặt chúng trong thư mục tests.


