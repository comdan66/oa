<?php

define ('KEYWORDS', '吳政賢, OA Wu, iOA');

define ('EXT', '.php');
define ('EXTENSION', defined('ENV') ? '.html' : '.php');
define ('FCPATH', implode (DIRECTORY_SEPARATOR, explode (DIRECTORY_SEPARATOR, dirname (str_replace (pathinfo (__FILE__, PATHINFO_BASENAME), '', __FILE__)))) . '/');

define ('PROTOCOL', "http://");
define ('DOMAIN', defined('ENV') ? 'oa.ioa.tw' : 'oa.ioa.tw');

define ('VIEW_NAME', 'views' . DIRECTORY_SEPARATOR);
define ('VIEW', FCPATH . VIEW_NAME);

define ('ASSET_NAME', 'assets' . DIRECTORY_SEPARATOR);
define ('ASSET', FCPATH . ASSET_NAME);

define ('CONTENT_NAME', 'content');

define ('MY_NAME', '吳政賢');
define ('MY_MAIL', 'comdan66@gmail.com');
define ('MY_FB_URL', 'https://www.facebook.com/comdan66');
define ('MY_FB_UID', '100000100541088');

define ('FB_ADMINS', MY_FB_UID);
define ('FB_APP_ID', "1033322433418965");
define ('FB_ARTICLE_AUTHOR', MY_FB_URL);
define ('FB_ARTICLE_PUBLISHER', MY_FB_URL);
