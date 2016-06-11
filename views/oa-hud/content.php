
<div class='pics'>
  <div class='pictures n1'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="OAHUD 動畫 Demo <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '01.gif');?>" />
      <figcaption data-description='OAHUD 動畫 Demo'>OAHUD 動畫 Demo</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>簡略講解一下，首先我看了 <a href='https://github.com/jdg/MBProgressHUD' target='_blank'>MBProgressHUD</a> 的做法，其中的 showHUDAddedTo:(UIView *)view 讓我也模仿著做，於是我做了一個類似的 show，然後加在該 view 之下，一開始還做得很開心，不過當我用 TabBarController、NavigationController 時發現，只有中間的 view 區段被覆蓋，當中的 NavBar 跟 TabBar 都沒有被覆蓋到..於是我只好換個方向。</p>
<p>接著我 Google 到了這篇文章 <a href='http://nobodyyu.github.io/2015/05/04/make-HUD-by-your-self/' target='_blank'>http://nobodyyu.github.io/2015/05/04/make-HUD-by-your-self/</a>，我於似乎看到了關鍵字 window，所以接著開始研究 UIWindow，接著開始使用 UIWindow 然後加入 ViewController 實驗！</p>
<p>當中當然一直失敗啊，直到我看到了 <a href='https://github.com/DaidoujiChen/DaiInboxHUD' target='_blank'>DaiInboxHUD</a> 這個資源，恩..很多看不懂ＸＤ，不過今天下午還是抽空把它嗑了！因為這包 Code 我看到了很多用法，其中像是 objc/runtime.h、objc_setAssociatedObject、objc_getAssociatedObject 雖然我還沒有很熟，所以有使用錯誤的話請跟我說..裡面像是彈出的動畫，也參考了它！</p>

<div class='pics'>
  <div class='pictures n2'>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="預設的 OAHUD 樣式 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '02.jpg');?>" />
      <figcaption data-description='預設的 OAHUD 樣式'>預設的 OAHUD 樣式</figcaption>
    </figure>
    <figure href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="多樣的樣式設定 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '03.jpg');?>" />
      <figcaption data-description='多樣的樣式設定'>多樣的樣式設定</figcaption>
    </figure>
  </div>
</div>
<br />
<br />
<br />
<p>原本我打算找尋是否有像 css 中的 transition 搭配 cubic-bezier 的方法，但是一直沒找到..所以跳出的效果，所以我就暫時的學別人的方法使用大量的 animateWithDuration 以及 CGAffineTransformScale，不過看到這樣的寫法，讓我不禁回想起 jQuery 的 animate 搭配 callback 一起使用ＸＤ</p>
<p>不過使用起來沒有想像中的頓，於是先這樣使用啦！中間旋轉的部分是使用兩張 view，第一層的 view 加上 CAGradientLayer 的彩色圖層以及 CABasicAnimation 來達到選轉效果，然後第二層的 view 使用與底層一樣的顏色，並且縮小一點點將第一層蓋住，這樣就可以做出類似旋轉的彩色圈圈！</p>
