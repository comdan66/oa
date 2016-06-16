<div class='search no'>
  <input type='search' id='search' placeholder='快來搜尋一下 OA 的相關文章吧！' autofocus />
  <span class='fi-sh'></span>
</div>

<div class='line cr'>
  <div class='kind'>
    <label><input type='checkbox' checked value='demo'/><span>作品實作</span></label>
    <label><input type='checkbox' checked value='article'/><span>自介文章</span></label>
    <label><input type='checkbox' checked value='album'/><span>相簿照片</span></label>
    <label><input type='checkbox' checked value='unpacking'/><span>開箱心得</span></label>
  </div>
  <div class='type'>
    <button class='fi-li' data-type='li'></button>
    <button class='fi-cr a' data-type='cr'></button>
  </div>
</div>

<div class='works'>
  <?php
  foreach ($menus as $menu) { ?>
    <figure data-kind='<?php echo $menu['kind'];?>' data-str='<?php echo 'all' . preg_replace ("/[^\x{4e00}-\x{9fa5}_a-zA-Z0-9]+/u", "", strtolower (remove_ckedit_tag ($menu['text']))) . preg_replace ("/[^\x{4e00}-\x{9fa5}_a-zA-Z0-9]+/u", "", strtolower (remove_ckedit_tag ($menu['keyword']))) . preg_replace ("/[^\x{4e00}-\x{9fa5}_a-zA-Z0-9]+/u", "", strtolower (remove_ckedit_tag ($menu['description']))) . preg_replace ("/[^\x{4e00}-\x{9fa5}_a-zA-Z0-9]+/u", "", strtolower (remove_ckedit_tag ($menu['content'])));?>'>
      <h2 class='<?php echo $menu['icon'];?>'><a href='<?php echo base_url ($menu['file'] . EXTENSION);?>' target='_blank'><?php echo $menu['text'];?></a><time datetime='<?php echo $menu['created_at'];?>'><?php echo $menu['created_at'];?></time></h2>
      <a href='<?php echo base_url ($menu['file'] . EXTENSION);?>' target='_blank'><img alt="<?php echo $menu['text'];?> - <?php echo $site_title;?>" src="<?php echo $menu['imgs']['left'];?>" /></a>
      <figcaption><?php echo mb_strimwidth (remove_ckedit_tag ($menu['description']), 0, 600, '','UTF-8');?>…<a href='<?php echo base_url ($menu['file'] . EXTENSION);?>' target='_blank'></a></figcaption>
    </figure>
  <?php
  } ?>
</div>

<div class='suggest'>
  <a href="<?php echo base_url ($current['file'] . EXTENSION . '#' . rawurlencode (preg_replace ('/[\/%]/', ' ', preg_replace ('/[\(\)]/', '', '接案'))));?>">接案</a>
  <a href="<?php echo base_url ($current['file'] . EXTENSION . '#' . rawurlencode (preg_replace ('/[\/%]/', ' ', preg_replace ('/[\(\)]/', '', 'css'))));?>">css</a>
  <a href="<?php echo base_url ($current['file'] . EXTENSION . '#' . rawurlencode (preg_replace ('/[\/%]/', ' ', preg_replace ('/[\(\)]/', '', 'php'))));?>">php</a>
  <a href="<?php echo base_url ($current['file'] . EXTENSION . '#' . rawurlencode (preg_replace ('/[\/%]/', ' ', preg_replace ('/[\(\)]/', '', 'Google Maps'))));?>">Google Maps</a>
  <a href="<?php echo base_url ($current['file'] . EXTENSION . '#' . rawurlencode (preg_replace ('/[\/%]/', ' ', preg_replace ('/[\(\)]/', '', 'JavaScript'))));?>">JavaScript</a>
  <a href="<?php echo base_url ($current['file'] . EXTENSION . '#' . rawurlencode (preg_replace ('/[\/%]/', ' ', preg_replace ('/[\(\)]/', '', '北港'))));?>">北港</a>
  <a href="<?php echo base_url ($current['file'] . EXTENSION . '#' . rawurlencode (preg_replace ('/[\/%]/', ' ', preg_replace ('/[\(\)]/', '', 'API'))));?>">API</a>
  <a href="<?php echo base_url ($current['file'] . EXTENSION . '#' . rawurlencode (preg_replace ('/[\/%]/', ' ', preg_replace ('/[\(\)]/', '', 'ce2'))));?>">Amazon EC2‎</a>
  <a href="<?php echo base_url ($current['file'] . EXTENSION . '#' . rawurlencode (preg_replace ('/[\/%]/', ' ', preg_replace ('/[\(\)]/', '', '全端'))));?>">全端</a>
  <a href="<?php echo base_url ($current['file'] . EXTENSION . '#' . rawurlencode (preg_replace ('/[\/%]/', ' ', preg_replace ('/[\(\)]/', '', 's3'))));?>">Amazon S3</a>
</div>