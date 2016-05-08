<?php if (!defined ('FCPATH')) exit ('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

if (!function_exists ('color')) {
  function color ($string, $foreground_color = null, $background_color = null, $is_print = false) {
    if (!strlen ($string)) return "";
    $colored_string = "";
    $keys = array ('n' => '30', 'w' => '37', 'b' => '34', 'g' => '32', 'c' => '36', 'r' => '31', 'p' => '35', 'y' => '33');
    if ($foreground_color && in_array (strtolower ($foreground_color), array_map ('strtolower', array_keys ($keys)))) {
      $foreground_color = !in_array (ord ($foreground_color[0]), array_map ('ord', array_keys ($keys))) ? in_array (ord ($foreground_color[0]) | 0x20, array_map ('ord', array_keys ($keys))) ? '1;' . $keys[strtolower ($foreground_color[0])] : null : $keys[$foreground_color[0]];
      $colored_string .= $foreground_color ? "\033[" . $foreground_color . "m" : "";
    }
    $colored_string .= $background_color && in_array (strtolower ($background_color), array_map ('strtolower', array_keys ($keys))) ? "\033[" . ($keys[strtolower ($background_color[0])] + 10) . "m" : "";

    if (substr ($string, -1) == "\n") { $string = substr ($string, 0, -1); $has_new_line = true; } else { $has_new_line = false; }
    $colored_string .=  $string . "\033[0m";
    $colored_string = $colored_string . ($has_new_line ? "\n" : "");
    if ($is_print) printf ($colored_string);
    return $colored_string;
  }
}

if (!function_exists ('load_view')) {
  function load_view ($_oa_path = '', $data = array ()) {
    if (!$_oa_path) return '';

    extract ($data);
    ob_start ();

    if (((bool)@ini_get ('short_open_tag') === false) && (false == true)) echo eval ('?>'.preg_replace ("/;*\s*\?>/", "; ?>", str_replace ('<?=', '<?php echo ', file_get_contents ($_oa_path))));
    else include $_oa_path;

    $buffer = ob_get_contents ();
    @ob_end_clean ();

    return preg_replace ('/{<{<{([\n| ])/i', '<?php$1', $buffer);
  }
}

if (!function_exists ('write_file')) {
  function write_file ($path, $data, $mode = 'wb') {
    if (!$fp = @fopen($path, $mode))
      return false;

    flock ($fp, LOCK_EX);
    fwrite ($fp, $data);
    flock ($fp, LOCK_UN);
    fclose ($fp);
    return true;
  }
}

if (!function_exists ('directory_map')) {
  function directory_map ($source_dir, $directory_depth = 0, $hidden = false) {
    if ($fp = @opendir ($source_dir)) {
      $filedata = array ();
      $new_depth  = $directory_depth - 1;
      $source_dir = rtrim ($source_dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

      while (false !== ($file = readdir ($fp))) {
        if (!trim ($file, '.') || (($hidden == false) && ($file[0] == '.')))
          continue;

        if ((($directory_depth < 1) || ($new_depth > 0)) && @is_dir ($source_dir . $file))
          $filedata[$file] = directory_map ($source_dir . $file . DIRECTORY_SEPARATOR, $new_depth, $hidden);
        else
          $filedata[] = $file;
      }

      closedir ($fp);
      return $filedata;
    }

    return false;
  }
}
if (!function_exists ('directory_list')) {
  function directory_list ($source_dir, $hidden = false) {
    if ($fp = @opendir ($source_dir = rtrim ($source_dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR)) {
      $filedata = array ();

      while (false !== ($file = readdir ($fp)))
        if (!(!trim ($file, '.') || (($hidden == false) && ($file[0] == '.'))))
          array_push($filedata, $file);

      closedir ($fp);
      return $filedata;
    }
    return array ();
  }
}

if (!function_exists ('merge_array_recursive')) {
  function merge_array_recursive ($files, &$a, $k = null) {
    foreach ($files as $key => $file)
      if (is_array ($file)) $key . merge_array_recursive ($file, $a, ($k ? $k . DIRECTORY_SEPARATOR : '') . $key);
      else array_push ($a, ($k ? $k . DIRECTORY_SEPARATOR : '') . $file);
  }
}


if (!function_exists ('delete_files')) {
  function delete_files ($path, $del_dir = false, $level = 0) {
    $path = rtrim ($path, DIRECTORY_SEPARATOR);

    if (!$current_dir = @opendir ($path)) return false;

    while (false !== ($filename = @readdir ($current_dir)))
      if (($filename != ".") && ($filename != ".."))
        if (is_dir ($path . DIRECTORY_SEPARATOR . $filename)) {
          if (substr ($filename, 0, 1) != '.') delete_files ($path . DIRECTORY_SEPARATOR . $filename, $del_dir, $level + 1);
        } else {
          unlink ($path . DIRECTORY_SEPARATOR . $filename);
        }

    @closedir ($current_dir);

    if (($del_dir == true) && ($level > 0))
      return @rmdir ($path);

    return true;
  }
}


if (!function_exists ('read_file')) {
  function read_file ($file) {
    if (!file_exists ($file)) return false;

    if (function_exists ('file_get_contents')) return file_get_contents ($file);

    if (!$fp = @fopen ($file, 'rb')) return false;

    flock ($fp, LOCK_SH);

    $data = '';
    if (filesize ($file) > 0) $data =& fread ($fp, filesize ($file));

    flock ($fp, LOCK_UN);
    fclose ($fp);

    return $data;
  }
}