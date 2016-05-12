<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

include_once '../core/controller.php';

$html = Controller::load ()->article (function ($view) {
  return array (
      'title' => 'Point in Polygon 範圍內取點',
      'keywords' => array ('point-in-polygon', '範圍內取點'),
      'tags' => array ('LatLngBounds', 'Google Maps Polyline', 'Ajax', 'CodeIgniter'),
      'description' => '這是個 OA Wu 開發的工具，而且需要前後端配合一起弄的作品，主要目的是撈出藉由不規則多邊形範圍內的點座標。',
      'created_at' => '2015-11-26 00:00:00',
      'updated_at' => date ('Y-m-d H:i:s'),
    );
});

if (!defined ('ENV')) echo $html;
else return $html;