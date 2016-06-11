<?php

include_once '../core/controller.php';

$html = Controller::load ('index')->article (function ($view) {
  $description = '進入了大學後才正式學習的程式語言，而當時搭配基礎程式教學的工具則是C語言，我認為 C 對我日後學習程式來說的一項重要的基石，也因為 C 的指標、串列，對於電腦記憶體的管控有了初步的認識。因為高等程式語言課程，我選修了 Java，幸好有 C 的資料結構基礎，對於 Java 物件導向的觀念銜接上相對順利；Java 是我大學愛用的程式語言，主要因為可以使用 Graphical User Interface(GUI) 的介面設計，所以展現出來的畫面可以更加豐富，當時也是著做出多樣性的作品，如：Java 小畫家、串接噗浪 API 的應用程式、使用 Socket 實作模擬 MSN 的通訊程式、系統程式的 Assembler，這些都是利用 Java GUI 介面所設計的！';

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
  $tags = array_slice (array_unique (array_merge (preg_split ('/, ?/', KEYWORDS), array_2d_to_1d ($tags_list))), 25, 25);

  if ($tags)
    foreach ($tags as $i => $tag)
      if (!$i) $view->add_meta (array ('property' => 'article:section', 'content' => $tag))->add_meta (array ('property' => 'article:tag', 'content' => $tag));
      else $view->add_meta (array ('property' => 'article:tag', 'content' => $tag));
  if ($also_list = array_filter (array ($view->np['p'], $view->np['n'])))
    foreach ($also_list as $also)
      $view->add_meta (array ('property' => 'og:see_also', 'content' => $also['url']));

  $view->set_json_ld (array (
      '@context' => 'http://schema.org', '@type' => 'Article',
      'mainEntityOfPage' => array (
        '@type' => 'WebPage',
        '@id' => $view->np['c']['url']),
      'headline' => $view->current['text'],
      'image' => array ('@type' => 'ImageObject', 'url' => $view->np['c']['og_img'], 'height' => 630, 'width' => 1200),
      'datePublished' => date ('c', strtotime ($view->current['created_at'])),
      'dateModified' => date ('c', strtotime ($view->current['updated_at'])),
      'author' => array (
          '@type' => 'Person', 'name' => MY_NAME, 'url' => MY_FB_URL,
          'image' => array ('@type' => 'ImageObject', 'url' => avatar_url (MY_FB_UID, 300, 300), 'height' => 300, 'width' => 300)
        ),
      'publisher' => array (
          '@type' => 'Organization', 'name' => $view->site_title,
          'logo' => array ('@type' => 'ImageObject', 'url' => img_url ('amp_title.png'), 'width' => 600, 'height' => 60)
        ),
      'description' => mb_strimwidth (remove_ckedit_tag ($view->current['description']), 0, 150, '…','UTF-8')
    ));
  $view->add ('title', '大學時期')
       ->add ('h1', '大學時期')
       ->add_tab ('index', '基本簡介')
       ->add_tab ('university', '大學時期')
       ->set_tab_index ('university')

       ->add_meta (array ('name' => 'keywords', 'content' => implode (',', $tags)))
       ->add_meta (array ('name' => 'description', 'content' => mb_strimwidth (remove_ckedit_tag ($description), 0, 150, '…','UTF-8')))
       ->add_meta (array ('property' => 'og:title', 'content' => '基本簡介' . ' - ' . $view->site_title))
       ->add_meta (array ('property' => 'og:description', 'content' => mb_strimwidth (preg_replace ("/ +/", "", remove_ckedit_tag ($description)), 0, 300, '…','UTF-8')))
       ->add_meta (array ('property' => 'og:image', 'tag' => 'larger', 'content' => $img = $view->np['c']['og_img'], 'alt' => '基本簡介' . ' - ' . $view->site_title))
       ->add_meta (array ('property' => 'og:image:type', 'tag' => 'larger', 'content' => 'image/' . pathinfo ($img, PATHINFO_EXTENSION)))
       ->add_meta (array ('property' => 'og:image:width', 'tag' => 'larger', 'content' => '1200'))
       ->add_meta (array ('property' => 'og:image:height', 'tag' => 'larger', 'content' => '630'))
       ->add_meta (array ('property' => 'article:modified_time', 'content' => date ('c', strtotime ($view->current['updated_at']))))
       ->add_meta (array ('property' => 'article:published_time', 'content' => date ('c', strtotime ($view->current['created_at']))))
      ;
});

if (!defined ('ENV')) echo $html;
else return $html;
