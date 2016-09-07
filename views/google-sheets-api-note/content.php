<p>其實要把 Google 試算表變成 API 來使用並不困難，只要做幾個設定，就可以將文件分享到網路上，甚至可以針對不同的工作表做讀取喔！以下以截圖舉例說明如何將試算表分享至網路。</p>
<p>首先建立好試算表後，選取左上角的"<b>檔案</b>"，然後接著選擇"<b>發佈到網路</b>"，此時會跳出讓你選擇發佈的類型，你可以針對是否要整份文件亦或者哪個工作表做發佈，若不知道怎麼設定的話，就直接選"<b>整份文件</b>"、"<b>網頁</b>"，然後"<b>發佈</b>"吧！</p>
<div class='pics'>
  <div class="pictures n3">
    <figure class="_i _p imgLiquid_bgSize imgLiquid_ready" href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="點擊左上角檔案 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '01.png');?>">
      <figcaption data-description="點擊左上角檔案進行設定此試算表。">點擊左上角檔案</figcaption>
    </figure>
    <figure class="_i _p imgLiquid_bgSize imgLiquid_ready" href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="發佈到網路 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '02.png');?>">
      <figcaption data-description="點擊發佈到網路。">發佈到網路</figcaption>
    </figure>
    <figure class="_i _p imgLiquid_bgSize imgLiquid_ready" href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="發佈前設定 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '03.png');?>">
      <figcaption data-description="設定要發佈的工作表以及類型。">發佈前設定</figcaption>
    </figure>
  </div>
</div>
<br/>
<br/>
<br/>

<p>完成發佈後，會得到一串網址，基本上我們最需要的是檔案的 key，而 key 值就在那串網址之中，以下圖為例就是 <b>1SDK0D9UqZUpGt80BDaeC31_aTTACGthcH-KOImK42BA</b>，這串字串很重要，要取得文件內容都得靠它！</p>

<div class='pics'>
  <div class="pictures n1">
    <figure class="_i _p imgLiquid_bgSize imgLiquid_ready" href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="取得此試算表的 Key <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '05.png');?>">
      <figcaption data-description="完成發佈後，會得到一串網址，基本上我們最需要的是檔案的 key，而 key 值就在那串網址之中，這串字串很重要，要取得文件內容都得靠它！">取得此試算表的 Key</figcaption>
    </figure>
  </div>
</div>
<br/>
<br/>
<br/>

<p>接著我們舉例說明如何使用，基本網址樣式有兩種(參考<a href="https://developers.google.com/gdata/samples/spreadsheet_sample" target="_blank">此篇</a>)，分別如下：</p>
<ul>
  <li>https://spreadsheets.google.com/feeds/cells/{<span class="path">key</span>}/{<span class="path">sheet index</span>}/public/values</li>
  <li>https://spreadsheets.google.com/feeds/list/{<span class="path">key</span>}/{<span class="path">sheet index</span>}/public/values</li>
</ul>
<br/>

<p>{key} 就是帶入剛剛提到的 key 值，而 {sheet index} 就是想取得哪一張工作表的序，若是第一張帶入 1，第二張則是 2，以此類推。另外再回傳格式的部分，預設值是 xml，若是想使用 json 的話，可以加入 <b class="path">?alt=json</b> 的參數喔！</p>
<p>下圖是針對 <a href="https://docs.google.com/spreadsheets/d/1SDK0D9UqZUpGt80BDaeC31_aTTACGthcH-KOImK42BA/edit?usp=sharing" target="_blank">此張試算表</a> 使用 <a href="https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop" target="_blank">Postman</a> 試著模擬呼叫第一張工作表的回傳結果，而結果會在回傳值得 <b>feed.entry</b> 內，格式分別就是 cells 與 list 的不同差異，下列是使用 cells 的回傳結果，其 API 網址為： <a href="https://spreadsheets.google.com/feeds/cells/1SDK0D9UqZUpGt80BDaeC31_aTTACGthcH-KOImK42BA/1/public/values?alt=json" target="_blank">https://spreadsheets.google.com/feeds/cells/1SDK0D9UqZUpGt80BDaeC31_aTTACGthcH-KOImK42BA/1/public/values?alt=json</a></p>

<div class='pics'>
  <div class="pictures n3">
    <figure class="_i _p imgLiquid_bgSize imgLiquid_ready" href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="試算表內容 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '06.png');?>">
      <figcaption data-description="此網站的試算表內容。">試算表內容</figcaption>
    </figure>
    <figure class="_i _p imgLiquid_bgSize imgLiquid_ready" href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="以 Postman 呼叫完後的結果 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '07.png');?>">
      <figcaption data-description="以 Postman 呼叫完後的 json 結果。">以 Postman 呼叫完後的結果</figcaption>
    </figure>
    <figure class="_i _p imgLiquid_bgSize imgLiquid_ready" href='<?php echo base_url ($current['file'] . EXTENSION);?>'>
      <img alt="取得相對應欄位值 <?php echo $alt;?>" src="<?php echo img_url ('views', $current['file'], '08.png');?>">
      <figcaption data-description="在使用 cells 方式回傳後，可以發現取得到對應表格的 row 與 col 的值。">取得相對應欄位值</figcaption>
    </figure>
  </div>
</div>
