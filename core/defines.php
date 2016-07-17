<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

date_default_timezone_set ('Asia/Taipei');

define ('KEYWORDS', '吳政賢, OA Wu, iOA');

define ('EXT', '.php');
define ('EXTENSION', defined('ENV') ? '.html' : '.php');
define ('FCPATH', implode (DIRECTORY_SEPARATOR, explode (DIRECTORY_SEPARATOR, dirname (str_replace (pathinfo (__FILE__, PATHINFO_BASENAME), '', __FILE__)))) . '/');

if (!defined ('PROTOCOL')) define ('PROTOCOL', "http://");
if (!defined ('DOMAIN')) define ('DOMAIN', 'oa.ioa.tw');

define ('VIEW_NAME', 'views' . DIRECTORY_SEPARATOR);
define ('VIEW', FCPATH . VIEW_NAME);

define ('ASSET_NAME', 'assets' . DIRECTORY_SEPARATOR);
define ('ASSET', FCPATH . ASSET_NAME);

define ('CONTENT_NAME', 'content');


define ('OA', '吳政賢');
define ('OA_MAIL', 'comdan66@gmail.com');
define ('OA_FB_UID', '100000100541088');
define ('OA_FB_URL', 'https://www.facebook.com/comdan66/');

define ('FB_APP_ID', '1033322433418965');
define ('FB_ADMIN_ID', OA_FB_UID);

define ('FB_ARTICLE_AUTHOR_URL', OA_FB_URL);
define ('FB_ARTICLE_PUBLISHER_URL', OA_FB_URL);
