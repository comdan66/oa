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
  foreach ($menus as $key => $menu) {
    if (!$menu = array_filter ($menu, function ($item) { return isset ($item['text']) && $item['text']; })) continue; ?>
    <h4><?php echo $key;?></h4>
    <div>
<?php foreach ($menu as $item) {
        $_text = $item['text'];
        $_href = isset ($item['href']) && $item['href'] ? ' href="' . $item['href'] . '"' : '';
        $_class = isset ($item['class']) && $item['class'] ? ' class="' . ($href == $_href ? $item['class'] . ' a' : $item['class']) . '"' : ($href == $_href ? ' class="a"' : '');
        $_target = isset ($item['target']) && $item['target'] ? ' target="' . $item['target'] . '"' : ''; ?>
        <a<?php echo $_href . $_class . $_target;?>><?php echo $_text;?></a>
<?php } ?>
    </div>  
<?php
  } ?>
</aside>
