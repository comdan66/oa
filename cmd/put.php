<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

define ('ENV', 'build');

include_once 'libs/functions.php';

echo "\n" . str_repeat ('=', 80) . "\n";

echo ' ' . color ('執行開始', 'P') . "\n";
echo str_repeat ('-', 80) . "\n";


// // var_dump (S3::listBuckets ());
// // var_dump (S3::getBucket ('pic.tku.ioa.tw'));
// // var_dump (S3::putBucket ('xpic.tku.ioa.tw'));
// // var_dump (S3::deleteBucket ('xpic.tku.ioa.tw'));
// // var_dump (S3::putFile ('/Users/OA/www/oa/tmp/360.html', 'xpic.tku.ioa.tw', '360.html'));
// // var_dump (S3::getObject ('xpic.tku.ioa.tw', '360.html', '/Users/OA/www/oa/360.html'));
// // var_dump (S3::copyObject ('xpic.tku.ioa.tw', '360.html', 'xpic.tku.ioa.tw', '3602.html'));
// // var_dump (S3::getBucketLocation ('xpic.tku.ioa.tw'));
// // var_dump (S3::deleteObject ('xpic.tku.ioa.tw', '360.html'));
// // var_dump (S3::getAuthenticatedURL ('xpic.tku.ioa.tw', '360.html', 10));
// // var_dump (S3::listDistributions ());

