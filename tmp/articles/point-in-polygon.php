<p><b>前端</b> 部分主要是 <a href='https://developers.google.com/maps/documentation/javascript/?hl=zh-tw' target='_blank'>Google Maps JavaScript API v3</a> 的地圖服務應用，利用 <a href='https://developers.google.com/maps/documentation/javascript/markers' target='_blank'>Google Maps Marker</a>、<a href='https://developers.google.com/maps/documentation/javascript/examples/polyline-simple?hl=zh-tw' target='_blank'>Google Maps Polyline</a> 去畫出一個不規則多邊形，並且利用 <a href='https://zh.wikipedia.org/wiki/AJAX' target='_blank'>Ajax</a> 去後端撈取範圍內的 Marker，當 Ajax 傳回後端之前，先將該多邊形角的座標點利用 <a href='https://developers.google.com/maps/documentation/javascript/reference' target='_blank'>Google Maps LatLngBounds</a> 物件計算出多邊形的範圍(<b>東北</b>-<b>西南</b>)座標，然後將範圍座標以及多邊形的角座標一併回傳給後端。</p>
<p><b>後端</b> 部分則使用 CodeIgniter 最簡單的寫法，當接收到 Ajax 的 Request 之後，便開始撈資料。撈取資料的步驟拆成兩個步驟，首先利用<b>範圍座標</b>的東北-西南座標進 MySQL 撈出範圍內的點，此時的點是一個矩形範圍，所以需要再進入第二項的 filter 利用<b>公式</b>將多邊形外的點過濾掉，最後 Output 回去給前端即可。</p>
<p>此包專案使用原生 CodeIgniter 所撰寫，所以有基礎的 CodeIgniter framework know how 即可看懂。</p>
<ul>
  <li>前端 JavaScript 位置在：<span class='path'>assets/js/main.js</span></li>
  <li>後端 controller 位置在：<span class='path'>application/controllers/main.php</span></li>
  <li>後端<b>撈出範圍座標</b>的作法：<span class='path'>application/models/marker_model.php</span></li>
  <li>後端<b>計算多邊形</b>範圍內的 function：<span class='path'>application/helpers/main_helper.php</span></li>
</ul>
