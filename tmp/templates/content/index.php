
<?php 
  if (isset ($np) && $np && ((isset($np['p']) && $np['p']) || (isset($np['n']) && $np['n']))) { ?>
    <div id='_np'>
<?php foreach ($np as $key => $value) {
        if (!(in_array ($key, array ('p', 'n')) && $value)) continue; ?>
        <figure class='<?php echo $key;?>'>
          <a href='<?php echo $value['href'];?>'>
            <img src='<?php echo $value['icon'];?>' />
          </a>
          <figcaption><a href='<?php echo $value['href'];?>'><?php echo $value['text'];?></a></figcaption>
        </figure>
<?php }?>
    </div>
  <?php 
  }