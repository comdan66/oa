<p>基本的 Google Maps JavaScript API 的應用這邊就不多介紹了，這次的練習主要著重在 Firebase 的應用，藉由 Hosting 來取得 Https 的協定，然後在建立起專案，並且利用 Realtime Database 來實作即時性的功能。</p>

<div class='pics'>
  <div class='pictures n1'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="一起在地圖上聊天吧！ <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], 'demo.gif');?>" />
      <figcaption data-description='iveMaps 是一個即時地圖聊天室，讓你在世界上任何位置都可以發出自己的感想動態。'>一起在地圖上聊天吧！</figcaption>
    </figure>
  </div>
</div>
<br/>
<br/>
<br/>

<p>Firebase 的 Hosting 可以將自己的 <a href='https://zh.wikipedia.org/wiki/域名' target='_blank'>Domain</a> 用 CNAME、A 記錄指向過來，使得專案擁有自己客製化的 Domain/Sub Domain 並且是 Https 的協定，而 Hosting 功能在 Firebase 的操作上並不會太困難，只要依照其所顯示的步驟驗證完網域所有權後即可完成。Realtime Database 是項 Firebase 儲存資料的服務，他是以 <a href='http://www.json.org/' target='_blank'>JSON</a> 的方式，用 key-value 方式儲存，用過 <a href='http://tx.liberal.ntu.edu.tw/InfoMgt/Jx/IS_IM/NoSQL.htm' target='_blank'>NoSQL</a> 的朋友或許會比較適應這樣的 Database；因為儲存格式是 JSON 的關係，所以在一開始的設計就不能以<a href='https://zh.wikipedia.org/wiki/關聯式資料庫管理系統' target='_blank'>關聯式資料庫</a>的思維角度下去設計囉。</p>
<p>CRUD 的基本功能撰寫這邊也不做介紹，基本上<a href='https://firebase.google.com/docs/samples/?hl=zh-TW' target='_blank'>官網</a>都有範例以及說明囉，其中包含了 iOS、Android、JavaScript 的支援，所以更可以製作成 Mobile App，而下一階段我也將考量使用 iOS 來實作一次 LiveMaps。官方資源也不僅於 Sample，在官方 <a href='https://github.com/firebase/' target='_blank'>GitHub</a> 也可以看到多樣的 Library，其中常見的 <a href='https://github.com/firebase/firebaseui-web' target='_blank'>firebaseui-web</a>、<a href='https://github.com/firebase/?utf8=%E2%9C%93&query=geo' target='_blank'>GEO</a>.. 等，服務都是由官方維護的，所以在家接功能上會更加方便。</p>
<p>以網頁版來說，登入系統可以由 <a href='https://github.com/firebase/firebaseui-web' target='_blank'>firebaseui-web</a> 來串接，在地圖上更可以用 <a href='https://github.com/firebase/geofire-js' target='_blank'>geofire-js</a> 來實作，geofire 就有豐富的經緯度範圍運算，可以快速的撈出範圍內的點，不過對於 Database 的 JSON 格式架構就要符合其規範，第一版的 LiveMaps 就是使用 geofire 實作，但是因為功能需求，所以暫時先捨棄；而 firebaseui 提供了各種不同的 OAuth 登入，可以配合 Authentication 製作登入系統，不過在第二版製作時也暫時拿掉，主要是因為想加快登入時間問題，所以暫時只使用 <a href='https://www.facebook.com/' target='_blank'>Facebook</a> 的 SDK 實作 OAuth 登入。</p>
<p>網頁的定位方式，是採用 <a href='https://developer.mozilla.org/zh-TW/docs/Using_geolocation' target='_blank'>navigator.geolocation</a> 的 <a href='https://developer.mozilla.org/zh-TW/docs/Web/API/Geolocation/watchPosition' target='_blank'>watchPosition</a> 取得使用者瀏覽器裝置位置，因為 Firebase 提供了 Https 的服務，故在 <a href='https://www.google.com.tw/chrome/browser/desktop/' target='_blank'>Chrome</a> 瀏覽器上就可以取得使用者位置，而且使用了 watchPosition 並且搭配使用 enableHighAccuracy，所以取的的位置會較為精準，但也可能會有誤差值，故使用上可能會有使用者發生位置不正確的狀況，待下一版本解決。</p>