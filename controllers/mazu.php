<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

include_once '../core/controller.php';

$html = Controller::load ()->article (function ($view) {
  return array (
      'title' => '北港迎媽祖',
      'keywords' => array ('北港迎媽祖'),
      'tags' => array ('Material Design', 'php7', 'Google Maps', 'TinyPNG', 'JSON-LD', 'Google AMP', 'schema'),
      'description' => '北港迎媽祖，這是個為我的家鄉的活動製作網站，幾本上是屬於義務性幫忙、非官方、沒盈利的自主服務。每年我都會在北港農曆三月十九迎媽祖前數個月開始製作，目前為止這網站我算是不斷自我突破吧！整體從 設計、後端、系統、切版、攝影、上稿，基本上都是我嘗試一個人完成！',
      'created_at' => '2016-04-25 00:00:00',
      'updated_at' => date ('Y-m-d H:i:s'),
    );
});

if (!defined ('ENV')) echo $html;
else return $html;
