<?php

include_once '_def.php';
$menus = menus ();
$title = 'OA\'s 工作經驗';
$now = 'index';
$now_tab = 'experience';
$desc = '';
$keyowrds = array ();

$np = np ($menus, $now);


$og_img = '';
$created_at = date ('c', strtotime (date ('2016-04-25 00:00:00')));
$updated_at = date ('c');
$json_ld = json_ld_article (base_url (isset ($now_tab) && $now_tab ? $now_tab : $now), $title, $og_img, $created_at, $updated_at, $desc);

$assets = array ();
$header = view ('_' . DIRECTORY_SEPARATOR . 'header', array (
  'logo' => logo (),
  'title' => $title,
));

$left = view ('_' . DIRECTORY_SEPARATOR . 'left', array (
  'mobile_logo' => array ('Logo 1', 'Logo 2'),
  'menus' => $menus,
  'href' => base_url ($now)
));

$tab = view ('_' . DIRECTORY_SEPARATOR . 'tab', array (
  'tabs' => array (
      array ('text' => '簡歷', 'href' => base_url ('index')),
      array ('text' => '經驗', 'href' => base_url ('experience')),
    ),
  'href' => base_url (isset ($now_tab) && $now_tab ? $now_tab : $now)
));

$msg = view ('_' . DIRECTORY_SEPARATOR . 'msg', array (
  'msg' => ''
));

$footer = view ('_' . DIRECTORY_SEPARATOR . 'footer', array (
  'title' => title (),
  'href' => 'https://www.facebook.com/comdan66'
));

$content = view ('content' . DIRECTORY_SEPARATOR . (isset ($now_tab) && $now_tab ? $now_tab : $now), array (
    'title' => $title,
    'np' => $np
  ));
echo load_frame ($json_ld, $assets, $og_img, $now, $title, $desc, $keyowrds, $content, $header, $left, $tab, $msg, $footer, $created_at, $updated_at);
