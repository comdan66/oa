<p>這個專案我主要協助製作 HTML、JavaScript、CSS 的撰寫，其中包含了版型、<a href='https://developers.google.com/maps/documentation/javascript/?hl=zh-tw' target='_blank'>Google Maps JavaScript API</a> 的串接，專案這次使用 Google 文件 的 <a href='https://www.google.com.tw/intl/zh-TW/docs/about/' target='_blank'>Google Sheets JavaScript API</a> 當作路徑的儲存的空間，如此一來流量就不會是問題。</p>
<p>而 GPS 訊號端則是使用 楊協達 先生所撰寫的 Android App 來取得每個點的位置，而 App 再使用 Sheets API POST 上去記錄每個點，如此一來 Google 文件上就可以紀錄著所有行經路線。接著前端 JavaScript 在使用 Sheets JavaScript API 去將文件上的資料以 Json 格式取下來，並且做陣列處理。</p>
<p><img width='800' alt='<?php echo $alt;?>' src='<?php echo img_url ('articles', 'haotien-gps', '02.jpg');?>' /><br/>▲ 使用 JavaScript 去取得 Google 文件上的路徑資訊</p>
<p><img width='800' alt='<?php echo $alt;?>' src='<?php echo img_url ('articles', 'haotien-gps', '01.jpg');?>' /><br/>▲ Google 文件上的路徑紀錄</p>
<p>此方法的好處就是可以不用架設資料庫，並且可以減少 <a href='https://zh.wikipedia.org/wiki/AJAX' target='_blank'>AJAX</a> 的 Request 量的衝擊，活動結束後更可以直接從 Google 文件上面取得活動路線紀錄！</p>
