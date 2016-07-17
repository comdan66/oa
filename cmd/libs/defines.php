<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

mb_regex_encoding ("UTF-8");
mb_internal_encoding ('UTF-8');

date_default_timezone_set ('Asia/Taipei');

define ('PROTOCOL', "http://");

define ('JS', '.js');
define ('CSS', '.css');
define ('JSON', '.json');
define ('HTML', '.html');
define ('TXT', '.txt');
define ('XML', '.xml');

define ('NAME', ($temps = array_filter (explode (DIRECTORY_SEPARATOR, PATH))) ? end ($temps) : '');

define ('ENV', 'build');

define ('PATH_ASSETS', PATH . 'assets' . DIRECTORY_SEPARATOR);
define ('PATH_JS', PATH_ASSETS . 'js' . DIRECTORY_SEPARATOR);
define ('PATH_CSS', PATH_ASSETS . 'css' . DIRECTORY_SEPARATOR);

define ('PATH_CORE', PATH . 'core' . DIRECTORY_SEPARATOR);
define ('PATH_CONTROLLER', PATH . 'controllers' . DIRECTORY_SEPARATOR);
define ('PATH_SITEMAP', PATH . 'sitemap' . DIRECTORY_SEPARATOR);
