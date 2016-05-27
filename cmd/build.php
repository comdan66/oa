<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

include_once 'libs/functions.php';
  
$file = array_shift ($argv);
$argv = params ($argv, array (array ('-d', '-domain')));

define ('DOMAIN', isset ($argv['-d']) ? $argv['-d'][0] : 'oa.ioa.tw');
define ('ENV', 'build');

// ========================================================================
// ========================================================================
// ========================================================================

echo "\n" . str_repeat ('=', 80) . "\n";
echo ' ' . color ('執行開始', 'P') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ➜ ' . color ('列出舊 HTML 檔案', 'g');
$files = array ();
merge_array_recursive (directory_list ('root'), $files, 'root');
$files = array_filter ($files, function ($file) { return in_array (pathinfo ($file, PATHINFO_EXTENSION), array ('html')); });
echo color ('(' . ($c = count ($files)) . ')', 'g') . ' - 100% - ' . color ('成功取得舊 HTML 檔案', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$i = 0;
if ($files = array_filter (array_map (function ($file) use (&$i, $c) {
  echo sprintf ("\r" . ' ➜ ' . color ('刪除舊 HTML 檔案(' . $c . ')', 'g') . " - % 3d%% ", ceil ((++$i * 100) / $c));
  return !@unlink ($file);
}, $files))) {
  echo '- ' . color ('刪除舊檔案失敗！', 'r') . "\n";
  echo str_repeat ('=', 80) . "\n";
  return;
}
echo '- ' . color ('刪除舊檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ➜ ' . color ('列出舊 css 檔案', 'g');
$files = array ();
merge_array_recursive (directory_list ('root/assets/css'), $files, 'root/assets/css');
$files = array_filter ($files, function ($file) { return in_array (pathinfo ($file, PATHINFO_EXTENSION), array ('css')); });
echo color ('(' . ($c = count ($files)) . ')', 'g') . ' - 100% - ' . color ('成功取得舊 css 檔案', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$i = 0;
if ($files = array_filter (array_map (function ($file) use (&$i, $c) {
  echo sprintf ("\r" . ' ➜ ' . color ('刪除舊 css 檔案(' . $c . ')', 'g') . " - % 3d%% ", ceil ((++$i * 100) / $c));
  return !@unlink ($file);
}, $files))) {
  echo '- ' . color ('刪除舊檔案失敗！', 'r') . "\n";
  echo str_repeat ('=', 80) . "\n";
  return;
}
echo '- ' . color ('刪除舊檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ➜ ' . color ('列出舊 JavaScript 檔案', 'g');
$files = array ();
merge_array_recursive (directory_list ('root/assets/js'), $files, 'root/assets/js');
$files = array_filter ($files, function ($file) { return in_array (pathinfo ($file, PATHINFO_EXTENSION), array ('js')); });
echo color ('(' . ($c = count ($files)) . ')', 'g') . ' - 100% - ' . color ('成功取得舊 JavaScript 檔案', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$i = 0;
if ($files = array_filter (array_map (function ($file) use (&$i, $c) {
  echo sprintf ("\r" . ' ➜ ' . color ('刪除舊 JavaScript 檔案(' . $c . ')', 'g') . " - % 3d%% ", ceil ((++$i * 100) / $c));
  return !@unlink ($file);
}, $files))) {
  echo '- ' . color ('刪除舊檔案失敗！', 'r') . "\n";
  echo str_repeat ('=', 80) . "\n";
  return;
}
echo '- ' . color ('刪除舊檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$menus = array ();
foreach (include ('root' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'menus.php') as $group)
  foreach ($group['items'] as $menu) {
    if (isset ($menu['file'])) array_push ($menus, $menu['file'] . '.php');
    if (isset ($menu['sub'])) foreach ($menu['sub'] as $sub) if (isset ($sub['file'])) array_push ($menus, $sub['file'] . '.php');
    if (isset ($menu['tabs'])) foreach ($menu['tabs'] as $tab) array_push ($menus, $tab . '.php');
  }

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ➜ ' . color ('取出 php 檔案', 'g');
$files = array ();
merge_array_recursive (directory_list ('root' . DIRECTORY_SEPARATOR . 'controllers'), $files, 'root' . DIRECTORY_SEPARATOR . 'controllers');
$files = array_filter ($files, function ($file) use ($menus) { return in_array (pathinfo ($file, PATHINFO_BASENAME), $menus); });
echo color ('(' . ($c = count ($files)) . ')', 'g');
$files = array_map (function ($file) {
  return array (
      'name' => pathinfo (pathinfo ($file, PATHINFO_BASENAME), PATHINFO_FILENAME),
      'content' => include_once ($file),
    );
}, $files);
echo ' - 100% - ' . color ('取出檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$i = 0;
if ($files = array_filter (array_map (function ($file) use (&$i, $c) {
  echo sprintf ("\r" . ' ➜ ' . color ('寫入 HTML 檔案', 'g') . " - % 3d%% ", ceil ((++$i * 100) / $c));
  return !write_file ('root' . DIRECTORY_SEPARATOR . $file['name'] . '.html', $file['content']);
}, $files))) {
  echo '- ' . color ('寫入 HTML 檔案失敗！', 'r') . "\n";
  echo str_repeat ('=', 80) . "\n";
  return;
}
echo '- ' . color ('寫入 HTML 檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ' . color ('執行結束', 'P') . "\n";
echo str_repeat ('=', 80) . "\n";
echo "\n";
exit();
