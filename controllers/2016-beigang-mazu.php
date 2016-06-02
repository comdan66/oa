<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

include_once '../core/controller.php';

$html = Controller::load ()->demo (function ($view) {
  return array (
      'no_tip' => true,
      'no_show_mail' => true,
    );
});

if (!defined ('ENV')) echo $html;
else return $html;