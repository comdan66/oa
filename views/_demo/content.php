<figure>
  <a href='<?php echo $current['url'];?>'>
    <img alt="<?php echo $current['text'] . ' - ' . $_site_title;?>" src='<?php echo $current['og_img'];?>' />
  </a>
  <figcaption><?php echo $current['text'] . ' - ' . $_site_title;?></figcaption>
</figure>

<h2>
  <a href='<?php echo $current['url'];?>'><?php echo $current['text'];?> 實作心得</a>
  <div class="fb-like" data-href="<?php echo $current['url'];?>" data-send="false" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
</h2>

<div class='i'>
  <figure>
    <a href='<?php echo $current['url'];?>' target='_blank'>
      <img src='<?php echo avatar_url (MY_FB_UID);?>' />
    </a>
  </figure>
  <a href='<?php echo MY_FB_URL;?>' target='_blank'><?php echo MY_NAME;?></a><span>·</span>
  <time><?php echo date ('Y.m.d', strtotime (date ($current['created_at'])));?></time><span>·</span>
  <time datetime='<?php echo $current['created_at'];?>'><?php echo $current['created_at'];?></time>
</div>

<article>

  <p><?php echo $current['description'];?></p>

  <br/>
    <ul>
    <?php foreach ($current['main_links'] as $text => $main_link) { ?>
            <li><b><?php echo $text;?></b>：<a href='<?php echo $main_link;?>' target='_blank'><b><?php echo $main_link;?></b></a></li>
    <?php }?>
    </ul>
  <br/>

<?php echo $_view; ?>

  <p>以上就是這次 <?php echo $current['text'];?> 的開發心得如有任何問題<a href="mailto:<?php echo MY_MAIL;?>?subject=關於 iOA 的問題&body=Hi OA,%0D%0A%0D%0A    我在您的網站上看到有關於 <?php echo $current['text'];?> 的心得，以下是我的一些相關問題..">歡迎來信</a>討論。</p>
</article>

<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ('junior-java-plurker' . EXTENSION);?>'>
      <img alt="Java 噗浪 GUI 程式 - <?php echo $_site_title;?>" src="<?php echo img_url ('views', 'index', 'java-plurker.jpg');?>" />
      <figcaption data-description='此作品是當年大三時期藉由噗浪官方提供的 API、SDK 所實作的 Java GUI 程式，實作一套結合噗浪微網誌的社群管理軟體。此次功能包含了軟體安裝、多角色登入、發訊息、回復、智慧回復機器人..等。'>Java 噗浪 GUI 程式</figcaption>
    </figure>
    <figure href='<?php echo base_url ('senior-arduino-micro-lit' . EXTENSION);?>'>
      <img alt="新銳展翅微電腦應用大賽 佳作 - Arduino 智慧腳踏車 - <?php echo $_site_title;?>" src="<?php echo img_url ('views', 'index', 'arduino-micro-lit.jpg');?>" />
      <figcaption data-description='大三專題中使用了 Arduino 以及多項 Sensor 組合出多項功能作品，主要架構是以 Arduino 與各個裝置互相溝通，溝通的方式使用 xbee 無線套件。作品功能大致上是借由不同 Arduino 所收集到的資訊並彙集並且提供給駕駛者車況等安全資訊，所以算是基本版的 智慧型腳踏車 實作。'>新銳展翅微電腦應用大賽 佳作 - Arduino 智慧腳踏車</figcaption>
    </figure>
  </div>
  <div class='pictures n3'>
    <figure href='<?php echo base_url ('sophomore-java-assembler' . EXTENSION);?>'>
      <img alt="Java 實作 Assembler SIC XE Literal - <?php echo $_site_title;?>" src="<?php echo img_url ('views', 'index', 'java-assembler_sic_xe_literal.jpg');?>" />
      <figcaption data-description='為系統程式課程實作 Assembler 組譯器，主功能是將 SIC XE Literal 的組合語言編譯成機械語言，借由實作這個轉換器的同時，更加的了解組合語言與機械語言間的關係與原理。當時會選擇使用 Java 是因為 GUI 介面更容易表現出理想的操作介面，更可以讓使用者更加方便轉換組合語言。'>Java 實作 Assembler 組譯器</figcaption>
    </figure>
    <figure href='<?php echo base_url ('freshman-java-painter' . EXTENSION);?>' >
      <img alt="Java 小畫家 - <?php echo $_site_title;?>" src="<?php echo img_url ('views', 'index', 'java-painter.jpg');?>" />
      <figcaption data-description='此項作品是大一下學期高等程式設計的學期作業，因為實作讓我對物件導向語言的 封裝、繼承、多型..等特性更加熟悉！有別於上學期的 C，Java 可以利用 GUI 介面實作出我理想中的作品，並且可以以封裝成 .jar 的方式與朋友分享。'>Java 小畫家</figcaption>
    </figure>
    <figure href='<?php echo base_url ('sophomore-java-msn' . EXTENSION);?>' >
      <img alt="Java MSN - <?php echo $_site_title;?>" src="<?php echo img_url ('views', 'index', 'java-msn.jpg');?>" />
      <figcaption data-description='因為學習 Java 語言而發現了有 UDT、TCP 通訊協定的 Socket 物件可以使用，所以就在利用 Java GUI 與 Socket 做了簡單結合，由基本的 Java Socket 實作伺服端、客戶端，藉由伺服器的角色幫助客服端建立連線而達到通訊的功能，並且模擬 p2p 的連線機制，以自定義簡單的格式來達到基本的溝通串流。'>Java MSN</figcaption>
    </figure>
  </div>
