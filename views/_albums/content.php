<div class='n3p'>
<?php
    foreach ($current['sub'] as $sub) {
      if ($sub['pictures']) { $i = 0; ?>
        <a href='<?php echo base_url ($sub['file'] . EXTENSION);?>' title='<?php echo $sub['text'];?>' data-count='<?php echo count ($sub['pics']);?>'>
          <figure>
            <img alt="<?php echo $sub['text'];?> - <?php echo $_site_title;?>" src="<?php echo $sub['cover'];?>" />
            <figcaption><?php echo $sub['text'];?></figcaption>
          </figure>
    <?php foreach ($sub['pics'] as $pic) {
            if ($i++ > 1) break; ?>
            <figure>
              <img alt="<?php echo $pic['text'];?> - <?php echo $_site_title;?>" src="<?php echo img_url ('views', $sub['file'], $pic['name']);?>" />
              <figcaption><?php echo $pic['text'];?></figcaption>
            </figure>
    <?php } ?>
        </a>
<?php }
    } ?>
</div>