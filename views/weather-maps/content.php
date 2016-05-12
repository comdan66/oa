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

  <p>這項做主要是藉由<a href='http://www.cwb.gov.tw/V7/index.htm' target='_blank'>中央氣象局</a>的網站資料建置出來的，其中主要功能是可以藉由 <a href='https://www.google.com.tw/maps' target='_blank'>Google Maps</a> 查詢各地方的天氣預報概況，並且可以查看各個地區的每小時溫度變化，以及搭配使用 <a href='http://www.w3schools.com/html/html5_webstorage.asp' target='_blank'>localStorage</a> 來實作前端關注的功能。此作品著要分成兩個系統面，這次將前端、後端分別拆開，所以在 <a href='https://github.com/comdan66' target='_blank'>GitHub</a> 上面的專案會有兩個！</p>

  <br/>
  <p><b>Live Demo</b>：<b><a href='http://comdan66.github.io/weather/index.html' target='_blank'>http://comdan66.github.io/weather/index.html</a></b></p>
  <br/>



  <p>Weather Maps 天氣地圖基本上是藉由 <a href='https://developers.google.com/maps/documentation/javascript/?hl=zh-tw' target='_blank'>Google Maps JavaScript API v3</a> 的地圖服務，以及<a href='http://www.cwb.gov.tw/V7/index.htm' target='_blank'>中央氣象局網站</a>的天氣預報所實作的天氣地圖，再使用 <a href='http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerwithlabel/1.1.8/docs/examples.html' target='_blank'>MarkerWithLabel</a> Plugin 加強 Google Maps 上的圖像表現！然後全網站使用 <a href='http://www.ibest.tw/page01.php' target='_blank'>響應式網站設計(RWD)</a>，所以手機也可以正常瀏覽。</p>

  <p>而 Google API 也不只有使用 JavaScript，同時也使用了 <a href='https://developers.google.com/maps/documentation/geocoding/intro?hl=zh-tw' target='_blank'>Google Maps Geocoding API</a> 來將取得地圖位置，並且應用在搜尋功能上！以及使用 <a href='https://developers.google.com/maps/documentation/static-maps/?hl=zh-tw' target='_blank'>Static Maps API</a> 以及 <a href='https://developers.google.com/maps/documentation/streetview/?hl=zh-tw' target='_blank'>Street View Image API</a> 來擷取地圖上的街景靜態圖。</p>

  <p>比較特別的是，這次還使用了 <a href='http://www.w3schools.com/html/html5_webstorage.asp' target='_blank'>localStorage</a> 來記錄一些小細節，例如首頁的新增關注..等，以及使用 JavaScript 的 <a href='http://www.w3schools.com/html/html5_geolocation.asp' target='_blank'>navigator.geolocation</a> 物件來取得前端裝置的位置，並且應用在取得本地的一些資訊，例如：搜尋頁右上角的在地天氣小圖。</p>

  <p>其實還有很多地方要加強，例如：街景，目前取得街景的方式是我利用後端程式自動去取得的，沒有一個個的去檢查，所以可能會定點在奇怪的地方，這部分我會慢慢修正..等，之後也會將它加上更多有趣的應用，例如：颱風動態、年度報表.. 等。</p>

  <p>以上就是這次 <?php echo $title;?> 的開發心得如有任何問題<a href="mailto:<?php echo MY_MAIL;?>?subject=關於 iOA 的問題&body=Hi OA,%0D%0A%0D%0A    我在您的網站上看到有關於 <?php echo $_np['c']['text'];?> 的心得，以下是我的一些相關問題..">歡迎來信</a>討論。</p>

</article>

<ul>
  <li>
    <a href='http://comdan66.github.io/weather/index.html' target='_blank'>前端 Live Demo</a><span><a href='http://comdan66.github.io/weather/index.html' target='_blank'>http://comdan66.github.io/weather/index.html</a></span>
  </li>
  <li>
    <a href='https://github.com/comdan66/weather' target='_blank'>前端 GitHub</a><span><a href='https://github.com/comdan66/weather' target='_blank'>https://github.com/comdan66/weather</a></span>
  </li>
  <li>
    <a href='https://github.com/comdan66/weather_php' target='_blank'>後端 GitHub</a><span><a href='https://github.com/comdan66/weather_php' target='_blank'>https://github.com/comdan66/weather_php</a></span>
  </li>
  <li>
    <a href='https://www.ptt.cc/bbs/Soft_Job/M.1438158895.A.071.html' target='_blank'>PTT Soft_Job</a><span><a href='https://www.ptt.cc/bbs/Soft_Job/M.1438158895.A.071.html' target='_blank'>https://www.ptt.cc/bbs/Soft_Job/M.1438158895.A.071.html</a></span>
  </li>
  <li>
    <a href='https://www.facebook.com/groups/f2e.tw/permalink/865165516854148/' target='_blank'>Facebook Front-End Developers Taiwan</a><span><a href='https://www.facebook.com/groups/f2e.tw/permalink/865165516854148/' target='_blank'>https://www.facebook.com/groups/f2e.tw/permalink/865165516854148/</a></span>
  </li>
  <li>
    <a href='http://www.cwb.gov.tw/' target='_blank'>中央氣象局</a><span><a href='http://www.cwb.gov.tw/' target='_blank'>http://www.cwb.gov.tw/</a></span>
  </li>
</ul>
