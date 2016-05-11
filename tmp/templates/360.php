<?php

include_once '_def.php';
$menus = menus ();
$title = '全景相簿 Theta 360';
$now = '360';
$desc = '這是一項特別的作品，由於近幾年全景攝影器材的進步，所以全景影片、全景照片漸漸的流行起來，而最近剛好也入購了 RICOH Theta S 全景攝影機，所以我便實作了一下 360度全景相簿！';
$keyowrds = array ('Theta 360', '全景', 'Stereographics Projection', 'Ricoh Theta s', 'Ricoh');

$np = np ($menus, $now);


$og_img = '';
$created_at = date ('c', strtotime (date ('2015-11-30 00:00:00')));
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
