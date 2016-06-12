<figure>
  <a href='<?php echo $current['url'];?>'>
    <img alt="<?php echo $current['text'] . ' - ' . $_site_title;?>" src='<?php echo $current['og_img'];?>' />
  </a>
  <figcaption><?php echo $current['text'] . ' - ' . $_site_title;?></figcaption>
</figure>

<h2>
  <a href='<?php echo $current['url'];?>'><?php echo $current['text'];?><?php echo isset ($is_album) && $is_album ? '' : ' 實作心得';?></a>
  <div class="fb-like" data-href="<?php echo $current['url'];?>" data-send="false" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
</h2>

<div class='i'>
  <figure>
    <a href='<?php echo $current['url'];?>' target='_blank'>
      <img src='<?php echo avatar_url (MY_FB_UID);?>' />
    </a>
  </figure>
  <a href='<?php echo MY_FB_URL;?>' target='_blank'><?php echo MY_NAME;?></a><span>·</span>
  <time><?php echo date ('Y.m.d', strtotime (date ($current['created_at'])));?></time><span>·</span>
  <time datetime='<?php echo $current['created_at'];?>'><?php echo $current['created_at'];?></time>
</div>

<article>

  <p><?php echo $current['description'];?></p>

<?php if (isset ($current['main_links'])) { ?>
        <br/>
        <ul>
    <?php foreach ($current['main_links'] as $text => $main_link) { ?>
            <li><b><?php echo $text;?></b>：<a href='<?php echo $main_link;?>' target='_blank'><b><?php echo $main_link;?></b></a></li>
    <?php } ?>
        </ul>
        <br/>
<?php }?>

<?php echo $_view;
      if (!(isset ($is_album) && $is_album)) { ?>
        <p>以上就是這次 <?php echo $current['text'];?> 的開發心得如有任何問題<a href="mailto:<?php echo MY_MAIL;?>?subject=關於 iOA 的問題&body=Hi OA,%0D%0A%0D%0A    我在您的網站上看到有關於 <?php echo $current['text'];?> 的心得，以下是我的一些相關問題..">歡迎來信</a>討論。</p>
<?php }?>
</article>

<?php
if ($current['pictures']) { ?>
  <div class='pics album'>
<?php
    foreach ($current['pictures'] as $i => $pictures) {
      if ($pictures) { ?>
        <div class='pictures n<?php echo count ($pictures);?>'>
    <?php foreach ($pictures as $j => $picture) { ?>
            <figure href='<?php echo base_url ($current['file'] . EXTENSION . '#&gid=' . ($i + 1) . '&pid=' . ($j + 1) . '&id=0');?>'>
              <img alt="<?php echo $picture['text'];?> - <?php echo $_site_title;?>" src="<?php echo img_url ('views', $current['file'], $picture['name']);?>" />
              <figcaption data-description='<?php echo $picture['desc'];?>'><?php echo $picture['text'];?></figcaption>
            </figure>
    <?php } ?>
        </div>
<?php }
    }?>
  </div>
<?php
}?>

<?php
  if (isset ($current['resources']) && $current['resources']) { ?>
    <ul>
<?php foreach ($current['resources'] as $text => $resource) { ?>
        <li><a href='<?php echo $resource;?>' target='_blank'><?php echo $text;?></a><span><a href='<?php echo $resource;?>' target='_blank'><?php echo $resource;?></a></span></li>
<?php }?>
    </ul>
<?php
  }
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