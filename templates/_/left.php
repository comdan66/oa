<?php
if (!(isset ($mobile_logo) && isset ($menus) && isset ($href))) return; ?>

<aside>
  <header>
<?php
    if (is_array ($mobile_logo)) {
      foreach ($mobile_logo as $logo) { ?>
        <span><?php echo $logo;?></span>
<?php }
    } ?>
  </header>
  <?php
  foreach ($menus as $menu) {
    if (!$menu['items'] = array_filter ($menu['items'], function ($item) { return isset ($item['text']) && $item['text']; })) continue; ?>
    <h4<?php echo isset ($menu['desc']) && $menu['desc'] ? ' title="' . $menu['desc'] . '"' : '';?>><?php echo $menu['group'];?></h4>
    <div>
<?php foreach ($menu['items'] as $item) {
        $_text = $item['text'];
        $_href = isset ($item['href']) && $item['href'] ? ' href="' . $item['href'] . '"' : '';
        $_class = isset ($item['class']) && $item['class'] ? ' class="' . (isset ($item['href']) && $item['href'] && $href == $item['href'] ? $item['class'] . ' a' : $item['class']) . '"' : (isset ($item['href']) && $item['href'] && $href == $item['href'] ? ' class="a"' : '');
        $_target = isset ($item['target']) && $item['target'] ? ' target="' . $item['target'] . '"' : ''; ?>
        <a<?php echo $_href . $_class . $_target;?>><img src='<?php echo PROTOCOL . DOMAIN . '/img/left/' . (isset ($item['icon']) && $item['icon'] ? $item['icon'] : '_d4.png');?>'><span><?php echo $_text;?></span></a>
<?php } ?>
    </div>  
<?php
  } ?>
</aside>
