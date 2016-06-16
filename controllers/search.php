<?php

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

include_once '../core/controller.php';

$html = Controller::load ()->pure (function ($view) {
  $menus = array_filter (np_map ($view->menus, array ('items', 'sub')), function ($t) {
      return in_array ($t['type'], array ('album', 'unpacking', 'article', 'demo'));
    });
  $menus = array_map (function ($menu) {
    $bom = pack ('H*','EFBBBF');
    return array (
        'text' => $menu['text'],
        'file' => $menu['file'],
        'kind' => $menu['type'],
        'icon' => $menu['type'] != 'album' ? $menu['type'] != 'unpacking' ? 'fi-ar' : 'fi-g' : 'fi-p',
        'keyword' => implode (',', array_unique (array_merge ($menu['keywords'], $menu['tags']))),
        'description' => $menu['description'],
        'created_at' => $menu['created_at'],
        'content' => strip_tags (preg_replace (array ('/<(\?|\%)\=?(php)?/', '/(\%|\?)>/', '/\n/'), array ('', '', ''), preg_replace ("/^$bom/", '', read_file (VIEW . $menu['file'] . DIRECTORY_SEPARATOR . CONTENT_NAME . EXT)))),
        'imgs' => array (
            'left' => $menu['img'],
            'cover' => $menu['cover'],
            'og_img' => $menu['og_img']
          ),
      );
  }, $menus);

  $tags_list = np_map ($view->menus, array ('keywords', 'tags'));
  $tags = array_slice (array_unique (array_merge (preg_split ('/, ?/', KEYWORDS), $tags_list)), 0, 25);
  if ($tags)
    foreach ($tags as $i => $tag)
      if (!$i) $view->add_meta (array ('property' => 'article:section', 'content' => $tag))->add_meta (array ('property' => 'article:tag', 'content' => $tag));
      else $view->add_meta (array ('property' => 'article:tag', 'content' => $tag));
  if ($also_list = array_filter (array ($view->np['p'], $view->np['n'])))
    foreach ($also_list as $also)
      $view->add_meta (array ('property' => 'og:see_also', 'content' => $also['url']));

    $i = 0;
    $view->set_json_ld (array (
        '@context' => 'http://schema.org', '@type' => 'BreadcrumbList',
        "itemListElement" => array_map (function ($menu) use (&$i) {
            return array (
                "@type" => "ListItem",
                "position" => ++$i,
                "item" => array (
                    "@id" => base_url ($menu['file'] . EXTENSION),
                    "name" => $menu['text'],
                    "description" => mb_strimwidth (remove_ckedit_tag ($menu['description']), 0, 150, '…','UTF-8'),
                    "image" => array ('@type' => 'ImageObject', 'url' => $menu['imgs']['og_img'], 'height' => 630, 'width' => 1200),
                    "url" => base_url ($menu['file'] . EXTENSION),
                  )
              );
          }, $menus),
      ));
  $view->add_meta (array ('name' => 'keywords', 'content' => implode (',', $tags)))
                ->add_meta (array ('name' => 'description', 'content' => mb_strimwidth (remove_ckedit_tag ($view->current['description']), 0, 150, '…','UTF-8')))
                ->add_meta (array ('property' => 'og:title', 'content' => $view->current['text'] . ' - ' . $view->site_title))
                ->add_meta (array ('property' => 'og:description', 'content' => mb_strimwidth (preg_replace ("/ +/", "", remove_ckedit_tag ($view->current['description'])), 0, 300, '…','UTF-8')))
                ->add_meta (array ('property' => 'og:image', 'tag' => 'larger', 'content' => $img = $view->np['c']['og_img'], 'alt' => $view->current['text'] . ' - ' . $view->site_title))
                ->add_meta (array ('property' => 'og:image:type', 'tag' => 'larger', 'content' => 'image/' . pathinfo ($img, PATHINFO_EXTENSION)))
                ->add_meta (array ('property' => 'og:image:width', 'tag' => 'larger', 'content' => '1200'))
                ->add_meta (array ('property' => 'og:image:height', 'tag' => 'larger', 'content' => '630'))
                ->add_meta (array ('property' => 'article:modified_time', 'content' => date ('c', strtotime ($view->current['updated_at']))))
                ->add_meta (array ('property' => 'article:published_time', 'content' => date ('c', strtotime ($view->current['created_at']))));
                
  return array (
      'menus' => $menus
    );
});

if (!defined ('ENV')) echo $html;
else return $html;
