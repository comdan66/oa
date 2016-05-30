<?php

include_once '../core/controller.php';

$html = Controller::load ('index')->article (function ($view) {
  
  $view->add ('xxx', 'x')
       ->add ('title', 'xxx')
       // ->add ('h1', 'xx')
       // ->add_js ('article')
       ->add_tab ('index', '基本簡介')
       ->add_tab ('university', '大學時期')
       ->set_tab_index ('university');
});

if (!defined ('ENV')) echo $html;
else return $html;
