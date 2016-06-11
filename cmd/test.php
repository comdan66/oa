<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

define ('ENV', 'build');

include_once 'libs/functions.php';
include_once 'libs/image/ImageUtility.php';
$files = array (
  '/Users/OA/www/oa/assets/css/2010-1217-sym-gt125.jpg',
  '/Users/OA/www/oa/assets/css/2012-1219-ipad-with-retina-display.jpg',
  '/Users/OA/www/oa/assets/css/2013-0112-tamsui-old-street.jpg',
  '/Users/OA/www/oa/assets/css/2013-0202-sakura.jpg',
  '/Users/OA/www/oa/assets/css/2013-0428-beigang-mazu.jpg',
  '/Users/OA/www/oa/assets/css/2013-0612-tamsui-shimizu-patriarch.jpg',
  // '/Users/OA/www/oa/assets/css/2014-0323-tamsui-sunset.jpg',
  // '/Users/OA/www/oa/assets/css/2014-0408-beigang-mazu.jpg',
  // '/Users/OA/www/oa/assets/css/2014-0503-sleeping-cat.jpg',
  );

$img = ImageUtility::photos ($files, '/Users/OA/www/oa/assets/css/a.png');
