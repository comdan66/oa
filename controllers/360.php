<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

include_once '../core/controller.php';

$html = Controller::load ()->article (function ($view) {
  return array (
      'title' => '全景相簿 Theta S 360',
      'keywords' => array ('Theta S 360', '全景', 'Stereographics Projection', 'Ricoh Theta s', 'Ricoh'),
      'tags' => array ('Theta S', 'AWS S3', 'TinyPNG'),
      'description' => '這是一項特別的作品，由於近幾年全景攝影器材的進步，所以全景影片、全景照片漸漸的流行起來，而最近剛好也入購了 RICOH Theta S 全景攝影機，所以我便實作了一下 360度全景相簿！',
      'created_at' => '2015-11-30 00:00:00',
      'updated_at' => date ('Y-m-d H:i:s'),
    );
});

if (!defined ('ENV')) echo $html;
else return $html;