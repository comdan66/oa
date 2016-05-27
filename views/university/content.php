
<article class='profile2'>
  <header>
    <h2>淡江大學 - 資訊工程時期</h2>
    <p>程式魂 &bull; 覺醒</p>
  </header>

  <section class='a'>
    <p>高中是就讀普通高中，所以對電腦的知識也僅有電腦課所學習到的基礎，在進入了大學後才正式學習的程式語言，而當時搭配基礎程式教學的工具則是<b>C語言</b>，我認為 C 對我日後學習程式來說的一項重要的基石，也因為 C 的指標、串列，對於電腦記憶體的管控有了初步的認識。</p>
    <p>因為高等程式語言課程，我選修了 <b>Java</b>，幸好有 C 的資料結構基礎，對於 Java <b>物件導向</b>的觀念銜接上相對順利；Java 是我大學愛用的程式語言，主要因為可以使用 <a href='https://zh.wikipedia.org/zh-cn/Graphical_user_interface' target='_blank'>Graphical User Interface(GUI)</a> 的介面設計，所以展現出來的畫面可以更加豐富，當時也是著做出多樣性的作品，如：<a href='<?php echo base_url ('freshman-java-painter' . EXTENSION);?>' target='_blank'>Java 小畫家</a>、串接<a href='https://www.plurk.com/comdan66' target='_blank'>噗浪</a> API 的<a href='<?php echo base_url ('junior-java-plurker' . EXTENSION);?>' target='_blank'>應用程式</a>、使用 <a href='https://en.wikipedia.org/wiki/Network_socket' target='_blank'>Socket</a> 實作模擬 MSN 的<a href='<?php echo base_url ('sophomore-java-msn' . EXTENSION);?>' target='_blank'>通訊程式</a>、系統程式的 <a href='<?php echo base_url ('sophomore-java-assembler' . EXTENSION);?>' target='_blank'>Assembler</a>，這些都是利用 Java GUI 介面所設計的！</p>
    <p>資工系課程中當然不僅止於對軟體的專研，硬體方面也有需多必修課程，舉凡數位邏輯導論、計算機概論，都是韌體的相關應用。在校期間參與校外比賽則是因專題研究的巧合下，我們利用 <a href='https://www.arduino.cc/' target='_blank'>Arduino</a> 以及相關 <a href='https://en.wikipedia.org/wiki/Sensor' target='_blank'>Sensor</a> 結合，以智慧腳踏車的概念參與全國<b>新銳展翅微電腦應用大賽</b>，雖然未拿到前三名，但也拿到了<b>佳作</b>的成績！</p>
  </section>
</article>

<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ('junior-java-plurker' . EXTENSION);?>'>
      <img alt="Java 噗浪 GUI 程式 - <?php echo $site_title;?>" src="<?php echo img_url ('articles', 'index', 'java-plurker.jpg');?>" />
      <figcaption data-description='此作品是當年大三時期藉由噗浪官方提供的 API、SDK 所實作的 Java GUI 程式，實作一套結合噗浪微網誌的社群管理軟體。此次功能包含了軟體安裝、多角色登入、發訊息、回復、智慧回復機器人..等。'>Java 噗浪 GUI 程式</figcaption>
    </figure>
    <figure href='<?php echo base_url ('senior-arduino-micro-lit' . EXTENSION);?>'>
      <img alt="新銳展翅微電腦應用大賽 佳作 - Arduino 智慧腳踏車 - <?php echo $site_title;?>" src="<?php echo img_url ('articles', 'index', 'arduino-micro-lit.jpg');?>" />
      <figcaption data-description='大三專題中使用了 Arduino 以及多項 Sensor 組合出多項功能作品，主要架構是以 Arduino 與各個裝置互相溝通，溝通的方式使用 xbee 無線套件。作品功能大致上是借由不同 Arduino 所收集到的資訊並彙集並且提供給駕駛者車況等安全資訊，所以算是基本版的 智慧型腳踏車 實作。'>新銳展翅微電腦應用大賽 佳作 - Arduino 智慧腳踏車</figcaption>
    </figure>
  </div>
  <div class='pictures n3'>
    <figure href='<?php echo base_url ('sophomore-java-assembler' . EXTENSION);?>'>
      <img alt="Java 實作 Assembler SIC XE Literal - <?php echo $site_title;?>" src="<?php echo img_url ('articles', 'index', 'java-assembler_sic_xe_literal.jpg');?>" />
      <figcaption data-description='為系統程式課程實作 Assembler 組譯器，主功能是將 SIC XE Literal 的組合語言編譯成機械語言，借由實作這個轉換器的同時，更加的了解組合語言與機械語言間的關係與原理。當時會選擇使用 Java 是因為 GUI 介面更容易表現出理想的操作介面，更可以讓使用者更加方便轉換組合語言。'>Java 實作 Assembler 組譯器</figcaption>
    </figure>
    <figure href='<?php echo base_url ('freshman-java-painter' . EXTENSION);?>' >
      <img alt="Java 小畫家 - <?php echo $site_title;?>" src="<?php echo img_url ('articles', 'index', 'java-painter.jpg');?>" />
      <figcaption data-description='此項作品是大一下學期高等程式設計的學期作業，因為實作讓我對物件導向語言的 封裝、繼承、多型..等特性更加熟悉！有別於上學期的 C，Java 可以利用 GUI 介面實作出我理想中的作品，並且可以以封裝成 .jar 的方式與朋友分享。'>Java 小畫家</figcaption>
    </figure>
    <figure href='<?php echo base_url ('sophomore-java-msn' . EXTENSION);?>' >
      <img alt="Java MSN - <?php echo $site_title;?>" src="<?php echo img_url ('articles', 'index', 'java-msn.jpg');?>" />
      <figcaption data-description='因為學習 Java 語言而發現了有 UDT、TCP 通訊協定的 Socket 物件可以使用，所以就在利用 Java GUI 與 Socket 做了簡單結合，由基本的 Java Socket 實作伺服端、客戶端，藉由伺服器的角色幫助客服端建立連線而達到通訊的功能，並且模擬 p2p 的連線機制，以自定義簡單的格式來達到基本的溝通串流。'>Java MSN</figcaption>
    </figure>
  </div>
</div>

<article class='profile2'>
  <section class='a'>
    <p></p>
    
  </section>
</article>