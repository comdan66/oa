<?php

include_once '../core/controller.php';

$html = Controller::load ()->article (function ($view) {

  $view->add_tab ('index', '基本簡介')
       ->add_tab ('university', '大學時期')
       ->set_tab_index ('index')
       ->add ('message', '部分作品資料尚未準備齊全，努力更新中..');
});

if (!defined ('ENV')) echo $html;
else return $html;
