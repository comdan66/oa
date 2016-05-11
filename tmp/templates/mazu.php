<?php

include_once '_def.php';
$menus = menus ();
$title = '北港迎媽祖';
$now = 'mazu';
$desc = '北港迎媽祖，這是個為我的家鄉的活動製作網站，幾本上是屬於義務性幫忙、非官方、沒盈利的自主服務。每年我都會在北港農曆三月十九迎媽祖前數個月開始製作，目前為止這網站我算是不斷自我突破吧！整體從 設計、後端、系統、切版、攝影、上稿，基本上都是我嘗試一個人完成！';
$keyowrds = array ('北港迎媽祖');

$np = np ($menus, $now);


$og_img = '';
$created_at = date ('c', strtotime (date ('2016-04-25 00:00:00')));
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