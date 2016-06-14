<p>GitHub 內的關鍵 css 與 JavaScript 分別在 <a href='https://github.com/comdan66/number_flipping_counter/blob/master/scss/counter.scss' target='_blank'>這裡</a> 和 <a href='https://github.com/comdan66/number_flipping_counter/blob/master/js/counter.js' target='_blank'>這裡</a>，以下依照步驟配合圖片講解一下！</p>
<p>1. 首先建立要用的 HTML 結構，基本上就是 span 代表一個位數，裡面的 i 代表 10 個數字。</p>

<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="HTML 結構 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '01.png');?>" />
      <figcaption data-description='基本上就是 span 代表一個位數，裡面的 i 代表 10 個數字。'>HTML 結構</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器畫面 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '02.png');?>" />
      <figcaption data-description='瀏覽器畫面'>瀏覽器畫面</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>2. 設定 scss(css)，將 span 給予 <span class='path'>position: relative;</span> 的屬性，然後針對子元素 i 設定 <span class='path'>position: absolute;</span>，此時看到瀏覽器畫面 span 內的 i 都疊在一起了。</p>
<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="給予絕對位置 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '03.png');?>" />
      <figcaption data-description='設定 scss(css)，將 span 給予 position: relative; 的屬性，然後針對子元素 i 設定 position: absolute;。'>給予絕對位置</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器畫面 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '03-1.png');?>" />
      <figcaption data-description='瀏覽器畫面 span 內的 i 都疊在一起了。'>瀏覽器畫面</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>3. 利用 scss 的 <b>for</b> 迴圈，針對 <b>nth-child</b> 設定 <b>top</b> 的位置。瀏覽器使用開發者檢視，可以發現每個 i 都因為 for 迴圈加上使用 calc，所以有不同的設定值。</p>
<div class='pics'>
  <div class='pictures n3'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="設定每個 i 的位置 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '04.png');?>" />
      <figcaption data-description='利用 scss 的 for 迴圈，針對 nth-child 設定 top 的位置。'>設定每個 i 的位置</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器畫面 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '05.png');?>" />
      <figcaption data-description='瀏覽器畫面'>瀏覽器畫面</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="使用開發者檢視 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '06.png');?>" />
      <figcaption data-description='使用開發者檢視，可以發現每個 i 都因為 for 迴圈加上使用 calc，所以有不同的設定值。'>使用開發者檢視</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>4. 接著改變一下 HTML，將每個 span 加上 n5 的 class，並且修改 scss，將原本的 for 迴圈移除，改在 span 設定，使用雙層迴圈，分別針對 n0~n9 去設定 i 的不同位置。開啟瀏覽器，可以發現 i 被移到指定的 5。</p>
<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="使用雙層迴圈 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '08.png');?>" />
      <figcaption data-description='接著改變一下 HTML，將每個 span 加上 n5 的 class，並且修改 scss，將原本的 for 迴圈移除，改在 span 設定，使用雙層迴圈，分別針對 n0~n9 去設定 i 的不同位置。'>使用雙層迴圈</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器畫面 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '09.png');?>" />
      <figcaption data-description='開啟瀏覽器，可以發現 i 被移到指定的 5。'>瀏覽器畫面</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>5. 使用 JavaScript 輔助，使用簡單的數學運算(/、%、pow)，切割出各個位數，並且利用 jQuery 的 <b>eq</b> 來取得指定的 span。</p>
<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="使用 JavaScript 輔助 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '10.png');?>" />
      <figcaption data-description='使用 JavaScript 輔助，使用簡單的數學運算(/、%、pow)，切割出各個位數，並且利用 jQuery 的 eq 來取得指定的 span。'>使用 JavaScript 輔助</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器畫面 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '12.png');?>" />
      <figcaption data-description='瀏覽器畫面，可以看到已經可以跑到指定的位置了！'>瀏覽器畫面</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>6. 加上個 input，並且修改一下 JavaScript，讓使用者輸入數字時改變計數器。</p>
<div class='pics'>
  <div class='pictures n3'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="加入 input <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '11.png');?>" />
      <figcaption data-description='加上個 input，並且修改一下 JavaScript，讓使用者輸入數字時改變計數器。'>加入 input</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="修改 JavaScript <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '13.png');?>" />
      <figcaption data-description='修改一下 JavaScript，讓使用者輸入數字時改變計數器。'>修改 JavaScript</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器畫面 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '14.png');?>" />
      <figcaption data-description='瀏覽器畫面，可以讓使用者輸入數字時改變計數器。'>瀏覽器畫面</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>7. 最後在 span 上加入 <span class='path'>overflow: hidden;</span>，如此就可以將不再位置內的 i 隱藏囉！同時 i 加上 transition 優化 top 移動的效果！</p>

<div class='pics'>
  <div class='pictures n3'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="隱藏其他數字 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '15.png');?>" />
      <figcaption data-description='最後在 span 上加入 overflow: hidden;，如此就可以將不再位置內的 i 隱藏囉！'>隱藏其他數字</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="隱藏其他的數字 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '16.png');?>" />
      <figcaption data-description='隱藏其他的數字'>隱藏其他的數字</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="transition <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '17.png');?>" />
      <figcaption data-description='加上 transition 優化 top 移動的效果！'>transition</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />

