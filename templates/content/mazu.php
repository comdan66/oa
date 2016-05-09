<figure>
  <a href=''>
    <img alt='' src='https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/s2048x2048/13112921_1301235629889776_3834403946826605026_o.jpg' />
  </a>
  <figcaption></figcaption>
</figure>

<h2>
  <a href=''>北港迎媽祖 實作心得</a>
  <div class="fb-like" data-href="<?php echo base_url ('mazu');?>" data-send="false" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
</h2>

<div class='i'>
  <figure>
    <a href='' target='_blank'>
      <img src='https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/13112953_1301234786556527_5094798318877121663_o.jpg' />
    </a>
  </figure>
  <a href='' target='_blank'>吳政賢</a>
  <span>·</span>
  <time>2015.01.02</time>
  <span>·</span>
  <time datetime='2015-01-02 12:12:12'>2015-01-02 12:12:12</time>
</div>

<article>

<p>北港迎媽祖，這是個為我的家鄉的活動製作網站，幾本上是屬於義務性幫忙、非官方、沒盈利的自主服務(XD)。</p>

<p>這個主題的網站我每一年的製作，所以這網站我算是不斷自我突破(疑？)，整體從後端、系統、設計、切版、上稿，我嘗試一個人完成！</p>

<p>&nbsp;</p>
<p>Live Demo：<a href='http://mazu.ioa.tw/'>北港迎媽祖</a></p>
<p>&nbsp;</p>


<p>話題扯遠了，回到正題，這個網站我要分享的是設計、前端、後端以及系統部分，從設計開始，我參考了 <a href='https://www.google.com/design/spec/material-design/introduction.html'>Material Design</a>，所以設計就用 Material 的角度去設計版面以及流程！不過當然的，手機與網頁的表現還是會有些許的差異，但是整體我仍然盡量參考規範ＸＤ</p>


<p><b>後端</b> php 這次我就使用了很潮的 <a href='http://php.net/manual/en/migration70.new-features.php'>php7</a>，跑起來貌似有變快，因為我的爬蟲變快了，所以整體來說算是很滿意，不過 framework 在有些 function 的部分需要稍做調整，但大致上都很健康，當然頁順便將我的 <a href='http://www.ioa.tw/oaci.html'>OACI</a> 給更新到 php7 相容！</p>
<p><b>前端</b> JavaScript 這次主力都在 Google Maps API 的運用，三年前我就是將此 Google Mapd 與廟會遶境路線做了<a href='http://mazu.ioa.tw/maps/dintao'>結合</a>，所以開啟了我對 Google Maps 運用的熱愛，所以今年也是把他當主力，活動當天沒意外的話，我會結合 GPS 線上定位！</p>
<p><b>刻板</b> css 的部分，我則是使用 compass scss 去實作，javascript 的話則是使用 jQuery 以及一些其他的 lib 實作！</p>

<p><b>框架</b> 則因為前後端都自己包辦，所以原本的 CodeIgniter Framework 也做了一些修改，也就是 <a href='http://www.ioa.tw/oaci.html'>OACI</a>，加入了一些功能，將這些靜態 css、javascript 等靜態檔案，當 production 時，可以自動的 merge、minify、uglify 並且 push 到 AWS S3。</p>

</article>


<div class='np'>
  <figure class='p'>
    <a href=''>
      <img src='<?php echo site_url ('img', 'left', 'index.jpg');?>' />
    </a>
    <figcaption><a href=''>關於 OA</a></figcaption>
  </figure>

  <figure class='n'>
    <a href=''>
      <img src='' />
    </a>
    <figcaption><a href=''>sad</a></figcaption>
  </figure>
</div>