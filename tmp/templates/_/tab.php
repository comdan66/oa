<?php
if (!(isset ($tabs) && ($tabs = array_filter ($tabs, function ($tab) { return isset ($tab['text']) && $tab['text']; })) && isset ($href))) return; ?>

<div class='_t'>
  <a></a>
  <div><div>
<?php 
    foreach ($tabs as $tab) {
      $_text = $tab['text'];
      $_href = isset ($tab['href']) && $tab['href'] ? ' href="' . $tab['href'] . '"': '';
      $_class = isset ($tab['class']) && $tab['class'] ? ' class="' . (isset ($tab['href']) && $tab['href'] && $href == $tab['href'] ? $tab['class'] . ' a' : $tab['class']) . '"' : (isset ($tab['href']) && $tab['href'] && $href == $tab['href'] ? ' class="a"' : '');
      $_target = isset ($tab['target']) && $tab['target'] ? ' target="' . $tab['target'] . '"': ''; ?>
      <a<?php echo $_href . $_class . $_target;?>><?php echo $_text;?></a>
<?php
    } ?>
  </div></div>
  <a></a>
</div>
