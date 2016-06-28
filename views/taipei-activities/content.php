<p>上傳 S3 過程採用 php 執行，關鍵程式碼<a href='https://github.com/comdan66/taipei_activities/blob/master/cmd/put.php' target='_blank'>在這裡</a>，主要是利用 S3 針對檔案都有 tag 的特性，對上傳檔案做 <a href='http://php.net/manual/en/function.md5-file.php' target='_blank'>md5_file</a>，達成差異化更新的步驟，步驟如下：</p>

<ul>
  <li>取得 S3 上所有檔案</li>
  <li>整理準備上傳的檔案</li>
  <li>比對準備上傳與 S3 上檔案的 md5_file 差異</li>
  <li>針對差異做更新、刪除、上傳</li>
</ul>

<div class='pics'>
  <div class='pictures n1'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="執行 put.php 取得資料並且上傳 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '04.jpg');?>" />
      <figcaption data-description='使用 php 將 API 資料取下來後編輯成 HTML 頁面，並且放置到 Amazon S3。放置部署過程中同時將頁面所需的 css、JavaScript，並且一起上傳至 S3。'>執行 put.php 取得資料並且上傳</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>網頁排版盡量參照 <a href='https://material.google.com/' target='_blank'>Material Design</a>，同時具有 <a href='http://www.ibest.tw/page01.php' target='_blank'>響應式網頁設計(RWD)</a> 的版型，讓手機用戶也可以方便瀏覽與輕鬆操作。</p>
<p>切版使用 <a href='http://compass-style.org/' target='_blank'>compass</a> 編譯 <a href='http://sass-lang.com/' target='_blank'>scss</a>，頁面上使用 JavaScript 完成互動功能，如：<b>快速搜尋</b>，利用 jQuery 的 <a href='https://api.jquery.com/category/selectors/' target='_blank'>selector</a> <b>[name*=”value”]</b> 完成模糊搜尋，並且利用網址的 <a href='http://www.w3schools.com/jsref/prop_loc_hash.asp' target='_blank'>Hash</a> 來做分類查詢。</p>
<p>依據資料開放平台上表示每天會更新，所以系統排程會在每日上午 6 時去取得最新的藝文活動資訊，並且放置到 s3 上做更新。目前只爬取新北市政府的開放資料，未來會補上台北市的部分，若是有發現其他縣市的活動 API，也會一併整理起來。</p>
<p>若是覺得不錯，可以對 <a href='https://github.com/comdan66/taipei_activities' target='_blank'>GitHub</a> 按個星星，鼓勵一下作者吧：）</p>