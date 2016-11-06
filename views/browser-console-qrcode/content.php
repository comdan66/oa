<p>這是個無聊靈機一動的小作！大家應該都有打開 Facebook 網頁的 Console 介面吧，這個是我自己實作的，所以分享一下！沒錯，就是來畫 Console，利用 console.log 印出字串，再利用 css 修飾一下，QR Code 的黑、白點則是使用 <a href='https://zh.wikipedia.org/zh-tw/JavaScript' target='_blank'>JavaScript</a> 二維陣列來表示！有興趣的話可以參考一下喲！要用的話，幫我按個 <a href='https://github.com/comdan66/browser_console_qrcode' target='_blank'>GitHub</a> <b>星星</b>後就拿去用吧！以下是步驟說明：</p>

<ul>
  <li>首先，請按<b>滑鼠右鍵</b>，選擇<b>檢視</b>再選擇 <b>Console</b> 吧！</li>
  <li>Mac Chrome 電腦鍵盤快捷鍵 <b>Cmd</b> + <b>Option</b> + <b>J</b> 打開！</li>
  <li>Windows、Linux Chrome 電腦鍵盤快捷鍵 <b>Ctrl</b> + <b>Shift</b> + <b>J</b> 打開！</li>
  <li>關鍵<a href='https://github.com/comdan66/browser_console_qrcode/blob/master/js/browser_console_qrcode.js' target='_blank'>程式碼</a>在 <span class='path'>js/browser_console_qrcode.js</span> 內，程式碼有簡易註解，請各位大大服用！</li>
  <li>主要先利用<b>二維陣列</b>表示 QR Code，以 1 代表黑點、0 代表白點，再轉換成要印出的字串。</li>
  <li>接著利用 JavaScript <a href='http://www.w3schools.com/jsref/jsref_eval.asp' target='_blank'>eval</a> 將組合出的 console.log 字串執行！</li>
  <li>GitHub 在<a href='https://github.com/comdan66/browser_console_qrcode' target='_blank'>這裡</a>，Demo 的話看<a href='https://works.ioa.tw/browser_console_qrcode/index.html' target='_blank'>這裡</a>，可以的話幫我按一下 <b>GitHub 星星</b>吧！</li>
  <li>主要利用 Console.log 的方式印出，其中使用基本 css 語法修飾。</li>
  <li>會使用 text-shadow 主要是要掩飾換行的<b>行距空白</b>，line-height 不能設太小，所以利用 text-shadow 掩飾空白處！</li>
  <li>因為 Safari 的 Console 對於空白的處理寬度不同，所以也需要對白點做 css 設定！</li>
  <li>若各位大大覺得有趣或不錯的話，請幫我在 <a href='https://github.com/comdan66/browser_console_qrcode' target='_blank'>GitHub</a> 上按個<b>喜歡</b>吧！</li>
  <li>相關參考：<a href='http://stackoverflow.com/questions/7505623/colors-in-javascript-console' target='_blank'>Colors in JavaScript console - stackoverflow</a></li>
</ul>

<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器 Console 上畫 QR Code！Painting QR Code on the browser Console." src="<?php echo img_url ('views', $current['file'], '04.png');?>" />
      <figcaption data-description='程式碼在 js/browser_console_qrcode.js 內，程式碼有簡易註解，主要利用 Console.log 的方式去印出，其中使用基本 css 語法修飾，會使用 text-shadow 主要是要掩飾換行的行距空白，line-height 不能設太小，所以利用 text-shadow 掩飾空白處！'>關鍵 JavaScript</figcaption>
    </figure>

    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器 Console 上畫 QR Code！Painting QR Code on the browser Console." src="<?php echo img_url ('views', $current['file'], '03.png');?>" />
      <figcaption data-description='瀏覽器 Console 介面內的 QR Code 樣式！'>Console 介面即可見 QR Code</figcaption>
    </figure>
  </div>
  
  <div class='pictures n3'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器 Console 上畫 QR Code！Painting QR Code on the browser Console." src="<?php echo img_url ('views', $current['file'], '01.png');?>" />
      <figcaption data-description='滑鼠按右鍵，開啟 “檢視” 後選擇 “Console”，即可看到 QR Code！'>滑鼠右鍵，選擇 檢視 選擇 Console</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器 Console 上畫 QR Code！Painting QR Code on the browser Console." src="<?php echo img_url ('views', $current['file'], '02.png');?>" />
      <figcaption data-description='若使用 Google Chrome 則可以使用 Chrome 快捷鍵，Mac Chrome 電腦鍵盤快捷鍵 Cmd + Option + j，Windows、Linux Chrome 電腦鍵盤快捷鍵 Ctrl + Shift + J'>Chrome 快捷鍵</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="瀏覽器 Console 上畫 QR Code！Painting QR Code on the browser Console." src="<?php echo img_url ('views', $current['file'], '05.png');?>" />
      <figcaption data-description='若各位大大覺得有趣或不錯的話，請幫我在 GitHub 上按個喜歡吧！若想引用的話，按喜歡後全部授權給你喲！'>快點星星！</figcaption>
    </figure>
  </div>
</div>