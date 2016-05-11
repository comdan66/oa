<figure>
  <a href='<?php echo base_url ($now);?>'>
    <img alt='<?php echo title ($title);?>' src='<?php echo image_url ('article', $now, 'banner.png');?>' />
  </a>
  <figcaption><?php echo title ($title);?></figcaption>
</figure>

<h2>
  <a href='<?php echo base_url ($now);?>'>Point in Polygon 範圍內取點 實作心得</a>
  <div class="fb-like" data-href="<?php echo base_url ($now);?>" data-send="false" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
</h2>

<div class='i'>
  <figure>
    <a href='<?php echo base_url ($now);?>' target='_blank'>
      <img src='<?php echo avatar_url ();?>' />
    </a>
  </figure>
  <a href='<?php echo FB_ARTICLE_AUTHOR;?>' target='_blank'>吳政賢</a><span>·</span>
  <time><?php echo date ('Y.m.d', strtotime (date ($created_at)));?></time><span>·</span>
  <time datetime='<?php echo date ('Y-m-d H:i:s', strtotime (date ($created_at)));?>'><?php echo date ('Y-m-d H:i:s', strtotime (date ($created_at)));?></time>
</div>

<article>

  <p>這是個我自己開發的工具，而且需要前後端配合一起弄的作品，主要目的是撈出藉由不規則多邊形範圍內的點座標。</p>

  <br/>
  <p><b>Live Demo</b>：<b><a href='http://polygon.ioa.tw/' target='_blank'>http://polygon.ioa.tw/</a></b></p>
  <br/>


  <p><b>前端</b> 部分主要是 <a href='https://developers.google.com/maps/documentation/javascript/?hl=zh-tw' target='_blank'>Google Maps JavaScript API v3</a> 的地圖服務應用，利用 <a href='https://developers.google.com/maps/documentation/javascript/markers' target='_blank'>Google Maps Marker</a>、<a href='https://developers.google.com/maps/documentation/javascript/examples/polyline-simple?hl=zh-tw' target='_blank'>Google Maps Polyline</a> 去畫出一個不規則多邊形，並且利用 <a href='https://zh.wikipedia.org/wiki/AJAX' target='_blank'>Ajax</a> 去後端撈取範圍內的 Marker，當 Ajax 傳回後端之前，先將該多邊形角的座標點利用 <a href='https://developers.google.com/maps/documentation/javascript/reference' target='_blank'>Google Maps LatLngBounds</a> 物件計算出多邊形的範圍(<b>東北</b>-<b>西南</b>)座標，然後將範圍座標以及多邊形的角座標一併回傳給後端。</p>

  <p><b>後端</b> 部分則使用 CodeIgniter 最簡單的寫法，當接收到 Ajax 的 Request 之後，便開始撈資料。撈取資料的步驟拆成兩個步驟，首先利用<b>範圍座標</b>的東北-西南座標進 MySQL 撈出範圍內的點，此時的點是一個矩形範圍，所以需要再進入第二項的 filter 利用<b>公式</b>將多邊形外的點過濾掉，最後 Output 回去給前端即可。</p>

  <p>此包專案使用原生 CodeIgniter 所撰寫，所以有基礎的 CodeIgniter framework know how 即可看懂。</p>
  <ul>
    <li>前端 JavaScript 位置在：<span class='path'>assets/js/main.js</span></li>
    <li>後端 controller 位置在：<span class='path'>application/controllers/main.php</span></li>
    <li>後端<b>撈出範圍座標</b>的作法：<span class='path'>application/models/marker_model.php</span></li>
    <li>後端<b>計算多邊形</b>範圍內的 function：<span class='path'>application/helpers/main_helper.php</span></li>
  </ul>

  <p>以上就是這次 <?php echo $title;?> 的開發心得如有任何問題<a href="mailto:comdan66@gmail.com?subject=關於 iOA 的問題&body=Hi OA,%0D%0A%0D%0A    我在您的網站上看到有關於 <?php echo $now;?> 的心得，以下是我的一些相關問題..">歡迎來信</a>討論。</p>

</article>

<ul>
  <li>
    <a href='http://polygon.ioa.tw/' target='_blank'>Live Demo</a><span><a href='http://polygon.ioa.tw/' target='_blank'>http://polygon.ioa.tw/</a></span>
  </li>
  <li>
    <a href='https://github.com/comdan66/point-in-polygon' target='_blank'>GitHub</a><span><a href='https://github.com/comdan66/point-in-polygon' target='_blank'>https://github.com/comdan66/point-in-polygon</a></span>
  </li>
  <li>
    <a href='https://www.ptt.cc/bbs/Soft_Job/M.1448600173.A.F75.html' target='_blank'>PTT Soft_Job</a><span><a href='https://www.ptt.cc/bbs/Soft_Job/M.1448600173.A.F75.html' target='_blank'>https://www.ptt.cc/bbs/Soft_Job/M.1448600173.A.F75.html</a></span>
  </li>
  <li>
    <a href='https://www.facebook.com/groups/f2e.tw/permalink/912091015494931/' target='_blank'>Facebook Front-End Developers Taiwan</a><span><a href='https://www.facebook.com/groups/f2e.tw/permalink/912091015494931/' target='_blank'>https://www.facebook.com/groups/f2e.tw/permalink/912091015494931/</a></span>
  </li>
</ul>

<?php 
  if (isset ($np) && $np && ((isset($np['p']) && $np['p']) || (isset($np['n']) && $np['n']))) { ?>
    <div id='_np'>
<?php foreach ($np as $key => $value) {
        if (!in_array ($key, array ('p', 'n'))) continue; ?>
        <figure class='<?php echo $key;?>'>
          <a href='<?php echo $value['href'];?>'>
            <img src='<?php echo $value['icon'];?>' />
          </a>
          <figcaption><a href='<?php echo $value['href'];?>'><?php echo $value['text'];?></a></figcaption>
        </figure>
<?php }?>
    </div>
  <?php 
  }