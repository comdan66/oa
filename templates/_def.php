<?php 

define ('LEXT', !defined ('ENV') ? '.php' : '.html');
if (!defined ('EXT')) define ('EXT', '.php');

class Assets {
  static $assets = array ();

  public static function push ($asset) {
    array_push (self::$assets, $asset);
  }
  public static function all () {
    return self::$assets;
  }
}

$menus = array (
    '主分類' => array (
        array ('text' => '選項 1', 'href' => '', 'class' => '', 'target' => '_self'),
        array ('text' => '選項 2', 'href' => '', 'class' => '', 'target' => '_self'),
        array ('text' => '選項 3', 'href' => '', 'class' => '', 'target' => '_self'),
      )
  );

if (!function_exists ('load_view')) {
  function load_view ($__o__p__ = '', $__o__d__ = array ()) {
    if (!$__o__p__) return '';

    extract ($__o__d__);
    ob_start ();
    if (((bool)@ini_get ('short_open_tag') === FALSE) && (false == TRUE)) echo eval ('?>'.preg_replace ("/;*\s*\?>/", "; ?>", str_replace ('<?=', '<?php echo ', file_get_contents ($__o__p__))));
    else include $__o__p__;
    $buffer = ob_get_contents ();
    @ob_end_clean ();

    return preg_replace ('/{<{<{([\n| ])/i', '<?php$1', $buffer);
  }
}

if (!function_exists ('view')) {
  function view ($__p__ = '', $__o__d__ = array ()) {
    if (!$__p__) return null;

    Assets::push ($__p__);
    $__o__p__ = $__p__ . EXT;
    $base_path = defined ('ENV') ? '../' : '';
    return load_view ($base_path . (defined ('TPL_DIR') ? TPL_DIR : '') . $__o__p__, $__o__d__);
  }
}

if (!function_exists ('load_css_js')) {
  function load_css_js ($type, $prepend = array (), $append = array ()) {

    $base_path = !defined ('ENV') ? '../' . $type . '/' : ($type . '/');
    $name_list = array_filter (array_map (function ($t) use ($base_path, $type) {
          return (!preg_match ('/^https?:\/\//', $t) ? $base_path . $t : $t) . '.' . $type;
        }, array_merge ($prepend, array ('frame'), Assets::all (), $append)), function ($path) {
          return file_exists ($path) || preg_match ('/^https?:\/\//', $path);
        });

    return implode ('', array_map (function ($name) use ($type) {
      return $type == 'css' ? "<link href='" . $name . "' 'css/frame.css' rel='stylesheet' type='text/css' />" : '<script src="' . $name . '" language="javascript" type="text/javascript" ></script>';
    }, $name_list));
  }
}
