
<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="BBS 介面 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '01-2.jpg');?>" />
      <figcaption data-description='此實作是使用 C語言 Console 界面繪出模擬 BBS 版型。'>BBS 介面</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="列出 8comic 上的漫畫選單 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '02-2.jpg');?>" />
      <figcaption data-description='並且利用 wget 將知名網站 8comic 上的原始碼轉譯出漫畫並下載，簡單說就是使用 C語言 製作一個爬蟲，並且以 Console 的方式模擬 BBS 介面的排版。'>列出 8comic 上的漫畫選單</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>作品靈感來源只是想方便看漫畫，所以動手寫了程式將網站上的圖檔可以依照自己的選擇進行下載，程式中利用了 <a href='https://www.sqlite.org/' target='_blank'>SQLite</a>、C語言多重<a href='https://zh.wikipedia.org/zh-tw/指標_(電腦科學)' target='_blank'>指標</a>、網頁語言工具..等。下載後的漫畫皆會在客戶端的資料夾內，內容是搭配 <a href='https://zh.wikipedia.org/zh-tw/JavaScript' target='_blank'>JavaScript</a>、HTML 來達到瀏覽效果，所以只要開啟資料夾內的 index.html 即可方便看漫畫，有興趣也歡迎至 <a href='https://github.com/comdan66/c-comic-book' target='_blank'>GitHub</a> 下載執行檔、原始碼試試，不過此作目前已經沒在維護，若 8comic 網站有更新原始碼的話，則<b>不保證</b>可以正常下載漫畫。</p>

<div class='pics'>
  <div class='pictures n3'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="下載漫畫 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '03-2.jpg');?>" />
      <figcaption data-description='並且利用 wget 將知名網站 8comic 上的原始碼轉譯出漫畫並下載。'>下載漫畫</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="聲明與介紹 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '04-2.jpg');?>" />
      <figcaption data-description='聲明、介紹與使用方式。'>聲明與介紹</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="下載完後會儲存於 Download 目錄下 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '05-2.jpg');?>" />
      <figcaption data-description='下載完後會儲存於 Download 目錄下'>下載完後會儲存於 Download 目錄下</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />

<p>其中 BBS 介面的方式是自行制定一套檔案規則，並且放置在 <a href='https://github.com/comdan66/c-comic-book/tree/master/Interface' target='_blank'>Interface/</a> 目錄下，當要產生畫面時，C語言 去讀取自訂的字串規格，並且在 Console 上坐格式化即可達到想要的畫面，換句話就是自行實作一個簡單的 <a href='https://zh.wikipedia.org/zh-tw/MVC' target='_blank'>MVC</a> 架構的 View。<p>

