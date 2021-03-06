<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

include_once 'defines.php';
include_once 'functions.php';

Class Controller {
  public $site_title = 'iOA';
  public $np = array ();
  public $current = null;
  public $menus = array ();
  private $file = null;
  private $logo_string = "個人簡歷";
  private $vars = array ();
  private $js_list = array ();
  private $css_list = array ();
  private $mobile_logo_strings = array ('OA Wu', '個人簡歷');
  private $tabs = array ();
  private $metas = array ();
  private $tab_index = '';
  private $msg = '';
  private $json_ld = array ();

  public function __construct ($file = '') {
      if (!(($trace = debug_backtrace (DEBUG_BACKTRACE_PROVIDE_OBJECT)) && isset ($trace[1]['file']) && ($this->file = pathinfo (pathinfo ($trace[1]['file'], PATHINFO_BASENAME), PATHINFO_FILENAME))))
        exit ('debug_backtrace error!');

    $this->menus = include ('menus.php');
    if (!$this->np = np ($this->menus, $file ? $file : $this->file))
      exit ('np error!');

    $this->current = $this->np['c'];

    $this->add_meta (array ('http-equiv' => 'Content-Language', 'content' => 'zh-tw'))
         ->add_meta (array ('http-equiv' => 'Content-type', 'content' => 'text/html; charset=utf-8'))
         ->add_meta (array ('name' => 'google-site-verification', 'content' => 'oP5AjoCz_SS0W6OeLiynUxpE7hnFdhWVZ6zDxRiJQqY'))
         ->add_meta (array ('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui'))
         ->add_js ('_frame' . DIRECTORY_SEPARATOR . CONTENT_NAME . '.js')
         ->add_css ('_frame' . DIRECTORY_SEPARATOR . CONTENT_NAME . '.css')
         ->add_meta (array ('name' => 'robots', 'content' => 'index,follow'))

         ->add_meta (array ('name' => 'keywords', 'content' => KEYWORDS))
         ->add_meta (array ('name' => 'description', 'content' => ''))

         ->add_meta (array ('property' => 'og:site_name', 'content' => $this->site_title))
         ->add_meta (array ('property' => 'og:url', 'content' => $this->np['c']['url']))
         ->add_meta (array ('property' => 'og:title', 'content' => ''))
         ->add_meta (array ('property' => 'og:description', 'content' => ''))
         ->add_meta (array ('property' => 'fb:admins', 'content' => FB_ADMIN_ID))
         ->add_meta (array ('property' => 'fb:app_id', 'content' => FB_APP_ID))
         ->add_meta (array ('property' => 'og:locale', 'content' => 'zh_TW'))
         ->add_meta (array ('property' => 'og:locale:alternate', 'content' => 'en_US'))
         ->add_meta (array ('property' => 'og:type', 'content' => 'article'))
         ->add_meta (array ('property' => 'article:author', 'content' => FB_ARTICLE_AUTHOR_URL))
         ->add_meta (array ('property' => 'article:publisher', 'content' => FB_ARTICLE_PUBLISHER_URL))
         ->add_meta (array ('property' => 'og:image', 'content' => $img = '', 'alt' => $this->site_title))
         ->add_meta (array ('property' => 'og:image:type', 'tag' => 'larger', 'content' => 'image/' . pathinfo ($img, PATHINFO_EXTENSION)))
         ->add_meta (array ('property' => 'og:image:width', 'content' => '1200'))
         ->add_meta (array ('property' => 'og:image:height', 'content' => '630'))
        ;
  }

  public static function load ($file = '') {
    return new self ($file);
  }
  public function set_json_ld ($json_ld) {
    $this->json_ld = $json_ld;
    return $this;
  }
  public function add_meta ($attributes) {
    if (isset ($attributes['name']))
      $this->metas = array_filter ($this->metas, function ($meta) use ($attributes) { return !isset ($meta['name']) || ($meta['name'] != $attributes['name']);});

    if (isset ($attributes['property']) && !in_array($attributes['property'], array ('article:author', 'article:tag', 'og:see_also')))
      $this->metas = array_filter ($this->metas, function ($meta) use ($attributes) { return !isset ($meta['property']) || ($meta['property'] != $attributes['property']) || isset ($meta['tag']) && ($meta['tag'] != $attributes['tag']);});

    array_push ($this->metas, $attributes);
    return $this;
  }
  public function add_js ($url, $merge = true) {
    if (preg_match ('/^https?:\/\//', $url)) $merge = false;
    array_push ($this->js_list, array ('url' => $url, 'merge' => $merge));
    return $this;
  }
  public function add_css ($url, $merge = true) {
    array_push ($this->css_list, array ('url' => $url, 'merge' => $merge));
    return $this;
  }
  public function add ($key, $value) {
    $this->vars[$key] = $value;
    return $this;
  }
  public function add_tab ($file, $text) {
    array_push ($this->tabs, array (
        'file' => $file,
        'text' => $text,
      ));
    return $this;
  }
  public function set_tab_index ($file) {
    $this->tab_index = $file;
    return $this;
  }

  public function pure ($setting) {
    if ($return = $setting ($this))
      foreach ($return as $key => $value)
        $this->add ($key, $value);
    $this->add ('title', $this->current['text']);
    return $this->add ('h1', $this->current['text'])
                ->_view ('pure');
  }
  public function more ($setting) {
    $return = $setting ($this);
    $og_path = FCPATH . 'assets' . DIRECTORY_SEPARATOR . (defined ('ENV') ? 'img' : 'img_ori') . DIRECTORY_SEPARATOR . 'og' . DIRECTORY_SEPARATOR;

    $ogimage_path = $og_path . $this->current['file'] . '.jpg';
    $imgs = array_slice (array_filter (array_map (function ($file) use ($og_path) { return $og_path . $file . '.jpg'; }, array_2d_to_1d (column_array ($this->current['sub'], 'file'))), 'file_exists'), 0, 5);

    include_once FCPATH . 'cmd' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'ImageUtility.php';

    ImageUtility::photos ($imgs, $ogimage_path);

    $description = '這些是我的' . $this->current['text'] . '這裡面包含了' . mb_strimwidth (implode ('、', array_map ('remove_ckedit_tag', array_2d_to_1d (column_array ($this->current['sub'], 'text')))), 0, 200, '…','UTF-8') . '有興趣的各位歡迎點閱吧！';

    if ($tags = array_unique (array_merge (preg_split ('/, ?/', KEYWORDS), array_2d_to_1d (column_array ($this->current['sub'], 'tags')), array_2d_to_1d (column_array ($this->current['sub'], 'keywords')))))
      foreach ($tags as $i => $tag)
        if (!$i) $this->add_meta (array ('property' => 'article:section', 'content' => $tag))->add_meta (array ('property' => 'article:tag', 'content' => $tag));
        else $this->add_meta (array ('property' => 'article:tag', 'content' => $tag));
    if ($also_list = array_filter (array ($this->np['p'], $this->np['n'])))
      foreach ($also_list as $also)
        $this->add_meta (array ('property' => 'og:see_also', 'content' => $also['url']));

    $i = 0;
    $this->set_json_ld (array (
        '@context' => 'http://schema.org', '@type' => 'BreadcrumbList',
        "itemListElement" => array_map (function ($item) use (&$i) {
            return array (
                "@type" => "ListItem",
                "position" => ++$i,
                "item" => array (
                    "@id" => base_url ($item['file'] . EXTENSION),
                    "name" => $item['text'],
                    "description" => mb_strimwidth (remove_ckedit_tag ($item['description']), 0, 150, '…','UTF-8'),
                    "image" => array ('@type' => 'ImageObject', 'url' => $item['og_img'], 'height' => 630, 'width' => 1200),
                    "url" => base_url ($item['file'] . EXTENSION),
                  )
              );
          }, $this->current['sub']),
      ));

    $this->add ('title', $this->current['text']);
    return $this->add ('h1', $this->current['text'])

                ->add_meta (array ('name' => 'keywords', 'content' => implode (',', $tags)))
                ->add_meta (array ('name' => 'description', 'content' => remove_ckedit_tag ($description)))
                ->add_meta (array ('property' => 'og:title', 'content' => $this->current['text'] . ' - ' . $this->site_title))
                ->add_meta (array ('property' => 'og:description', 'content' => preg_replace ("/ +/", "", remove_ckedit_tag ($description))))
                ->add_meta (array ('property' => 'og:image', 'tag' => 'larger', 'content' => $img = $this->np['c']['og_img'], 'alt' => $this->current['text'] . ' - ' . $this->site_title))
                ->add_meta (array ('property' => 'og:image:type', 'tag' => 'larger', 'content' => 'image/' . pathinfo ($img, PATHINFO_EXTENSION)))
                ->add_meta (array ('property' => 'og:image:width', 'tag' => 'larger', 'content' => '1200'))
                ->add_meta (array ('property' => 'og:image:height', 'tag' => 'larger', 'content' => '630'))
                ->add_meta (array ('property' => 'article:modified_time', 'content' => date ('c')))
                ->add_meta (array ('property' => 'article:published_time', 'content' => date ('c')))

                ->_view ('more');
  }
  public function albums ($setting) {
    $return = $setting ($this);
    $og_path = FCPATH . 'assets' . DIRECTORY_SEPARATOR . (defined ('ENV') ? 'img' : 'img_ori') . DIRECTORY_SEPARATOR . 'og' . DIRECTORY_SEPARATOR;

    $ogimage_path = $og_path . $this->current['file'] . '.jpg';
    $imgs = array_slice (array_filter (array_map (function ($file) use ($og_path) { return $og_path . $file . '.jpg'; }, array_2d_to_1d (column_array ($this->current['sub'], 'file'))), 'file_exists'), 0, 5);

    include_once FCPATH . 'cmd' . DIRECTORY_SEPARATOR . 'libs' . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . 'ImageUtility.php';

    ImageUtility::photos ($imgs, $ogimage_path);

    $description = '這些是我的' . $this->current['text'] . '這裡面包含了' . mb_strimwidth (implode ('、', array_map ('remove_ckedit_tag', array_2d_to_1d (column_array ($this->current['sub'], 'text')))), 0, 200, '…','UTF-8') . '有興趣的各位歡迎點閱吧！';

    if ($tags = array_unique (array_merge (preg_split ('/, ?/', KEYWORDS), array_2d_to_1d (column_array ($this->current['sub'], 'tags')), array_2d_to_1d (column_array ($this->current['sub'], 'keywords')))))
      foreach ($tags as $i => $tag)
        if (!$i) $this->add_meta (array ('property' => 'article:section', 'content' => $tag))->add_meta (array ('property' => 'article:tag', 'content' => $tag));
        else $this->add_meta (array ('property' => 'article:tag', 'content' => $tag));
    if ($also_list = array_filter (array ($this->np['p'], $this->np['n'])))
      foreach ($also_list as $also)
        $this->add_meta (array ('property' => 'og:see_also', 'content' => $also['url']));

    $i = 0;
    $this->set_json_ld (array (
        '@context' => 'http://schema.org', '@type' => 'BreadcrumbList',
        "itemListElement" => array_map (function ($item) use (&$i) {
            return array (
                "@type" => "ListItem",
                "position" => ++$i,
                "item" => array (
                    "@id" => base_url ($item['file'] . EXTENSION),
                    "name" => $item['text'],
                    "description" => mb_strimwidth (remove_ckedit_tag ($item['description']), 0, 150, '…','UTF-8'),
                    "image" => array ('@type' => 'ImageObject', 'url' => $item['og_img'], 'height' => 630, 'width' => 1200),
                    "url" => base_url ($item['file'] . EXTENSION),
                  )
              );
          }, $this->current['sub']),
      ));

    $this->add ('title', $this->current['text']);

    return $this->add ('h1', $this->current['text'])

                ->add_meta (array ('name' => 'keywords', 'content' => implode (',', $tags)))
                ->add_meta (array ('name' => 'description', 'content' => remove_ckedit_tag ($description)))
                ->add_meta (array ('property' => 'og:title', 'content' => $this->current['text'] . ' - ' . $this->site_title))
                ->add_meta (array ('property' => 'og:description', 'content' => preg_replace ("/ +/", "", remove_ckedit_tag ($description))))
                ->add_meta (array ('property' => 'og:image', 'tag' => 'larger', 'content' => $img = $this->np['c']['og_img'], 'alt' => $this->current['text'] . ' - ' . $this->site_title))
                ->add_meta (array ('property' => 'og:image:type', 'tag' => 'larger', 'content' => 'image/' . pathinfo ($img, PATHINFO_EXTENSION)))
                ->add_meta (array ('property' => 'og:image:width', 'tag' => 'larger', 'content' => '1200'))
                ->add_meta (array ('property' => 'og:image:height', 'tag' => 'larger', 'content' => '630'))
                ->add_meta (array ('property' => 'article:modified_time', 'content' => date ('c')))
                ->add_meta (array ('property' => 'article:published_time', 'content' => date ('c')))

                ->_view ('albums');
  }
  public function article ($setting) {
    $return = $setting ($this);
    return $this->_view ('article');
  }
  public function album ($setting) {
    return $this->add ('is_album', true)
                ->demo ($setting);
  }
  public function unpacking ($setting) {
    return $this->add ('is_album', true)
                ->demo ($setting);
  }
  public function demo ($setting) {

    $return = $setting ($this);

    if ($tags = array_unique (array_merge (preg_split ('/, ?/', KEYWORDS), $this->current['tags'], $this->current['keywords'])))
      foreach ($tags as $i => $tag)
        if (!$i) $this->add_meta (array ('property' => 'article:section', 'content' => $tag))->add_meta (array ('property' => 'article:tag', 'content' => $tag));
        else $this->add_meta (array ('property' => 'article:tag', 'content' => $tag));
    if ($also_list = array_filter (array ($this->np['p'], $this->np['n'])))
      foreach ($also_list as $also)
        $this->add_meta (array ('property' => 'og:see_also', 'content' => $also['url']));

    $this->set_json_ld (array (
        '@context' => 'http://schema.org', '@type' => 'Article',
        'mainEntityOfPage' => array (
          '@type' => 'WebPage',
          '@id' => $this->np['c']['url']),
        'headline' => $this->current['text'],
        'image' => array ('@type' => 'ImageObject', 'url' => $this->np['c']['og_img'], 'height' => 630, 'width' => 1200),
        'datePublished' => date ('c', strtotime ($this->current['created_at'])),
        'dateModified' => date ('c', strtotime ($this->current['updated_at'])),
        'author' => array (
            '@type' => 'Person', 'name' => OA, 'url' => OA_FB_URL,
            'image' => array ('@type' => 'ImageObject', 'url' => avatar_url (OA_FB_UID, 300, 300), 'height' => 300, 'width' => 300)
          ),
        'publisher' => array (
            '@type' => 'Organization', 'name' => $this->site_title,
            'logo' => array ('@type' => 'ImageObject', 'url' => img_url ('amp_title.png'), 'width' => 600, 'height' => 60)
          ),
        'description' => mb_strimwidth (remove_ckedit_tag ($this->current['description']), 0, 150, '…','UTF-8')
      ));
    if ($return)
      foreach ($return as $key => $value)
        $this->add ($key, $value);

    $this->add ('title', $this->current['text']);

    return $this->add ('h1', $this->current['text'])

                ->add_meta (array ('name' => 'keywords', 'content' => implode (',', $tags)))
                ->add_meta (array ('name' => 'description', 'content' => mb_strimwidth (remove_ckedit_tag ($this->current['description']), 0, 150, '…','UTF-8')))
                ->add_meta (array ('property' => 'og:title', 'content' => $this->current['text'] . ' - ' . $this->site_title))
                ->add_meta (array ('property' => 'og:description', 'content' => mb_strimwidth (preg_replace ("/ +/", "", remove_ckedit_tag ($this->current['description'])), 0, 300, '…','UTF-8')))
                ->add_meta (array ('property' => 'og:image', 'tag' => 'larger', 'content' => $img = $this->np['c']['og_img'], 'alt' => $this->current['text'] . ' - ' . $this->site_title))
                ->add_meta (array ('property' => 'og:image:type', 'tag' => 'larger', 'content' => 'image/' . pathinfo ($img, PATHINFO_EXTENSION)))
                ->add_meta (array ('property' => 'og:image:width', 'tag' => 'larger', 'content' => '1200'))
                ->add_meta (array ('property' => 'og:image:height', 'tag' => 'larger', 'content' => '630'))
                ->add_meta (array ('property' => 'article:modified_time', 'content' => date ('c', strtotime ($this->current['updated_at']))))
                ->add_meta (array ('property' => 'article:published_time', 'content' => date ('c', strtotime ($this->current['created_at']))))
                
                ->_view ('demo');
  }
  private function _view ($type = '') {
    if (!file_exists ($view_path = VIEW . $this->file . DIRECTORY_SEPARATOR . CONTENT_NAME . EXT))
      exit ('No view file');

    $content = $this->load_view (VIEW . $this->file . DIRECTORY_SEPARATOR . CONTENT_NAME . EXT, array_merge ($this->vars, array (
        'alt' => $this->current['text'] . '-' . $this->site_title,
        'current' => $this->current,
        'site_title' => $this->site_title,
      )));

    if ($type) {
      if (file_exists (VIEW . ($tmp = '_' . $type . DIRECTORY_SEPARATOR . CONTENT_NAME . '.js')))
        $this->add_js ($tmp);
      if (file_exists (VIEW . ($tmp = '_' . $type . DIRECTORY_SEPARATOR . CONTENT_NAME . '.css')))
        $this->add_css ($tmp);
      $content = $this->load_view (VIEW . '_' . $type . DIRECTORY_SEPARATOR . CONTENT_NAME . EXT, array_merge ($this->vars, array (
                          'current' => $this->current,
                          '_np' => $this->np,
                          '_site_title' => $this->site_title,
                          '_view' => $content
                        )));
    }
      
    if (file_exists (VIEW . ($tmp = $this->file . DIRECTORY_SEPARATOR . CONTENT_NAME . '.js')))
      $this->add_js ($tmp);

    if (file_exists (VIEW . ($tmp = $this->file . DIRECTORY_SEPARATOR . CONTENT_NAME . '.css')))
      $this->add_css ($tmp);

    $js_list = array ();
    $css_list = array ();
    
    if (!defined ('ENV')) {
      $js_list = array_map (function ($t) { return (!preg_match ('/^https?:\/\//', $t['url']) ? '/' . VIEW_NAME : '') . $t['url']; }, $this->js_list);
      $css_list = array_map (function ($t) { return (!preg_match ('/^https?:\/\//', $t['url']) ? '/' . VIEW_NAME : '') . $t['url']; }, $this->css_list);
    } else {
      $bom = pack ('H*','EFBBBF');

      $temp = '';
      foreach ($this->js_list as $js) {
        if ($js['merge']) {
          $temp .= preg_replace("/^$bom/", '', read_file (VIEW . $js['url'])) . "\n";
        } else {
          merge_asset ($js_list, $temp, 'js');
          array_push ($js_list, $js['url']);
        }
      }
      merge_asset ($js_list, $temp, 'js');

      foreach ($this->css_list as $css) {
        if ($css['merge']) {
          $temp .= preg_replace("/^$bom/", '', read_file (VIEW . $css['url'])) . "\n";
        } else {
          merge_asset ($css_list, $temp, 'css');
          array_push ($css_list, $css['url']);
        }
      }
      merge_asset ($css_list, $temp, 'css');
    }

    $no_error = false;
    if ($this->tabs && $this->tab_index)
      foreach ($this->tabs as &$tab) {
        $no_error |= ($tab['active'] = $tab['file'] == $this->tab_index);
        $tab['href'] = base_url ($tab['file'] . EXTENSION);
      }
    else if ($this->tabs) $no_error = false;
    else $no_error = true;
    if (!$no_error) exit ('Error or No any tab_index!');

    return $this->load_view (VIEW . '_frame' . DIRECTORY_SEPARATOR . CONTENT_NAME . EXT, array_merge ($this->vars, array (
        '_site_title' => $this->site_title,
        '_metas' => $this->metas,
        '_title' => (isset ($this->vars['title']) ? $this->vars['title'] . ' - ' : '') . $this->site_title,
        '_message' => isset ($this->vars['message']) ? $this->vars['message'] : '',
        '_json_ld' => $this->json_ld,
        '_css_list' => $css_list,
        '_js_list' => $js_list,
        '_menus' => $this->menus,
        '_tabs' => $this->tabs,
        '_tab_index' => $this->tab_index,
        '_np' => $this->np,
        '_content' => $content,
        '_current' => $this->current,
        '_logo_string' => $this->logo_string,
        '_mobile_logo_strings' => $this->mobile_logo_strings,
      )));
  }
  public function view ($setting) {
    $setting ($this);
    return $this->_view ();
  }
  private function load_view ($__o__p__ = '', $__o__d__ = array ()) {
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