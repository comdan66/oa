<?php

include_once '../core/controller.php';

$html = Controller::load ()->article (function ($view) {
  $tags_list = array ();
  foreach ($view->menus as $menu) {
    if (isset ($menu['keywords'])) array_push ($tags_list, $menu['keywords']);
    if (isset ($menu['tags'])) array_push ($tags_list, $menu['tags']);
    if (isset ($menu['sub']) && $menu['sub'])
      foreach ($menu['sub'] as $sub) {
        if (isset ($sub['keywords'])) array_push ($tags_list, $sub['keywords']);
        if (isset ($sub['tags'])) array_push ($tags_list, $sub['tags']);
      }

    if (isset ($menu['items']) && $menu['items'])
      foreach ($menu['items'] as $items) {
        if (isset ($items['keywords'])) array_push ($tags_list, $items['keywords']);
        if (isset ($items['tags'])) array_push ($tags_list, $items['tags']);

        if (isset ($items['sub']) && $items['sub'])
          foreach ($items['sub'] as $sub) {
            if (isset ($sub['keywords'])) array_push ($tags_list, $sub['keywords']);
            if (isset ($sub['tags'])) array_push ($tags_list, $sub['tags']);
          }
      }
  }
  $tags = array_slice (array_unique (array_merge (preg_split ('/, ?/', KEYWORDS), array_2d_to_1d ($tags_list))), 0, 25);

  $view->set_json_ld (array (
      "@context" => "http://schema.org",
      "@type" => "Organization",
      "name" => $view->site_title,
      "url" => base_url (),
      "logo" => array ("@type" => "ImageObject", "url" => img_url ('amp_title.png'), "width" => 600, "height" => 60),
      "description" => mb_strimwidth (remove_ckedit_tag ($view->current['description']), 0, 150, '…','UTF-8'),
      "sameAs" => array (
          "http://www.ioa.tw/",
          "https://www.facebook.com/comdan66",
          "https://www.youtube.com/user/comdan66",
          "https://plus.google.com/u/0/+吳政賢",
          "https://picasaweb.google.com/108708350604082729522",
          "https://www.flickr.com/comdan66",
          "https://www.linkedin.com/in/政賢-吳-116136a1",
        )
    ));

  if ($tags)
    foreach ($tags as $i => $tag)
      if (!$i) $view->add_meta (array ('property' => 'article:section', 'content' => $tag))->add_meta (array ('property' => 'article:tag', 'content' => $tag));
      else $view->add_meta (array ('property' => 'article:tag', 'content' => $tag));
  if ($also_list = array_filter (array ($view->np['p'], $view->np['n'])))
    foreach ($also_list as $also)
      $view->add_meta (array ('property' => 'og:see_also', 'content' => $also['url']));

  $view->add ('title', '基本簡介')
       ->add ('h1', '基本簡介')
       ->add_tab ('index', '基本簡介')
       ->add_tab ('university', '大學時期')
       ->set_tab_index ('index')

       ->add_meta (array ('name' => 'keywords', 'content' => implode (',', $tags)))
       ->add_meta (array ('name' => 'description', 'content' => mb_strimwidth (remove_ckedit_tag ($view->current['description']), 0, 150, '…','UTF-8')))
       ->add_meta (array ('property' => 'og:title', 'content' => '基本簡介' . ' - ' . $view->site_title))
       ->add_meta (array ('property' => 'og:description', 'content' => mb_strimwidth (preg_replace ("/ +/", "", remove_ckedit_tag ($view->current['description'])), 0, 300, '…','UTF-8')))
       ->add_meta (array ('property' => 'og:image', 'tag' => 'larger', 'content' => $img = $view->np['c']['og_img'], 'alt' => '基本簡介' . ' - ' . $view->site_title))
       ->add_meta (array ('property' => 'og:image:type', 'tag' => 'larger', 'content' => 'image/' . pathinfo ($img, PATHINFO_EXTENSION)))
       ->add_meta (array ('property' => 'og:image:width', 'tag' => 'larger', 'content' => '1200'))
       ->add_meta (array ('property' => 'og:image:height', 'tag' => 'larger', 'content' => '630'))
       ->add_meta (array ('property' => 'article:modified_time', 'content' => date ('c', strtotime ($view->current['updated_at']))))
       ->add_meta (array ('property' => 'article:published_time', 'content' => date ('c', strtotime ($view->current['created_at']))))
      
       ->add ('message', '部分作品資料尚未準備齊全，努力更新中..');
});

if (!defined ('ENV')) echo $html;
else return $html;
