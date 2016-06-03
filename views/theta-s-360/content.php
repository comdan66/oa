<p>由於 RICOH Theta S 360 全景相機具備兩鏡頭，所以可以產出一張由兩顆鏡頭組成的 360度的相片，照片是以水平呈現，所以瀏覽起來效果不佳。目前據我所知 RICOH Theta S 官網也有提供上傳瀏覽 <a href='https://theta360.com/s/ky0a4C1uh1JWl1Q56C8NZm3OO' target='_blank'>360度相片播放器</a>的功能，但當時官網的播放器是使用 <a href='https://get.adobe.com/tw/flashplayer/' target='_blank'>Flash</a> 來呈現的(目前好像改成使用 <a href='http://www.w3schools.com/html/html5_canvas.asp' target='_blank'>canvas</a>)，身為前端工程師的我，當然立馬想使用 <a href='https://zh.wikipedia.org/zh-tw/JavaScript' target='_blank'>JavaScript</a> 去實作 360度全景相片播放器！</p>

<div class='pics'>
  <div class='pictures n2'>
    <figure href='http://360.ioa.tw/b21470101e21cb202b8563a7a9e034b8'>
      <img alt="360 度的相片原始檔 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '01.jpg');?>" />
      <figcaption data-description='由於 RICOH Theta S 360 全景相機具備兩鏡頭，所以可以產出一張由兩顆鏡頭組成的 360度的相片，照片是以水平呈現。'>360 度的相片原始檔</figcaption>
    </figure>
    <figure href='http://360.ioa.tw/b21470101e21cb202b8563a7a9e034b8'>
      <img alt="360 度全景相片播放器呈現的方式 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '02.png');?>" />
      <figcaption data-description='使用 360 度全景相片播放器呈現的方式，此方式對於瀏覽操作流程上較為方便與美觀。'>360 度全景相片播放器呈現的方式</figcaption>
    </figure>
  </div>
</div>

<br/>
<br/>
<br/>
<p><b>前端</b> 既然要在網頁前端呈現球狀的方式，那就利用一些 library 實作，專案內我參考了 <a href='https://github.com/shokai/theta-viewer.js' target='_blank'><b>theta-viewer.js</b></a>，細看 theta-viewer.js 的內容可以發現裡面有著三個主要物件，分別是 <b>async.js</b>、<b>three.js</b>、<b>OrbitControls.js</b>，而我只是將它進一步的使用與改造而已，例如: 可以取得轉向後的座標存進資料庫.. 等。還有一項功能較為特殊，主要是利用 JavaScript 的 <a href='https://developer.mozilla.org/en-US/docs/Web/API/Document/execCommand' target='_blank'>document.execCommand</a> 來執行觸發剪貼簿的功能，用 JavaScript 直接將複製的網址存入剪貼簿內，如此一來就不用再按滑鼠右鍵。</p>

<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ('theta-s-360' . EXTENSION . '#&gid=2&pid=1&id=0');?>'>
      <img alt="GPS 資訊與地提 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '05.jpg');?>" />
      <figcaption data-description='Theta S 本身有 GPS 內建定位功能，所以在上傳時候可以使用 php 去讀取 exif 的經緯度資料，並一起新增於資料庫內，前端輸出再搭配 Google Maps 即可做出此相簿地圖的功能。'>GPS 資訊與地提</figcaption>
    </figure>
    <figure href='<?php echo base_url ('theta-s-360' . EXTENSION . '#&gid=2&pid=2&id=0');?>'>
      <img alt="複製網址功能 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '06.jpg');?>" />
      <figcaption data-description='此功能較為特殊，主要利用 JavaScript 的 document.execCommand 來執行觸發剪貼簿的功能，用 JavaScript 直接將複製的網址存入剪貼簿內，如此一來就不用再按滑鼠右鍵。'>複製網址功能</figcaption>
    </figure>
  </div>
</div>

<br/>
<br/>
<br/>
<p><b>後端</b> 的部分，其框架使用個人的 framework <a href='http://www.ioa.tw/oaci.html' target='_blank'>OACI</a>，也就是 OA's CodeIgniter 實作，功能主要就是 <b>登入</b>、<b>上傳</b>、<b>縮圖</b>，比較特別的是因為 360 圖檔較大，所以這次也使用 <a href='https://aws.amazon.com/tw/s3/' target='_blank'>AWS S3</a> 作為儲存空間！登入(目前尚未開放註冊)後，即可使用上傳功能將 360 度相片上傳，網頁是 RWD 設計，所以在上傳 360 度相片的流程上也不會是問題。登入後還可瀏覽尚未公開的 360 度相片，雖然未公開，但使用者可以將網址分享給朋友，由於網址 token 使用 <a href='https://zh.wikipedia.org/wiki/MD5' target='_blank'>MD5</a> 編碼過，所以只有知道網址的人才可以瀏覽。Theta S 本身有 GPS 內建定位功能，所以在上傳時候可以使用 php 去讀取 exif 的經緯度資料，並一起新增於資料庫內，前端輸出再搭配 Google Maps 即可做出此相簿地圖的功能。</p>


<div class='pics'>
  <div class='pictures n3'>
    <figure href='<?php echo base_url ('theta-s-360' . EXTENSION . '#&gid=3&pid=1&id=0');?>'>
      <img alt="上傳 360 照片 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '03.jpg');?>" />
      <figcaption data-description='登入(目前尚未開放註冊)後，即可使用上傳功能，將 360 度相片上傳。'>上傳 360 照片</figcaption>
    </figure>
    <figure href='<?php echo base_url ('theta-s-360' . EXTENSION . '#&gid=3&pid=2&id=0');?>'>
      <img alt="手機上傳 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '07.jpg');?>" />
      <figcaption data-description='由於網頁也製作成手機相容的 RWD 設計，所以在上傳 360 度相片的流程上也不會是問題。'>手機上傳</figcaption>
    </figure>
    <figure href='<?php echo base_url ('theta-s-360' . EXTENSION . '#&gid=3&pid=3&id=0');?>'>
      <img alt="隱藏相片功能 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '04.jpg');?>" />
      <figcaption data-description='登入後可以瀏覽尚未公開的 360 度相片，雖然未公開，但使用者可以將網址分享給朋友，由於網址 token 使用 MD5 編碼過，所以只有知道該照片網址的人才可以瀏覽。'>隱藏相片功能</figcaption>
    </figure>
  </div>
</div>

<br/>
<br/>
<br/>
<p><b>壓縮圖檔</b> 主要是因為檔案大怕前端傳輸太久，所以這次加入 <a href='https://tinypng.com/' target='_blank'>TinyPNG</a> 作為壓縮圖片的方式，以減少圖片大小，提升傳輸速度以及成本，原本用 <a href='https://compressor.io/' target='_blank'>https://compressor.io/</a> 但是處理時間花太久了，所以就先不慘用。</p>
<p>這作品我故意分成兩個架構實作，在 GitHub 上分別是 <b>360</b>、<b>ThetaS</b> 兩包專案，基本上 <a href='http://360.ioa.tw/' target='_blank'>360</a> 是一包前後端寫在一起的專案，而 <a href='http://comdan66.github.io/ThetaS/index.html' target='_blank'>ThetaS</a> 則是純前端的架構，ThetaS 藉由 360 專案提供的 api 所實作的網站，而 360 則是架設在 AWS EC2 上面，ThetaS 則是架構在 <a href='https://pages.github.com/' target='_blank'>GitHub.io</a> 的服務上，會這樣拆開的原因主要是因為想練習前後端分離的架構模式，另一方面則是藉由 GitHub.io 的服務減低 AWS EC2 的負擔。</p>
