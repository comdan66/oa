<figure>
  <a href='<?php echo $_np['c']['url'];?>'>
    <img alt='<?php echo $title . ' - ' . $_site_title;?>' src='<?php echo $_np['c']['og_img'];?>' />
  </a>
  <figcaption><?php echo $title . ' - ' . $_site_title;?></figcaption>
</figure>

<h2>
  <a href='<?php echo $_np['c']['url'];?>'><?php echo $_np['c']['text'];?> 實作心得</a>
  <div class="fb-like" data-href="<?php echo $_np['c']['url'];?>" data-send="false" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
</h2>

<div class='i'>
  <figure>
    <a href='<?php echo $_np['c']['url'];?>' target='_blank'>
      <img src='<?php echo avatar_url (MY_FB_UID);?>' />
    </a>
  </figure>
  <a href='<?php echo MY_FB_URL;?>' target='_blank'><?php echo MY_NAME;?></a><span>·</span>
  <time><?php echo date ('Y.m.d', strtotime (date ($created_at)));?></time><span>·</span>
  <time datetime='<?php echo $created_at;?>'><?php echo $created_at;?></time>
</div>

<article>

  <p>這是一項特別的作品，由於近幾年全景攝影器材的進步，所以全景影片、全景照片漸漸的流行起來，而最近剛好也入購了 <b>RICOH Theta S</b> 全景攝影機，所以我便實作了一下 <b>360度全景相簿</b>，這作品我特意分成兩個專案，分別是純前端、純後端的角度切入，所以在 GitHub 上會有兩包 code，以下會大略的說明！</p>

  <br/>
  <p><b>Live Demo</b>：<b><a href='http://360.ioa.tw/' target='_blank'>http://360.ioa.tw/</a></b></p>
  <br/>


  <p>由於 RICOH Theta S 360 全景相機具備兩鏡頭，所以可以產出一張由兩顆鏡頭組成的 360度的相片，照片是以水平呈現，所以瀏覽起來效果不佳。目前據我所知 RICOH Theta S 官網也有提供上傳瀏覽 <a href='https://theta360.com/s/ky0a4C1uh1JWl1Q56C8NZm3OO' target='_blank'>360度相片播放器</a>的功能，但當時官網的播放器是使用 <a href='https://get.adobe.com/tw/flashplayer/' target='_blank'>Flash</a> 來呈現的(目前好像改成使用 <a href='http://www.w3schools.com/html/html5_canvas.asp' target='_blank'>canvas</a>)，身為前端工程師的我，當然立馬想使用 <a href='https://zh.wikipedia.org/zh-tw/JavaScript' target='_blank'>JavaScript</a> 去實作 360度全景相片播放器！</p>
  
  <p><a class='n' href='http://360.ioa.tw/b21470101e21cb202b8563a7a9e034b8' target='_blank'><img alt='<?php echo $title . ' - ' . $_site_title;?>' src='<?php echo img_url ('articles', 'theta-s-360', '01.jpg');?>' /></a><br/>▲ 360度的相片原始檔</p>
  <br/>
  
  <p><a class='n' href='http://360.ioa.tw/b21470101e21cb202b8563a7a9e034b8' target='_blank'><img alt='<?php echo $title . ' - ' . $_site_title;?>' src='<?php echo img_url ('articles', 'theta-s-360', '02.png');?>' /></a><br/>▲ 360度全景相片播放器 呈現的方式</p>
  <br/>

  <p><b>前端</b> 既然要在網頁前端呈現球狀的方式，那就利用一些 library 實作，專案內我參考了 <a href='https://github.com/shokai/theta-viewer.js' target='_blank'><b>theta-viewer.js</b></a>，細看 theta-viewer.js 的內容可以發現裡面有著三個主要物件，分別是 <b>async.js</b>、<b>three.js</b>、<b>OrbitControls.js</b>，而我只是將它進一步的使用與改造而已，例如: 可以取得轉向後的座標存進資料庫.. 等。</p>

  <p><b>後端</b> 的部分，其框架使用個人的 framework <a href='http://www.ioa.tw/oaci.html' target='_blank'>OACI</a>，也就是 OA's CodeIgniter 實作，功能主要就是 <b>登入</b>、<b>上傳</b>、<b>縮圖</b>，比較特別的是因為 360 圖檔較大，所以這次也使用 <a href='https://aws.amazon.com/tw/s3/' target='_blank'>AWS S3</a> 作為儲存空間！</p>
  <p><b>壓縮圖檔</b> 主要是因為檔案大怕前端傳輸太久，所以這次加入 <a href='https://tinypng.com/' target='_blank'>TinyPNG</a> 作為壓縮圖片的方式，以減少圖片大小，提升傳輸速度以及成本，原本用 <a href='https://compressor.io/' target='_blank'>https://compressor.io/</a> 但是處理時間花太久了，所以就先不慘用。</p>
  <p>這作品我故意分成兩個架構實作，在 GitHub 上分別是 <b>360</b>、<b>ThetaS</b> 兩包專案，基本上 <a href='http://360.ioa.tw/' target='_blank'>360</a> 是一包前後端寫在一起的專案，而 <a href='http://comdan66.github.io/ThetaS/index.html' target='_blank'>ThetaS</a> 則是純前端的架構，ThetaS 藉由 360 專案提供的 api 所實作的網站，而 360 則是架設在 AWS EC2 上面，ThetaS 則是架構在 <a href='https://pages.github.com/' target='_blank'>GitHub.io</a> 的服務上，會這樣拆開的原因主要是因為想練習前後端分離的架構模式，另一方面則是藉由 GitHub.io 的服務減低 AWS EC2 的負擔。</p>

  <p>以上就是這次 <?php echo $title;?> 的開發心得如有任何問題<a href="mailto:<?php echo MY_MAIL;?>?subject=關於 iOA 的問題&body=Hi OA,%0D%0A%0D%0A    我在您的網站上看到有關於 <?php echo $_np['c']['text'];?> 的心得，以下是我的一些相關問題..">歡迎來信</a>討論。</p>

