<?php 

include_once 'defines.php';
include_once 'functions.php';

Class Controller {
  public $site_title = 'iOA';
  public $np = array ();
  private $file = null;
  private $logo_string = "個人簡歷";
  private $vars = array ();
  private $js_list = array ();
  private $css_list = array ();
  private $mobile_logo_strings = array ('OA Wu', '個人簡歷');
  private $menus = array ();
  private $tabs = array ();
  private $metas = array ();
  private $tab_index = '';
  private $msg = '';
  private $json_ld = array ();

  public function __construct ($file = '') {
      if (!(($trace = debug_backtrace (DEBUG_BACKTRACE_PROVIDE_OBJECT)) && isset ($trace[1]['file']) && ($this->file = pathinfo (pathinfo ($trace[1]['file'], PATHINFO_BASENAME), PATHINFO_FILENAME))))
        exit ('debug_backtrace error!');

    $this->menus = include_once ('menus.php');
    if (!$this->np = np ($this->menus, $file ? $file : $this->file))
      exit ('np error!');

    $this->add_meta (array ('http-equiv' => 'Content-Language', 'content' => 'zh-tw'))
         ->add_meta (array ('http-equiv' => 'Content-type', 'content' => 'text/html; charset=utf-8'))
         ->add_meta (array ('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui'))
         ->add_js ('frame.js')
         ->add_css ('frame.css')
         ->add_meta (array ('name' => 'robots', 'content' => 'index,follow'))

         ->add_meta (array ('name' => 'keywords', 'content' => KEYWORDS))
         ->add_meta (array ('name' => 'description', 'content' => 'Hi，您好！我叫吳政賢，2011年畢業於淡江大學資訊工程學系，主修電腦相關課程，在學期間主要使用的程式語言有 C語言、Java，而對於 web 網站開發經驗從大三就有 php 的實作的經驗了..'))

         ->add_meta (array ('property' => 'og:site_name', 'content' => $this->site_title))
         ->add_meta (array ('property' => 'og:url', 'content' => $this->np['c']['url']))
         ->add_meta (array ('property' => 'og:title', 'content' => ''))
         ->add_meta (array ('property' => 'og:description', 'content' => ''))
         ->add_meta (array ('property' => 'fb:admins', 'content' => FB_ADMINS))
         ->add_meta (array ('property' => 'fb:app_id', 'content' => FB_APP_ID))
         ->add_meta (array ('property' => 'og:locale', 'content' => 'zh_TW'))
         ->add_meta (array ('property' => 'og:locale:alternate', 'content' => 'en_US'))
         ->add_meta (array ('property' => 'og:type', 'content' => 'article'))
         ->add_meta (array ('property' => 'article:author', 'content' => FB_ARTICLE_AUTHOR))
         ->add_meta (array ('property' => 'article:publisher', 'content' => FB_ARTICLE_PUBLISHER))
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

  public function article ($setting) {
    $return = $setting ($this);

    if ($tags = array_unique (array_merge (preg_split ('/, ?/', KEYWORDS), $return['tags'], $return['keywords'])))
      foreach ($tags as $i => $tag)
        if (!$i) $this->add_meta (array ('property' => 'article:section', 'content' => $tag))->add_meta (array ('property' => 'article:tag', 'content' => $tag));
        else $this->add_meta (array ('property' => 'article:tag', 'content' => $tag));
           
    if ($also_list = array_filter (array ($this->np['p'], $this->np['n'])))
      foreach ($also_list as $also)
        $this->add_meta (array ('property' => 'og:see_also', 'content' => $also['url']));

    return $this->set_json_ld (array (
        '@context' => 'http://schema.org', '@type' => 'Article',
        'mainEntityOfPage' => array (
          '@type' => 'WebPage',
          '@id' => $this->np['c']['url']),
        'headline' => $return['title'],
        'image' => array ('@type' => 'ImageObject', 'url' => $this->np['c']['og_img'], 'height' => 630, 'width' => 1200),
        'datePublished' => date ('c', strtotime ($return['created_at'])),
        'dateModified' => date ('c', strtotime ($return['updated_at'])),
        'author' => array (
            '@type' => 'Person', 'name' => MY_NAME, 'url' => MY_FB_URL,
            'image' => array ('@type' => 'ImageObject', 'url' => avatar_url (MY_FB_UID, 300, 300), 'height' => 300, 'width' => 300)
          ),
        'publisher' => array (
            '@type' => 'Organization', 'name' => $this->site_title,
            'logo' => array ('@type' => 'ImageObject', 'url' => img_url ('amp_title.png'), 'width' => 600, 'height' => 60)
          ),
        'description' => $return['description']
      ))->add ('title', $return['title'])
        ->add ('h1', $return['title'])
        ->add ('tags', $return['tags'])
        ->add ('created_at', $return['created_at'])
        ->add ('updated_at', $return['updated_at'])
         
        ->add_js ('article.js')
        ->add_css ('article.css')

        ->add_meta (array ('name' => 'keywords', 'content' => implode (',', $return['keywords']) . ',' . KEYWORDS))
        ->add_meta (array ('name' => 'description', 'content' => ''))
        ->add_meta (array ('property' => 'og:title', 'content' => $return['title'] . ' - ' . $this->site_title))
        ->add_meta (array ('property' => 'og:description', 'content' => $return['description']))
        ->add_meta (array ('property' => 'og:image', 'tag' => 'larger', 'content' => $img = $this->np['c']['og_img'], 'alt' => $return['title'] . ' - ' . $this->site_title))
        ->add_meta (array ('property' => 'og:image:type', 'tag' => 'larger', 'content' => 'image/' . pathinfo ($img, PATHINFO_EXTENSION)))
        ->add_meta (array ('property' => 'og:image:width', 'tag' => 'larger', 'content' => '1200'))
        ->add_meta (array ('property' => 'og:image:height', 'tag' => 'larger', 'content' => '630'))
        ->add_meta (array ('property' => 'article:modified_time', 'content' => date ('c', strtotime ($return['created_at']))))
        ->add_meta (array ('property' => 'article:published_time', 'content' => date ('c', strtotime ($return['updated_at']))))
        ->_view ();
  }
  private function _view () {
    if (!file_exists ($view_path = VIEW . $this->file . DIRECTORY_SEPARATOR . CONTENT_NAME . EXT))
      exit ('No view file');

    $content = $this->load_view (VIEW . $this->file . DIRECTORY_SEPARATOR . CONTENT_NAME . EXT, array_merge ($this->vars, array (
        '_np' => $this->np,
        '_site_title' => $this->site_title,
      )));

    if (file_exists (VIEW . $this->file . DIRECTORY_SEPARATOR . CONTENT_NAME . '.js'))
      $this->add_js ($this->file . DIRECTORY_SEPARATOR . CONTENT_NAME . '.js');

    if (file_exists (VIEW . $this->file . DIRECTORY_SEPARATOR . CONTENT_NAME . '.css'))
      $this->add_css ($this->file . DIRECTORY_SEPARATOR . CONTENT_NAME . '.css');

    $js_list = array ();
    $css_list = array ();
    
    if (!defined ('ENV')) {
      $js_list = array_map (function ($t) { return (!preg_match ('/^https?:\/\//', $t['url']) ? '/' . VIEW_NAME : '') . $t['url']; }, $this->js_list);
      $css_list = array_map (function ($t) { return (!preg_match ('/^https?:\/\//', $t['url']) ? '/' . VIEW_NAME : '') . $t['url']; }, $this->css_list);
    } else {
      $temp = '';
      foreach ($this->js_list as $js) {
        if ($js['merge']) {
          $temp .= read_file (VIEW . $js['url']) . "\n";
        } else {
          merge_asset ($js_list, $temp, 'js');
          array_push ($js_list, $js['url']);
        }
      }
      merge_asset ($js_list, $temp, 'js');

      foreach ($this->css_list as $css) {
        if ($css['merge']) {
          $temp .= read_file (VIEW . $css['url']) . "\n";
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

    return $this->load_view (VIEW . 'frame' . EXT, array_merge ($this->vars, array (
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
        '_logo_string' => $this->logo_string,
        '_mobile_logo_strings' => $this->mobile_logo_strings,
      )));
  }
  public function view ($setting) {
    $setting ($this);
    
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