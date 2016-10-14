<p>若要進一步的查詢各精靈的精準數值的話，可以使用 PokeIV小助手 來協助管理、計算數值，PokeIV小助手 不僅可以查詢個體值(IV)外，還可以設定快速進化、估算進化值.. 等功能，PokeIV小助手 同時也修改了被官網軟鎖得疑慮，經不同演算法大大減低風險！</p>
<br/>
<br/>
<h2>實作說明</h2>
<ul>
  <li>使用 <a href='https://www.ptt.cc/bbs/PokeMon/index.html' target='_blank'>PTT PokeMon</a> 版文章 - <a href='https://www.ptt.cc/bbs/PokeMon/M.1470508630.A.DF6.html' target='_blank'>菜鳥致新手: CP、等級、IV、...</a> 提及的公式演算。</li>
  <li>CP 公式：(種族攻擊力 + 個體攻擊力) ×(種族防禦值 + 個體防禦值)^0.5 × (種族體力值 + 個體體力值)^0.5 × (等級換算值)^2 ÷ 10。</li>
  <li>由於網頁版不能知曉個體數值，故利用最小 0，與最大 15 計算。</li>
  <li>估算方式是藉由比率計算，故等級換算值會被互相約分除去，所以有無等級換算值不影響結果。</li>
  <li>因不知道個體數值，所以只能推算大約結果，而數值也僅供參考喔！不過藉由我自己實測結果，都有落在範圍值內。</li>
  <li>範圍公式：(進化前CP * 進化前最小CP) / 進化前最小CP 與 (進化前CP * 進化前最大CP) / 進化前最大CP。</li>
  <li><a href='http://works.ioa.tw/evolution/maps.html' target='_blank'>巢穴地圖</a> 是使用各位網友回報的數據實作的，所以不是 100% 會出現的，一切僅供參考。</li>
  <li><a href='http://works.ioa.tw/evolution/maps.html' target='_blank'>巢穴地圖</a> 的數據目前放置在 <a href='https://docs.google.com/spreadsheets/d/1fMYgcbQV0haZcoKTdUYZaoorKaFCl8cFIF0aD4KDpHM/edit#gid=0' target='_blank'>Google 文件</a> 上，藉由 Pokémon Go 同好玩家們共同編輯。</li>
  <li>若想共同編輯 <a href='https://docs.google.com/spreadsheets/d/1fMYgcbQV0haZcoKTdUYZaoorKaFCl8cFIF0aD4KDpHM/edit#gid=0' target='_blank'>巢穴地圖 Google 文件</a> 的話，歡迎與 <a href='http://www.ioa.tw/' target='_blank'>我</a> 聯絡，亦或者發 <a href='mailto:comdan66@gmail.com?subject=Pokémon Go 巢穴地圖&body=Hi OA,%0D%0A%0D%0A 我在您的 Go Evolution！網站！我想參與編輯，不知道您是否可以幫我加入權限..' target='_blank'>E-Mail</a> 給他！</li>
  <li>網頁上的查詢都是 HTML、JavaScript 前端檔案處理，所以後端並不會存取任何使用者的查詢資料喔！</li>
  <li><a href='http://works.ioa.tw/evolution/stops.html' target='_blank'>補給站、道館分佈地圖</a>，是我、小編們踏遍全台灣收集校正的！若是各位大大們想引用的話，請標註出處 <a href='http://works.ioa.tw/evolution/' target='_blank'>Go Evolution！</a></li>
</ul>
