<?php echo $_view;

  if (isset ($_np) && $_np && ((isset($_np['p']) && $_np['p']) || (isset($_np['n']) && $_np['n']))) { ?>
    <div id='_np'>
<?php foreach ($_np as $key => $value) {
        if (!(in_array ($key, array ('p', 'n')) && $value)) continue; ?>
        <figure class='<?php echo $key;?>'>
          <a href='<?php echo $value['url'];?>'>
            <img src='<?php echo $value['img'];?>' />
          </a>
          <figcaption><a href='<?php echo $value['url'];?>'><?php echo $value['text'];?></a></figcaption>
        </figure>
<?php }?>
    </div>
  <?php 
  }