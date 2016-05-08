<?php
if (!(isset ($logo) && isset ($title))) return; ?>

<header>
  <nav>
    <a href=''><?php echo $logo;?></a>

    <div>
<?php if (isset ($href) && $href) { ?>
        <a class='fi-a-l' href='<?php echo $href;?>'></a>
<?php } ?>
      <a class='fi-m'></a>
      <h1><?php echo $title;?></h1>
    </div>

    <a></a>
  </nav>
</header>