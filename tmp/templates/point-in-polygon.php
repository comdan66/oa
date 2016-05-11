<?php

include_once '_def.php';
$menus = menus ();
$title = 'Point in Polygon 範圍內取點';
$now = 'point-in-polygon';
$desc = '這是個 OA Wu 開發的工具，而且需要前後端配合一起弄的作品，主要目的是撈出藉由不規則多邊形範圍內的點座標。';
$keyowrds = array ('point-in-polygon', '範圍內取點');

$np = np ($menus, $now);


$og_img = '';
$created_at = date ('c', strtotime (date ('2015-11-26 00:00:00')));
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