<?php

include_once '../core/controller.php';

$html = Controller::load ()->view (function ($view) {
  
  $view->add ('xxx', 'x')
       ->add ('title', 'xxx')
       // ->add ('h1', 'xx')
       // ->add_js ('article')
       ->add_tab ('index', 'Ａ')
       ->add_tab ('ta', 'Ｂ')
       ->set_tab_index ('index');
});

if (!defined ('ENV')) echo $html;
else return $html;