</div>

<div class='pics'>
  <div class='pictures n3'>
    <figure href='<?php echo base_url ('sophomore-java-assembler' . EXTENSION);?>'>
      <img alt="Java 實作 Assembler SIC XE Literal - <?php echo $_site_title;?>" src="<?php echo img_url ('views', 'index', 'java-assembler_sic_xe_literal.jpg');?>" />
      <figcaption data-description='為系統程式課程實作 Assembler 組譯器，主功能是將 SIC XE Literal 的組合語言編譯成機械語言，借由實作這個轉換器的同時，更加的了解組合語言與機械語言間的關係與原理。當時會選擇使用 Java 是因為 GUI 介面更容易表現出理想的操作介面，更可以讓使用者更加方便轉換組合語言。'>Java 實作 Assembler 組譯器</figcaption>
    </figure>
    <figure href='<?php echo base_url ('freshman-java-painter' . EXTENSION);?>' >
      <img alt="Java 小畫家 - <?php echo $_site_title;?>" src="<?php echo img_url ('views', 'index', 'java-painter.jpg');?>" />
      <figcaption data-description='此項作品是大一下學期高等程式設計的學期作業，因為實作讓我對物件導向語言的 封裝、繼承、多型..等特性更加熟悉！有別於上學期的 C，Java 可以利用 GUI 介面實作出我理想中的作品，並且可以以封裝成 .jar 的方式與朋友分享。'>Java 小畫家</figcaption>
    </figure>
    <figure href='<?php echo base_url ('sophomore-java-msn' . EXTENSION);?>' >
      <img alt="Java MSN - <?php echo $_site_title;?>" src="<?php echo img_url ('views', 'index', 'java-msn.jpg');?>" />
      <figcaption data-description='因為學習 Java 語言而發現了有 UDT、TCP 通訊協定的 Socket 物件可以使用，所以就在利用 Java GUI 與 Socket 做了簡單結合，由基本的 Java Socket 實作伺服端、客戶端，藉由伺服器的角色幫助客服端建立連線而達到通訊的功能，並且模擬 p2p 的連線機制，以自定義簡單的格式來達到基本的溝通串流。'>Java MSN</figcaption>
    </figure>
  </div>
</div>

<?php
  if ($current['resources']) { ?>
    <ul>
<?php foreach ($current['resources'] as $text => $resource) { ?>
        <li><a href='<?php echo $resource;?>' target='_blank'><?php echo $text;?></a><span><a href='<?php echo $resource;?>' target='_blank'><?php echo $resource;?></a></span></li>
<?php }?>
    </ul>
<?php
  }
  if (isset ($_np) && $_np && ((isset($_np['p']) && $_np['p']) || (isset($_np['n']) && $_np['n']))) { ?>
    <div id='_np'>
<?php foreach ($_np as $key => $value) {
        if (!(in_array ($key, array ('p', 'n')) && $value)) continue; ?>
        <figure class='<?php echo $key;?>'>
          <a href='<?php echo $value['url'];?>'>
            <img src='<?php echo $value['img'];?>' />
          </a>
          <figcaption><a href='<?php echo $value['url'];?>'><?php echo $value['text'];?></a></figcaption>
        </figure>
<?php }?>
    </div>
  <?php 
  }