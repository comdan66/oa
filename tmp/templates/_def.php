<?php 
      // array (
      //   'group' => '工作經驗',
      //   'desc' => '',
      //   'items' => array (
      //     array ('text' => '和碩聯合科技股份有限公司', 'href' => base_url ('')),
      //     array ('text' => '風尚數位科技股份有限公司', 'href' => base_url ('')),
      //     array ('text' => '雲永科技股份有限公司', 'href' => base_url ('')),
      //     array ('text' => '時間軸科技股份有限公司', 'href' => base_url ('')),
      //   )),

define ('LEXT', !defined ('ENV') ? '.php' : '.html');
if (!defined ('EXT')) define ('EXT', '.php');
if (!defined ('TPL_DIR')) define ('TPL_DIR', 'templates' . DIRECTORY_SEPARATOR);

define ('LOGO', "個人簡歷");
define ('TITLE', "iOA");
define ('DESC', "Hi，您好！我叫吳政賢，2011年畢業於淡江大學資訊工程學系，主修電腦相關課程，在學期間主要使用的程式語言有 C語言、Java，而對於 web 網站開發經驗從大三就有 php 的實作的經驗了..");
define ('KEYWORDS', "吳政賢, OA Wu, iOA");
define ('FB_UID', "100000100541088");
define ('FB_ADMINS', "100000100541088");
define ('FB_APP_ID', "1033322433418965");
define ('FB_ARTICLE_AUTHOR', "https://www.facebook.com/comdan66");
define ('FB_ARTICLE_PUBLISHER', "https://www.facebook.com/comdan66");
define ('PROTOCOL', "http://");
define ('DOMAIN', !defined ('ENV') ? 'oa.ioa.tw' : 'oa.ioa.tw');

class Assets {
  static $assets = array ();

  public static function push ($asset) {
    array_push (self::$assets, $asset);
  }
  public static function all () {
    return self::$assets;
  }
}
if (!function_exists ('avatar_url')) {
  function avatar_url ($w = 100, $h = 100) {
    $size = array ();
    array_push ($size, isset ($w) && $w ? 'width=' . $w : '');
    array_push ($size, isset ($h) && $h ? 'height=' . $h : '');

    return 'https://graph.facebook.com/' . FB_UID . '/picture' . (($size = implode ('&', array_filter ($size))) ? '?' . $size : '');
  }
}
if (!function_exists ('base_url')) {
  function base_url () {
    $uri = array_filter (func_get_args ());
    return PROTOCOL . DOMAIN . '/' . (!defined ('ENV') ? TPL_DIR : ''). implode ('/', $uri) . LEXT;
  }
}

if (!function_exists ('image_url')) {
  function image_url () {
    $uri = array_filter (func_get_args ());
    return PROTOCOL . DOMAIN . '/' . 'img' . '/' . (defined('ENV') ? 'compressor' . '/' : '') . implode ('/', $uri);
  }
}
if (!function_exists ('json_ld_article')) {
  function json_ld_article ($url, $title, $og_img, $created_at, $updated_at, $desc) {
    
    return array (
        "@context" => "http://schema.org", "@type" => "Article",
        "mainEntityOfPage" => array (
            "@type" => "WebPage",
            "@id" => $url,
          ),
        "headline" => $title,
        "image" => array (
            "@type" => "ImageObject",
            "url" => $og_img,
            "height" => 630,
            "width" => 1200
          ),
        "datePublished" => $created_at,
        "dateModified" => $updated_at,
        "author" => array (
            "@type" => "Person",
            "name" => '吳政賢',
            "url" => FB_ARTICLE_AUTHOR,
            "image" => array (
                "@type" => "ImageObject",
                "url" => avatar_url (300, 300),
                "height" => 300,
                "width" => 300
              )
          ),
        "publisher" => array (
            "@type" => "Organization",
            "name" => TITLE,
            "logo" => array (
                "@type" => "ImageObject",
                "url" => image_url ('amp_title.png'),
                "width" => 600,
                "height" => 60
              )
          ),
        "description" => $desc
      );;
  }
}

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
    return load_view ($base_path . (defined ('ENV') ? TPL_DIR : '') . $__o__p__, $__o__d__);
  }
}