</article>

<ul>
  <li>
    <a href='http://360.ioa.tw/' target='_blank'>後端 Live Demo</a><span><a href='http://360.ioa.tw/' target='_blank'>http://360.ioa.tw/</a></span>
  </li>
  <li>
    <a href='https://github.com/comdan66/360' target='_blank'>後端 GitHub</a><span><a href='https://github.com/comdan66/360' target='_blank'>https://github.com/comdan66/360</a></span>
  </li>
  <li>
    <a href='http://comdan66.github.io/ThetaS/' target='_blank'>前端 Live Demo</a><span><a href='http://comdan66.github.io/ThetaS/' target='_blank'>http://comdan66.github.io/ThetaS/</a></span>
  </li>
  <li>
    <a href='https://github.com/comdan66/ThetaS' target='_blank'>前端 GitHub</a><span><a href='https://github.com/comdan66/ThetaS' target='_blank'>https://github.com/comdan66/ThetaS</a></span>
  </li>
  <li>
    <a href='https://www.ptt.cc/bbs/Soft_Job/M.1450408446.A.009.html' target='_blank'>PTT Soft_Job</a><span><a href='https://www.ptt.cc/bbs/Soft_Job/M.1450408446.A.009.html' target='_blank'>https://www.ptt.cc/bbs/Soft_Job/M.1450408446.A.009.html</a></span>
  </li>
  <li>
    <a href='https://www.facebook.com/groups/f2e.tw/permalink/919907694713263/' target='_blank'>Facebook Front-End Developers Taiwan</a><span><a href='https://www.facebook.com/groups/f2e.tw/permalink/919907694713263/' target='_blank'>https://www.facebook.com/groups/f2e.tw/permalink/919907694713263/</a></span>
  </li>
  <li>
    <a href='https://github.com/shokai/theta-viewer.js' target='_blank'>shokai/theta-viewer.js</a><span><a href='https://github.com/shokai/theta-viewer.js' target='_blank'>https://github.com/shokai/theta-viewer.js</a></span>
  </li>
</ul>
