<?php

include_once '../core/controller.php';

echo Controller::load ()->view (function ($view) {
  $view->add ('xxx', 'x')
       ->add ('title', 'xxx')
       ->add ('h1', 'xx')
       ->add_js ('article')
       ->add_tab ('index', '分頁 1')
       ->add_tab ('ta', '分頁 2')
       ->set_tab_index ('index');
});