<?php

include_once '_def.php';
$menus = menus ();
$title = 'Weather Maps 天氣地圖';
$now = 'weather-maps';
$desc = '這項做主要是藉由中央氣象局的網站資料建置出來的，其中主要功能是可以藉由 Google Maps 查詢各地方的天氣預報概況，並且可以查看各個地區的每小時溫度變化，以及搭配使用 localStorage 來實作前端關注的功能。';
$keyowrds = array ('Weather Maps', '中央氣象局', 'Taiwan Weather', 'Weather', 'Google Maps');

$np = np ($menus, $now);


$og_img = '';
$created_at = date ('c', strtotime (date ('2015-7-10 00:00:00')));
$updated_at = date ('c');
$json_ld = json_ld_article (base_url (isset ($now_tab) && $now_tab ? $now_tab : $now), $title, $og_img, $created_at, $updated_at, $desc);

$assets = array ('article');
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
      // array ('text' => '簡敘', 'href' => base_url ('index')),
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
    'created_at' => $created_at,
    'np' => $np,
    'now' => isset ($now_tab) && $now_tab ? $now_tab : $now,
  ));

echo load_frame ($json_ld, $assets, $og_img, $now, $title, $desc, $keyowrds, $content, $header, $left, $tab, $msg, $footer, $created_at, $updated_at);