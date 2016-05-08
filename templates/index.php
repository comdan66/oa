<?php

include_once '_def.php';

$header = view ('_' . DIRECTORY_SEPARATOR . 'header', array (
  'logo' => 'logo',
  'title' => 'xxx',
));

$left = view ('_' . DIRECTORY_SEPARATOR . 'left', array (
  'mobile_logo' => array ('Logo 1', 'Logo 2'),
  'menus' => $menus,
  'href' => ''
));

$tab = view ('_' . DIRECTORY_SEPARATOR . 'tab', array (
  'tabs' => array (
      array ('text' => '分頁 1', 'href' => '', 'target' => '_self'),
      array ('text' => '分頁 2', 'href' => '', 'target' => '_self'),
    ),
  'href' => ''
));

$footer = view ('_' . DIRECTORY_SEPARATOR . 'footer', array (
  'title' => '網站名稱',
  'href' => 'https://www.facebook.com/comdan66'
));

$content = view ('content' . DIRECTORY_SEPARATOR . 'home', array ());

?><!DOCTYPE html>
<html lang="tw">
  <head>
    <meta http-equiv="Content-Language" content="zh-tw" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />

    <title></title>

    <meta name="robots" content="index,follow" />

    <meta name="author" content="吳政賢(OA Wu)" />

    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />

    <meta property="fb:admins" content="100000100541088" />
    <meta property="fb:app_id" content="640377126095413" />

    <meta property="og:locale" content="zh_TW" />
    <meta property="og:locale:alternate" content="en_US" />

    <meta property="og:type" content="city" />
    <meta property="og:image" content="" alt="" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <?php echo load_css_js ('css', array ());?>
    <?php echo load_css_js ('js', array ('jrit'));?>

  </head>
  <body lang="zh-tw">

    <?php echo $header; ?>

    <div id='_c'>
      <div>

        <?php echo $left;?>
        <div>

          <?php echo $tab;?>

          <div class='_c'><?php echo $content;?></div>

          <div class='_m'>提示訊息</div>
        </div>

        <span></span>
      </div>
    </div>

    <?php echo $footer;?>

    <div id='fb-root'></div>

  </body>
</html>
