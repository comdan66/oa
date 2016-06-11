<p>以下來說明下關於<a href='http://www.zeusdesign.com.tw/' target='_blank'>宙思設計</a>官網的架設開發經驗，其實這個網站分兩期改變，第一期<a href='https://github.com/comdan66/zeus' target='_blank'>網站</a>在 2015年 1月 31日 實作，當時是架設在<a href='https://host.com.tw/' target='_blank'>遠振資訊</a>的主機代管服務，php 架構框架使用 <a href='https://codeigniter.org.tw/' target='_blank'>CodeIgniter</a> <a href='https://codeigniter.org.tw/downloads/file/CodeIgniter_2.1.4' target='_blank'>v2.1.4</a>，但跟團隊討論後在 2016年 1月 11日開始我們將系統移植上 <a href='https://aws.amazon.com/tw/ec2/' target='_blank'>AWS Ec2</a> 上，主要是考慮到日後官網作品展示區會有<b>大量的圖片上傳</b>的需求，這同時也意味著圖片流量將會是一項重點，所以才進階考量到使用 <a href='https://aws.amazon.com/tw/s3/pricing/' target='_blank'>AWS S3</a> 的服務！</p>

<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="後台上稿系統 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '01.jpg');?>" />
      <figcaption data-description='後台上稿系統'>後台上稿系統</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="使用 AWS S3 服務 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '02.jpg');?>" />
      <figcaption data-description='使用 AWS S3 服務'>使用 AWS S3 服務</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>而後台上稿系統也重新的設計，主要沿用了<a href='<?php echo base_url ('mazu' . EXTENSION);?>' target='_blank'>北港迎媽祖</a>的網站後台 Layout，前台各頁面的版型也重新架構，使用 <a href='<?php echo base_url ('oaci' . EXTENSION);?>' target='_blank'>OACI</a> <a href='https://github.com/comdan66/oaci/tree/version/4.0' target='_blank'>version 4.0</a> 當 php Framework，在前端刻板上不僅可以配合測試環境，也能在上 production 時可以有不同的效能控制，由於 OACI 上已經是搭配使用 <a href='http://compass-style.org/' target='_blank'>Compass</a>，所以在管理版型亦是輕鬆許多。後台是使用 Facebook 登入以減少人員忘記密碼等問題，架設速度上快速許多，而在後台上也有人員管理系統，以方便團隊內的人員管理！</p>

<div class='pics'>
  <div class='pictures n3'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="網站知識文章分享 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '05.jpg');?>" />
      <figcaption data-description='網站知識文章分享'>網站知識文章分享</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="響應式設計 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '03.jpg');?>" />
      <figcaption data-description='響應式設計加強 Google SEO，同時方便手機用戶的瀏覽'>響應式設計</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="Google SEO 成效 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '04.jpg');?>" />
      <figcaption data-description='經過第二期的開發與調整，其實有很多不錯的顯著效果，尤其在 Google SEO 以及關鍵字等，都有明顯的成效！'>Google SEO 成效</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>宙思設計在第二期的網站規會上更加入了<a href='http://www.zeusdesign.com.tw/articles' target='_blank'>文章功能</a>，主要是未來會分享多樣的資訊文章，而文章多會以原創為主，而類型則無固定範圍拘束，從資訊開箱文到網站架設心得、網頁知識文章都會有，目的則以分享為前提概念，希望能讓顧客在發案同時也能對業界內相關知識可以進一步了解！</p>
<p>宙思官網版型上則沿用第一期的設計框架，但是加強了<a href='http://www.ibest.tw/page01.php' target='_blank'>響應式網頁設計(RWD)</a>的相容性，以提高 <a href='http://www.ibest.tw/page04.php' target='_blank'>Google SEO</a>、手機閱讀率..等，再藉由<a href='https://www.facebook.com/ZeusDesignStudio/' target='_blank'>宙思粉絲頁</a>的管理，來達到更有效的分享設計相關文章與知識，二期還有另一項重點就是如何加強 <a href='https://zh.wikipedia.org/zh-tw/搜尋引擎最佳化' target='_blank'>SEO</a>，首先符合基本的 HTML 格式的規範，定期檢視 <a href='https://www.google.com/intl/zh-TW/analytics/' target='_blank'>Google Analytics</a> 外，也在 <a href='https://www.google.com/webmasters/tools/home?hl=zh-TW' target='_blank'>Google</a>、<a href='http://www.bing.com/toolbox/webmaster' target='_blank'>Bing</a>、<a href='https://developer.yahoo.com/yql/console/' target='_blank'>Yahoo</a> Search Console 上加入網站，以檢視每一個階段的搜索成效。</p>
