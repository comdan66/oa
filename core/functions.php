<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

if (!function_exists ('avatar_url')) {
  function avatar_url ($fb_id, $w = 100, $h = 100) {
    $size = array ();
    array_push ($size, isset ($w) && $w ? 'width=' . $w : '');
    array_push ($size, isset ($h) && $h ? 'height=' . $h : '');

    return 'https://graph.facebook.com/' . $fb_id . '/picture' . (($size = implode ('&', array_filter ($size))) ? '?' . $size : '');
  }
}
if (!function_exists ('read_file')) {
  function read_file ($file) {
    if (!file_exists ($file)) return false;
    if (function_exists ('file_get_contents')) return file_get_contents ($file);
    if (!$fp = @fopen ($file, 'rb')) return false;

    $data = '';
    flock ($fp, LOCK_SH);
    if (filesize ($file) > 0) $data =& fread ($fp, filesize ($file));
    flock($fp, LOCK_UN);
    fclose($fp);

    return $data;
  }
}
if (!function_exists ('write_file')) {
  function write_file ($path, $data, $mode = 'wb') {
    if (!$fp = @fopen ($path, $mode)) return false;

    flock($fp, LOCK_EX);
    fwrite($fp, $data);
    flock($fp, LOCK_UN);
    fclose($fp);

    return true;
  }
}
if (!function_exists ('write_asset')) {
  function write_asset ($temp, $type) {
    write_file ($path = (ASSET . $type . DIRECTORY_SEPARATOR . ($name = md5 ($temp) . '.' . $type)), "\xEF\xBB\xBF". $temp);

    $oldmask = umask (0);
    @mkdir (dirname ($path), 0777, true);
    umask ($oldmask);

    return '/' . ASSET_NAME . $type . '/' . $name;
  }
}
if (!function_exists ('merge_asset')) {
  function merge_asset (&$list, &$temp, $type) {
    if ($temp) array_push ($list, write_asset ($temp, $type));
    $temp = '';
  }
}

// if (!function_exists ('directory_map')) {
//   function directory_map ($source_dir, $directory_depth = 0, $hidden = false) {
//     if ($fp = @opendir ($source_dir)) {
//       $filedata = array ();
//       $new_depth  = $directory_depth - 1;
//       $source_dir = rtrim ($source_dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

//       while (false !== ($file = readdir ($fp))) {
//         if (!trim ($file, '.') || (($hidden == false) && ($file[0] == '.'))) continue;
//         if ((($directory_depth < 1) || ($new_depth > 0)) && @is_dir ($source_dir . $file)) $filedata[$file] = directory_map ($source_dir . $file . DIRECTORY_SEPARATOR, $new_depth, $hidden);
//         else $filedata[] = $file;
//       }

//       closedir ($fp);
//       return $filedata;
//     }

//     return false;
//   }
// }
// if (!function_exists ('directory_list')) {
//   function directory_list ($source_dir, $hidden = false) {
//     if ($fp = @opendir ($source_dir = rtrim ($source_dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR)) {
//       $filedata = array ();
//       while (false !== ($file = readdir ($fp))) if (!(!trim ($file, '.') || (($hidden == false) && ($file[0] == '.')))) array_push($filedata, $file);
//       closedir ($fp);
//       return $filedata;
//     }
//     return array ();
//   }
// }

// if (!function_exists ('merge_array_recursive')) {
//   function merge_array_recursive ($files, &$a, $k = null) {
//     foreach ($files as $key => $file)
//       if (is_array ($file)) $key . merge_array_recursive ($file, $a, ($k ? $k . DIRECTORY_SEPARATOR : '') . $key);
//       else array_push ($a, ($k ? $k . DIRECTORY_SEPARATOR : '') . $file);
//   }
// }
if (!function_exists ('oasort')) {
  function oasort ($n, $b = true) {
    if ($n == 0) return array ();
    if ($n == 1) return array (1);
    if ($n == 2) return array (2);
    if ($n == 3) return array (3);
    if (!($n % 3) && ($n / 3) < 4) return array_merge (array (3), oasort ($n - 3));
    $s = $b ? 2 : 3;
    $v = $n - $s;
    return array_merge (array ($s), oasort ($v, !$b));
  }
}


