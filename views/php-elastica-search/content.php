<p>主要功能是經由各種 <b>類別方法(static)</b>，對 ElasticaSearch 實作 新增、查詢、修改、刪除 的操作，並且將查詢出來的每一筆資料，再將其封裝成物件單位，每筆物件皆可繼承基礎的 修改、刪除 的實體方法，更可以對分別不同 Type 做出不同的類別(Class)，方便於物件化思維的設計。</p>

<p>以下是基本的說明：</p>
<ul>
  <li>這是一套架構於 <a href='https://github.com/ruflin/Elastica' target='_blank'>Elastica Library</a> 所開發的工具，進階方便使用物件操作 ElasticaSearch 資料讀取。</li>
  <li>經由各種類別方法(static)，對 Elastica Search 實作 <a href='http://works.ioa.tw/OA-ElasticaSearch/guide/create.html' target='_blank'>新增</a>、<a href='http://works.ioa.tw/OA-ElasticaSearch/guide/read.html' target='_blank'>查詢</a>、<a href='http://works.ioa.tw/OA-ElasticaSearch/guide/update.html' target='_blank'>修改</a>、<a href='http://works.ioa.tw/OA-ElasticaSearch/guide/delete.html' target='_blank'>刪除</a> 的操作。</li>
  <li>查詢出來的每一筆資料，再將其封裝成物件單位，方便於物件化思維的設計。</li>
  <li>每筆物件皆可繼承基礎的 修改、刪除 的 <b>實體方法</b>。</li>
  <li>分別對不同 Type 分類出不同的類別(Class)。</li>
  <li>使用前要先引入 <span class='path'>demo/Elastica/ElasticaSearch.php</span> 檔案後即可使用。</li>
  <li>CRUD 範例，將會以 Type User 作為範例說明，詳細結構可以查閱 <a href='http://works.ioa.tw/OA-ElasticaSearch/guide/struct.html' target='_blank'>結構說明</a>。</li>
  <li>後端 PHP 語言範例可以查閱檔案 <span class='path'>demo/index.php</span>。</li>
  <li>相關 Elastica Search 語法可以查閱 <a href='https://www.elastic.co/' target='_blank'>https://www.elastic.co/</a>。</li>
</ul>