if (!function_exists ('load_css_js')) {
  function load_css_js ($type, $prepend = array (), $append = array ()) {
    $base_path = !defined ('ENV') ? '../' . $type . '/' : ($type . '/');

    $name_list = array_filter (array_map (function ($t) use ($base_path, $type) {
      return (!preg_match ('/^https?:\/\//', $t) ? $base_path . $t : $t) . '.' . $type;
    }, array_merge ($prepend, array ('frame'), Assets::all (), $append)), function ($path) {
      return file_exists ((defined ('ENV') ? '../' : ''). $path) || preg_match ('/^https?:\/\//',(defined ('ENV') ? '../' : '') . $path);
    });

    return implode ('', array_map (function ($name) use ($type) {
      return $type == 'css' ? "<link href='" . $name . "' rel='stylesheet' type='text/css' />" : '<script src="' . $name . '" language="javascript" type="text/javascript" ></script>';
    }, $name_list));
  }
}
if (!function_exists ('title')) {
  function title ($title = '') {
    return ($title ? $title . ' - ' : '') . TITLE;
  }
}
if (!function_exists ('logo')) {
  function logo ($logo = '') {
    return ($logo ? $logo . ' ' : '') . LOGO;
  }
}

if (!function_exists ('oa_meta')){
  function oa_meta ($attributes = array ()) {
    return $attributes ? '<meta ' . implode (' ', array_map (function ($attribute, $value) { return $attribute . '="' . $value . '"'; }, array_keys ($attributes), $attributes)) . ' />' : '';
  }
}
if (!function_exists ('load_meta')) {
  function load_meta ($now, $og_img, $title = '', $description = '', $keywords = array (), $created_at, $updated_at) {
    $title = title ($title);
    $description = $description ? $description : DESC;
    
    $ks = preg_split ('/, ?/', KEYWORDS);
    $keywords = implode (', ', $keywords ? array_unique (array_merge ($keywords, $ks)) : $ks);
    $url = '';

    $metas = array ();
    array_push ($metas, array ('name' => 'robots', 'content' => 'index,follow'));
    array_push ($metas, array ('name' => 'keywords', 'content' => $keywords));
    array_push ($metas, array ('name' => 'description', 'content' => $description));
    
    array_push ($metas, array ('property' => 'fb:admins', 'content' => FB_ADMINS));
    array_push ($metas, array ('property' => 'fb:app_id', 'content' => FB_APP_ID));
    
    array_push ($metas, array ('property' => 'og:site_name', 'content' => TITLE));
    array_push ($metas, array ('property' => 'og:title', 'content' => $title));
    array_push ($metas, array ('property' => 'og:description', 'content' => $description));
    array_push ($metas, array ('property' => 'og:url', 'content' => $url));
    
    array_push ($metas, array ('property' => 'og:locale', 'content' => 'zh_TW'));
    array_push ($metas, array ('property' => 'og:locale:alternate', 'content' => 'en_US'));
    
    array_push ($metas, array ('property' => 'og:type', 'content' => 'article'));
    array_push ($metas, array ('property' => 'article:author', 'content' => FB_ARTICLE_AUTHOR));
    array_push ($metas, array ('property' => 'article:publisher', 'content' => FB_ARTICLE_PUBLISHER));
    array_push ($metas, array ('property' => 'article:modified_time', 'content' => $created_at));
    array_push ($metas, array ('property' => 'article:published_time', 'content' => $updated_at));

    array_push ($metas, array ('property' => 'og:image', 'content' => $og_img, 'alt' => $title));
    array_push ($metas, array ('property' => 'og:image:type', 'content' => 'image/' . pathinfo ($og_img, PATHINFO_EXTENSION), 'tag' => 'larger'));
    array_push ($metas, array ('property' => 'og:image:width', 'content' => '1200'));
    array_push ($metas, array ('property' => 'og:image:height', 'content' => '630'));

    return implode ('', array_map ('oa_meta', $metas));
  }
}
if (!function_exists ('load_json_ld')) {
  function load_json_ld ($json_ld) {
    echo '<script type="application/ld+json">' . json_encode ($json_ld, defined ('ENV') ? JSON_UNESCAPED_SLASHES : JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . '</script>';
  }
}
if (!function_exists ('load_frame')) {
  function load_frame ($json_ld, $assets, $og_img, $now, $title, $desc, $keyowrds, $content, $header, $left, $tab, $msg, $footer, $created_at, $updated_at) {
    return load_view ((defined ('ENV') ? '../' : '') . (defined ('ENV') ? TPL_DIR : '') . '_frame.php', array (
        'json_ld' => $json_ld,
        'assets' => $assets,
        'og_img' => $og_img,
        'now' => $now,
        'title' => $title,
        'desc' => $desc,
        'keyowrds' => $keyowrds,
        'content' => $content,
        'header' => $header,
        'left' => $left,
        'tab' => $tab,
        'msg' => $msg,
        'footer' => $footer,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
      ));
  }
}
if (!function_exists ('np')) {
  function np ($menus, $now) {
    $items = array ();
    foreach ($menus as $menu)
      foreach ($menu['items'] as $item)
        array_push ($items, $item);

    $p = $item = $n = null;

    for ($i = 0; $i < count ($items); $i++) {
      if ($i - 1 >= 0) $p = $items[$i - 1];
      if ($i + 1 < count($items)) $n = $items[$i + 1];

      if ($items[$i]['href'] == base_url ($now)) {
        $item = $items[$i];
        break;        
      }
    }

    return $p || $n ? array (
        'p' => $p,
        'n' => $n,
        'c' => $item
      ) : array ();
  }
}
if (!function_exists ('menus')) {
  function menus () {

    return array (
      array (
        'group' => '基本資料',
        'desc' => '',
        'items' => array (
          array ('text' => '關於 OA', 'href' => base_url ('index'), 'icon' => image_url('left', 'index.jpg')),
        )),
      array (
        'group' => '網頁<span>全端</span>作品',
        'desc' => '(php、JavaScript、MySQL、CSS)',
        'items' => array (
          array ('text' => '北港迎媽祖', 'href' => base_url ('mazu'), 'icon' => image_url('left', 'mazu.jpg')),
          array ('text' => '全景相簿 Theta 360', 'href' => base_url ('360'), 'icon' => image_url('left', '360.jpg')),
          array ('text' => 'Weather Maps 天氣地圖', 'href' => base_url ('weather-maps'), 'icon' => image_url('left', 'weather-maps.jpg')),
          array ('text' => 'Point in Polygon 範圍內取點', 'href' => base_url ('point-in-polygon'), 'icon' => image_url('left', 'point-in-polygon.jpg')),
          array ('text' => '全部作品', 'href' => base_url ('more-full-Stack'), 'icon' => image_url('left', 'more.jpg')),

          // array ('text' => 'GitHub Blog', 'href' => base_url ('github-blog'), 'icon' => image_url('left', 'github-blog.jpg')),
          // array ('text' => 'instagram_maps', 'href' => base_url ('instagram-maps'), 'icon' => image_url('left', 'instagram-maps.jpg')),
          // array ('text' => '大庄媽 GPS', 'href' => base_url ('haotien'), 'icon' => image_url('left', 'haotien.jpg')),
          // array ('text' => '六房媽祖 GPS', 'href' => base_url ('liu-fang-mazu'), 'icon' => image_url('left', 'liu-fang-mazu.jpg')),
          // array ('text' => '大四 php 相簿', 'href' => base_url ('php-album'), 'icon' => image_url('left', 'php-album.jpg')),
          // array ('text' => '大四 php 空間、部落格', 'href' => base_url ('php-box'), 'icon' => image_url('left', 'php-box.jpg')),
        )),
      array (
        'group' => 'JavaScript 作品',
        'desc' => '',
        'items' => array (

          array ('text' => 'Google Maps 大富翁', 'href' => base_url ('richman'), 'icon' => image_url('left', 'richman.jpg')),
          array ('text' => '雙北市行政區域範圍座標', 'href' => base_url ('taipei-towns'), 'icon' => image_url('left', 'taipei-towns.jpg')),
          array ('text' => 'maze 迷宮遊戲', 'href' => base_url ('maze'), 'icon' => image_url('left', 'maze.jpg')),
          array ('text' => 'flickr 搜尋器', 'href' => base_url ('flickr'), 'icon' => image_url('left', 'flickr.jpg')),
          array ('text' => 'jQuery imgLiquid', 'href' => base_url ('img-liquid'), 'icon' => image_url('left', 'img-liquid.jpg')),
          array ('text' => 'jQuery scrollSliderView', 'href' => base_url ('scroll-slider-view'), 'icon' => image_url('left', 'scroll-slider-view.jpg')),
          array ('text' => 'jQuery navbar', 'href' => base_url ('navbar'), 'icon' => image_url('left', 'navbar.jpg')),
          array ('text' => 'Google Maps Menu Tools', 'href' => base_url ('google-maps-menu'), 'icon' => image_url('left', 'google-maps-menu.jpg')),
          array ('text' => 'mobileScrollView', 'href' => base_url ('mobile-scroll-view'), 'icon' => image_url('left', 'mobile-scroll-view.jpg')),
          array ('text' => 'u2 Youtube 播放器', 'href' => base_url ('u2'), 'icon' => image_url('left', 'u2.jpg')),
          array ('text' => '大四 jQuery Game', 'href' => base_url ('')),

        )),
      array (
        'group' => 'PHP 作品',
        'desc' => '',
        'items' => array (
          array ('text' => 'ElasticaSearch', 'href' => base_url ('')),
          array ('text' => 'OACI (OA\'s CodeIgniter)', 'href' => base_url ('')),
        )),
      array (
        'group' => 'Css 作品',
        'desc' => '',
        'items' => array (
          array ('text' => 'material design', 'href' => base_url ('')),
        )),
      array (
        'group' => 'iOS',
        'desc' => '',
        'items' => array (
          array ('text' => 'Cat Map', 'href' => base_url ('')),
          array ('text' => 'OAHUD', 'href' => base_url ('')),
        )),
      array (
        'group' => '獨立接案',
        'desc' => '',
        'items' => array (
          array ('text' => '奇拓', 'href' => base_url ('')),
          array ('text' => '宙思設計', 'href' => base_url ('')),
          array ('text' => '嘉豪光學', 'href' => base_url ('')),
          array ('text' => '億進建築 BTO', 'href' => base_url ('')),
          array ('text' => '寬堂空間設計', 'href' => base_url ('')),
          array ('text' => 'OFNA', 'href' => base_url ('')),
          array ('text' => '鉅臣 VG', 'href' => base_url ('')),
        )),
      array (
        'group' => 'Java 作品',
        'desc' => '',
        'items' => array (
          array ('text' => '大一 Java 小畫家', 'href' => base_url ('')),
          array ('text' => '大二 Java MSN', 'href' => base_url ('')),
          array ('text' => '大二 Java Assembler', 'href' => base_url ('')),
          array ('text' => '大三 Java Plurker', 'href' => base_url ('')),
        )),
      array (
        'group' => '其他',
        'desc' => '',
        'items' => array (
          array ('text' => '大四 Arduino 新銳機器人大賽', 'href' => base_url ('')),
          array ('text' => '風尚專案 STYLEWALL 多語系', 'href' => base_url ('')),
          array ('text' => 'C語言 漫畫下載器', 'href' => base_url ('')),
        )),
      array (
        'group' => '學習筆記',
        'desc' => '',
        'items' => array (
          array ('text' => '大四 Arduino 新銳機器人大賽', 'href' => base_url ('')),
          array ('text' => '風尚專案 STYLEWALL 多語系', 'href' => base_url ('')),
          array ('text' => 'C語言 漫畫下載器', 'href' => base_url ('')),
        ))
    );
  }
}
