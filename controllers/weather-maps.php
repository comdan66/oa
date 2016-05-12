<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

include_once '../core/controller.php';

$html = Controller::load ()->article (function ($view) {
  return array (
      'title' => 'Weather Maps 天氣地圖',
      'keywords' => array ('Weather Maps', '中央氣象局', 'Taiwan Weather', 'Weather', 'Google Maps'),
      'tags' => array ('中央氣象局', 'Google Maps', 'localStorage', 'MarkerWithLabel', 'RWD', 'Geocoding API', 'Static Maps API', 'Street View API', 'navigator.geolocation'),
      'description' => '這項做主要是藉由中央氣象局的網站資料建置出來的，其中主要功能是可以藉由 Google Maps 查詢各地方的天氣預報概況，並且可以查看各個地區的每小時溫度變化，以及搭配使用 localStorage 來實作前端關注的功能。',
      'created_at' => '2015-7-10 00:00:00',
      'updated_at' => date ('Y-m-d H:i:s'),
    );
});

if (!defined ('ENV')) echo $html;
else return $html;