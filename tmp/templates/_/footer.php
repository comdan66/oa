<?php
if (!(isset ($title) && isset ($href))) return; ?>
<footer>
  <div></div>
  <div>
    <div><?php echo $title;?> ©<?php echo date ('Y');?></div>
    <div>如有相關問題歡迎與<a href="<?php echo $href;?>" target="_blank">作者</a>討論。</div>
  </div>
  <div></div>
</footer>