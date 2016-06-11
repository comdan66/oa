<!DOCTYPE html>
<html lang="tw">
  <head>
<?php foreach ($_metas as $meta) { ?>
      <meta <?php echo implode (' ', array_map (function ($attribute, $value) { return $attribute . '="' . $value . '"'; }, array_keys ($meta), $meta));?> />
<?php } ?>
    <link rel="canonical" href="<?php echo base_url ($_current['file'] . EXTENSION);?>" />
    <link rel="alternate" href="<?php echo base_url ($_current['file'] . EXTENSION);?>" hreflang="zh-Hant" />

    <title><?php echo $_title;?></title>

<?php foreach ($_css_list as $css) { ?>
        <link href="<?php echo $css;?>" rel="stylesheet" type="text/css" />
<?php }
      foreach ($_js_list as $js) { ?>
        <script src="<?php echo $js;?>" language="javascript" type="text/javascript" ></script>
<?php } 
      if ($_json_ld) { ?>
        <script type="application/ld+json">
    <?php echo json_encode ($_json_ld, defined ('ENV') ? JSON_UNESCAPED_SLASHES : JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);?>
        </script>
<?php }?>

  </head>
  <body lang="zh-tw">
    <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a itemprop="url" href='<?php echo base_url ();?>'><span itemprop="title"><?php echo MY_NAME;?></span></a>
    </div>
    <div class='_scope' itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a itemprop="url" href='<?php echo base_url ($_current['file'] . EXTENSION);?>'><span itemprop="title"><?php echo preg_replace ("/\.+/", "", $_current['text']);?></span></a>
    </div>

    <header>
      <nav>
        <a href='<?php echo base_url ();?>'><?php echo $_logo_string;?></a>

        <div>
    <?php if (isset ($back_href) && $back_href) { ?>
            <a class='fi-a-l' href='<?php echo $back_href;?>'></a>
    <?php } ?>
          <a class='fi-m'></a>
          <h1><?php echo isset ($h1) ? $h1 : '';?></h1>
        </div>

        <a></a>
      </nav>
    </header>

    <div id='_c'>
      <div>

        <aside>
          <header>
        <?php
            if (is_array ($_mobile_logo_strings)) {
              foreach ($_mobile_logo_strings as $logo_string) { ?>
                <span><?php echo $logo_string;?></span>
        <?php }
            } else { ?>
              <span><?php echo $_mobile_logo_strings;?></span>
        <?php
            } ?>
          </header>

    <?php foreach ($_menus as $menus) { ?>
            <h4<?php echo isset ($menus['title']) && $menus['title'] ? ' title="' . $menus['title'] . '"': '';?>><?php echo $menus['group'];?></h4>
            <div>
        <?php foreach ($menus['items'] as $item) {
                if (in_array ($item['type'], array ('demo', 'more', 'article', 'albums'))) { ?>
                  <a<?php echo $item['active'] ? ' class="a"': '';?> href="<?php echo $item['url'];?>"><img src='<?php echo $item['img'];?>'><span><?php echo $item['text'];?></span></a>
          <?php }
              } ?>
            </div>  
      <?php 
          } ?>
        </aside>
        <div>
    <?php if ($_tabs) { ?>
            <div class='_t'>
              <a></a>
              <div><div>
          <?php foreach ($_tabs as $tab) { ?>
                  <a<?php echo $tab['active'] ? ' class="a"' : '';?> href='<?php echo $tab['href'];?>'><?php echo $tab['text'];?></a>
          <?php } ?>
            </div></div>
              <a></a>
            </div>
    <?php } ?>
          <div class='_c'>
            <?php echo $_content;?>
          </div>
    <?php if ($_message) { ?>
            <div class='_m'><?php echo $_message;?></div>
    <?php } ?>
        </div>
        <span></span>
      </div>
    </div>

    <footer>
      <div></div>
      <div>
        <div><?php echo $_site_title;?> ©<?php echo date ('Y');?></div>
        <div>如有相關問題歡迎與<a href="<?php echo PROTOCOL . DOMAIN;?>" target="_blank">作者</a>討論。</div>
      </div>
      <div></div>
    </footer>

    <div id='fb-root'></div>

  </body>
</html>
