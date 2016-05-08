<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

date_default_timezone_set ('Asia/Taipei');

define ('ENV', 'production');
define ('EXT', '.php');
define ('HTML', '.html');
define ('CMD_DIR', 'cmd' . DIRECTORY_SEPARATOR);
define ('TPL_DIR', 'templates' . DIRECTORY_SEPARATOR);
define ('FCPATH', implode (DIRECTORY_SEPARATOR, explode (DIRECTORY_SEPARATOR, dirname (str_replace (pathinfo (__FILE__, PATHINFO_BASENAME), '', __FILE__)))) . '/');

include_once FCPATH . CMD_DIR . 'function' . EXT;

$files = array ();
merge_array_recursive (directory_list (FCPATH), $files);
$files = array_filter ($files, function ($file) {
  return pathinfo ($file, PATHINFO_EXTENSION) == 'html';
});

$files = array ();
merge_array_recursive (directory_list (FCPATH . TPL_DIR, $files), $files);

$files = array_map (function ($file) {
  return pathinfo ($file, PATHINFO_FILENAME);
}, array_filter ($files, function ($file) {
  return (pathinfo ($file, PATHINFO_EXTENSION) == 'php') && (preg_match ('/^_/', $file) == '_');
}));

foreach ($files as $file) write_file (FCPATH . $file . HTML, load_view (FCPATH . TPL_DIR . $file . EXT, array ()));