if (!function_exists ('np')) {
  function np (&$menus, $file) {
    $items = array ();
    $p = $c = $n = null;

    foreach ($menus as &$menu)
      foreach ($menu['items'] as &$item) {
        $item['img'] = img_url ('left', $item['file'] . '.jpg');
        $item['cover'] = img_url ('cover', $item['file'] . '.jpg');

        $item['og_img'] = img_url ('og', $item['file'] . '.jpg');
        $item['url'] = base_url ($item['file'] . EXTENSION);
        $item['active'] = $item['file'] == $file;
        if (!isset ($item['pictures'])) $item['pictures'] = array ();
        $item['pics'] = $item['pictures'];

        $oasort = array_filter (oasort (count ($item['pictures'])));
        $b = array ();
        $j = 0;
        foreach ($oasort as $cc) { $d = array (); for ($i = 0; $i < $cc; $i++) array_push ($d, $item['pictures'][$j++]); array_push ($b, $d); }
        $item['pictures'] = $b;

        if (in_array ($item['type'], array ('article', 'demo', 'album'))) {
          array_push ($items, $item);
        } else if (in_array ($item['type'], array ('more', 'albums'))) {
          foreach ($item['sub'] as &$sub) {

            $sub['img'] = img_url ('left', $sub['file'] . '.jpg');
            $sub['cover'] = img_url ('cover', $sub['file'] . '.jpg');
            $sub['og_img'] = img_url ('og', $sub['file'] . '.jpg');
            $sub['url'] = base_url ($sub['file'] . EXTENSION);
            if (!isset ($sub['pictures'])) $sub['pictures'] = array ();
            $sub['pics'] = $sub['pictures'];
            
            $oasort = array_filter (oasort (count ($sub['pictures'])));
            
            $b = array (); $j = 0; foreach ($oasort as $cc) { $d = array (); for ($i = 0; $i < $cc; $i++) array_push ($d, $sub['pictures'][$j++]); array_push ($b, $d); }
            $sub['pictures'] = $b;

            if (in_array ($sub['type'], array ('article', 'demo', 'album'))) {
              if ($sub['active'] = $sub['file'] == $file)
                $item['active'] = true;

              array_push ($items, $sub);
            }
          }
        }

        if ($item['active'] && in_array ($item['type'], array ('more', 'albums'))) {
          $c = $item;
          $n = $c['sub'][0];
        }
        if (!$c) $p = $item;
      }

    if ($c['file'] != $file) $c = null;
      
    if (!$c && !($p = $c = $n = null))
      for ($i = 0; $i < count ($items); $i++) {
        if ($i - 1 >= 0) $p = $items[$i - 1];
        if ($i + 1 < count($items)) $n = $items[$i + 1];
        if ($items[$i]['active'] && ($c = $items[$i]))
          break;        
      }
    if ($n['file'] == $c['file']) $n = null;

    return $c && ($p || $n) ? array (
        'p' => $p,
        'n' => $n,
        'c' => $c
      ) : array ();
  }
}
if (!function_exists ('base_url')) {
  function base_url () {
    $uri = array_filter (func_get_args ());
    return PROTOCOL . DOMAIN . '/' . (defined('ENV') ? '' : 'controllers/') . implode ('/', $uri);
  }
}
if (!function_exists ('img_url')) {
  function img_url () {
    $uri = array_filter (func_get_args ());
    return PROTOCOL . DOMAIN . '/' . 'assets/' . (defined('ENV') ? 'img/' : 'img_ori/') . implode ('/', $uri);
  }
}

if (!function_exists ('oa_meta')){
  function oa_meta ($attributes = array ()) {
    return $attributes ? '<meta ' . implode (' ', array_map (function ($attribute, $value) { return $attribute . '="' . $value . '"'; }, array_keys ($attributes), $attributes)) . ' />' : '';
  }
}

if (!function_exists ('remove_ckedit_tag')) {
  function remove_ckedit_tag ($text) {
    return preg_replace ("/ +/", " ", preg_replace ("/&#?[a-z0-9]+;/i", "", str_replace ('▲', '', trim (strip_tags ($text)))));
  }
}