// exit ();

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ➜ ' . color ('初始化 S3 工具', 'g');
$s3_config = include_once ('s3_key.php');
include_once 'libs/s3.php';
S3::init ($s3_config['access_key'], $s3_config['secret_key']);
echo ' - ' . color ('初始化成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================
// var_dump (S3::putFile ('/Users/OA/www/oa/tmp/360.html', $s3_config['bucket'], 'asda/sd/360.html'));

echo ' ➜ ' . color ('列出 S3 上所有檔案', 'g');

// $files = array (1);
$files = array_keys (S3::getBucket ($s3_config['bucket']));
echo color ('(' . ($c = count ($files)) . ')', 'g') . ' - 100% - ' . color ('取得檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$i = 0;
echo '- ' . (array_filter (array_map (function ($file) use ($s3_config, &$i, $c) {
  echo sprintf ("\r" . ' ➜ ' . color ('刪除 S3 上所有檔案(' . $c . ')', 'g') . " - % 3d%% ", ceil ((++$i * 100) / $c));
  return !S3::deleteObject ($s3_config['bucket'], $file);
}, $files)) ? color ('刪除 S3 上所有檔案失敗！', 'r') : color ('刪除 S3 上所有檔案成功！', 'C')) . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ➜ ' . color ('取出 HTML 檔案', 'g');
$files = array ();
merge_array_recursive (directory_list ('..'), $files, '..');
$files = array_filter ($files, function ($file) { return in_array (pathinfo ($file, PATHINFO_EXTENSION), array ('html')); });
$files = array_map (function ($file) { return array ('path' => $file, 'uri' => pathinfo ($file, PATHINFO_BASENAME)); }, $files);
echo color ('(' . count ($files) . ')', 'g');
echo ' - 100% - ' . color ('取出 HTML 檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$c = count ($files);
$i = 0;
if (array_filter (array_map (function ($file) use ($s3_config, &$i, $c) {
  echo sprintf ("\r" . ' ➜ ' . color ('上傳 HTML 檔案', 'g') . color ('(' . $c . ')', 'g') . " - % 3d%% ", ceil ((++$i * 100) / $c));
  return !S3::putFile ($file['path'], $s3_config['bucket'], $file['uri']);
}, $files))) {
  echo '- ' . color ('上傳 HTML 發生錯誤！', 'r') . "\n";
  echo str_repeat ('=', 80) . "\n";
  return;
}
echo '- ' . color ('上傳 HTML 成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ➜ ' . color ('取出 css 檔案', 'g');
$files = array ();
merge_array_recursive (directory_list ('../assets/css'), $files, '../assets/css');
$files = array_filter ($files, function ($file) { return in_array (pathinfo ($file, PATHINFO_EXTENSION), array ('css')); });
$files = array_map (function ($file) { return array ('path' => $file, 'uri' => 'assets/css/' . pathinfo ($file, PATHINFO_BASENAME)); }, $files);
echo color ('(' . count ($files) . ')', 'g');
echo ' - 100% - ' . color ('取出 css 檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$c = count ($files);
$i = 0;
if (array_filter (array_map (function ($file) use ($s3_config, &$i, $c) {
  echo sprintf ("\r" . ' ➜ ' . color ('上傳 css 檔案', 'g') . color ('(' . $c . ')', 'g') . " - % 3d%% ", ceil ((++$i * 100) / $c));
  return !S3::putFile ($file['path'], $s3_config['bucket'], $file['uri']);
}, $files))) {
  echo '- ' . color ('上傳 css 發生錯誤！', 'r') . "\n";
  echo str_repeat ('=', 80) . "\n";
  return;
}
echo '- ' . color ('上傳 css 成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ➜ ' . color ('取出 JavaScript 檔案', 'g');
$files = array ();
merge_array_recursive (directory_list ('../assets/js'), $files, '../assets/js');
$files = array_filter ($files, function ($file) { return in_array (pathinfo ($file, PATHINFO_EXTENSION), array ('js')); });
$files = array_map (function ($file) { return array ('path' => $file, 'uri' => 'assets/js/' . pathinfo ($file, PATHINFO_BASENAME)); }, $files);
echo color ('(' . count ($files) . ')', 'g');
echo ' - 100% - ' . color ('取出 JavaScript 檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$c = count ($files);
$i = 0;
if (array_filter (array_map (function ($file) use ($s3_config, &$i, $c) {
  echo sprintf ("\r" . ' ➜ ' . color ('上傳 JavaScript 檔案', 'g') . color ('(' . $c . ')', 'g') . " - % 3d%% ", ceil ((++$i * 100) / $c));
  return !S3::putFile ($file['path'], $s3_config['bucket'], $file['uri']);
}, $files))) {
  echo '- ' . color ('上傳 JavaScript 發生錯誤！', 'r') . "\n";
  echo str_repeat ('=', 80) . "\n";
  return;
}
echo '- ' . color ('上傳 JavaScript 成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ➜ ' . color ('取出 Font 檔案', 'g');
$files = array ();
merge_array_recursive (directory_map ('../assets/font'), $files, '../assets/font');
$files = array_filter ($files, function ($file) { return in_array (pathinfo ($file, PATHINFO_EXTENSION), array ('eot', 'svg', 'ttf', 'woff')); });
$files = array_map (function ($file) { return array ('path' => $file, 'uri' => preg_replace ('/^(\.\.\/)/', '', $file)); }, $files);
echo color ('(' . count ($files) . ')', 'g');
echo ' - 100% - ' . color ('取出 Font 檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$c = count ($files);
$i = 0;
if (array_filter (array_map (function ($file) use ($s3_config, &$i, $c) {
  echo sprintf ("\r" . ' ➜ ' . color ('上傳 Font 檔案', 'g') . color ('(' . $c . ')', 'g') . " - % 3d%% ", ceil ((++$i * 100) / $c));
  return !S3::putFile ($file['path'], $s3_config['bucket'], $file['uri']);
}, $files))) {
  echo '- ' . color ('上傳 Font 發生錯誤！', 'r') . "\n";
  echo str_repeat ('=', 80) . "\n";
  return;
}
echo '- ' . color ('上傳 Font 成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ➜ ' . color ('取出 Image 檔案', 'g');
$files = array ();
merge_array_recursive (directory_map ('../assets/img'), $files, '../assets/img');
$files = array_filter ($files, function ($file) { return in_array (pathinfo ($file, PATHINFO_EXTENSION), array ('png', 'jpg', 'jpeg', 'gif')); });
$files = array_map (function ($file) { return array ('path' => $file, 'uri' => preg_replace ('/^(\.\.\/)/', '', $file)); }, $files);
echo color ('(' . count ($files) . ')', 'g');
echo ' - 100% - ' . color ('取出 Image 檔案成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

$c = count ($files);
$i = 0;
if (array_filter (array_map (function ($file) use ($s3_config, &$i, $c) {
  echo sprintf ("\r" . ' ➜ ' . color ('上傳 Image 檔案', 'g') . color ('(' . $c . ')', 'g') . " - % 3d%% ", ceil ((++$i * 100) / $c));
  return !S3::putFile ($file['path'], $s3_config['bucket'], $file['uri']);
}, $files))) {
  echo '- ' . color ('上傳 Image 發生錯誤！', 'r') . "\n";
  echo str_repeat ('=', 80) . "\n";
  return;
}
echo '- ' . color ('上傳 Image 成功！', 'C') . "\n";
echo str_repeat ('-', 80) . "\n";

// ========================================================================
// ========================================================================
// ========================================================================

echo ' ' . color ('執行結束', 'P') . "\n";
echo str_repeat ('=', 80) . "\n";
echo "\n";
exit ();