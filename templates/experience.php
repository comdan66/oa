<?php

include_once '_def.php';
$menus = menus ();
$title = 'OA 的工作經驗';

$header = view ('_' . DIRECTORY_SEPARATOR . 'header', array (
  'logo' => logo (),
  'title' => $title,
));

$left = view ('_' . DIRECTORY_SEPARATOR . 'left', array (
  'mobile_logo' => array ('Logo 1', 'Logo 2'),
  'menus' => $menus,
  'href' => base_url ('index')
));

$tab = view ('_' . DIRECTORY_SEPARATOR . 'tab', array (
  'tabs' => array (
      array ('text' => '簡歷', 'href' => base_url ('index')),
      array ('text' => '經驗', 'href' => base_url ('experience')),
    ),
  'href' => base_url ('experience')
));

$msg = view ('_' . DIRECTORY_SEPARATOR . 'msg', array (
  'msg' => ''
));

$footer = view ('_' . DIRECTORY_SEPARATOR . 'footer', array (
  'title' => title (),
  'href' => 'https://www.facebook.com/comdan66'
));

$content = view ('content' . DIRECTORY_SEPARATOR . 'experience', array ());

echo load_frame ($title, $content, $header, $left, $tab, $msg, $footer);
