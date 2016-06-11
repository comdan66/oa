<p>此專案是常見的官網實作，主要由後台的上稿系統挑選完稿後，前台即可顯示所編輯的資料，而前端部分有常見的 Banner 輪播、資訊列表、聯絡我們功能！後端 php 框架是使用 <a href='<?php echo base_url ('oaci' . EXTENSION);?>' target='_blank'>OACI</a> <a href='https://github.com/comdan66/oaci/tree/version/1.7' target='_blank'>version 1.7</a> 所實作，前端則使用搭配框架上的 <a href='http://compass-style.org/' target='_blank'>Compass</a> 來編輯 <a href='http://sass-lang.com/' target='_blank'>scss</a>。</p>
<p>多國語系的設計是此專案的一項功能，而在網址上則是使用同一個 url，其作法是使用 <a href='https://en.wikipedia.org/wiki/Session_(web_analytics)' target='_blank'>Session</a>/<a href='https://en.wikipedia.org/wiki/HTTP_cookie' target='_blank'>Cookie</a> 來記錄所選擇的語系，當使用者選擇網頁上的語系時，則設定 Session/Cookie，當後端框架載入 Controller 時，再取出 Session/Cookie 決定語系，取得語系後再導入不同的 View 即可做到此效果。</p>