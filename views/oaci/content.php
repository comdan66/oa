<p>這一套個人的 Framework 如入了多樣的資源參考，其中參考了 <a href='http://rubyonrails.org/' target='_blank'>Ruby on Rails</a> 的 <a href='https://rubygems.org/' target='_blank'>RubyGems</a> 相關工具，以及導入 <a href='<?php echo base_url ('php-elastica-search' . EXTENSION);?>' target='_blank'>OA's ElasticaSearch</a> 工具，並且與前端工具 <a href='http://compass-style.org/' target='_blank'>compass</a>、<a href='http://gulpjs.com/' target='_blank'>gulp</a> 做結合、加入多樣的常用函式，最重要的加入了 php 指令的管理，例如 Create、Delete、Migration.. 等管理指令。<a href='https://github.com/comdan66/oaci#常用指令' target='_blank'>GitHub</a> 上的 Readme 有初步的簡介這套 Framework 幾項主要功能，並且實作範例，讓使用者能順利了解。以下是 <a href='https://www.youtube.com' target='_blank'>Youtube</a> 簡單 Demo 初始化使用基本 CRUD 的流程：</p>
<p><iframe src="https://www.youtube.com/embed/svomGfqxZvg" frameborder="0" allowfullscreen></iframe><br/>▲ Youtube Demo 影片</p>

<br/>
<p>以下是目前幾項主要功能：</p>
<ul>
  <li>匯入並且使用 PHP ActiveRecord ORM，並且可以與 OrmUploader 搭配結合。</li>
  <li>匯入使用 OrmUploader 的 Library，此功能設計主要參考 Ruby on Rails 上 RubyGems 的 <a href='https://github.com/carrierwaveuploader/carrierwave' target='_blank'>carrierwave</a> 套件，可搭配 ORM 使用 ImageUplader、FileUploader 處理上傳表單，其中 ImageUplader 更可配合使用 ImageGdUtility、ImageImagickUtility 針對圖片做壓縮處理。</li>
  <li>匯入使用 <a href='http://redis.io/' target='_blank'>Redis</a> Cache Library。</li>
  <li>匯入使用 cell 的 Library，此功能主要參考 Ruby on Rails 上 RubyGems 的 <a href='https://github.com/apotonick/cells' target='_blank'>cells</a> 所設計，並且加強有層級結構關係、暫存快取機制、導入可使用 Redis Cache。</li>
  <li>加強 CodeIgniter 原生 Config 機制，讓原本取得 Config 做成快取並且將 File Cache 的 Folder 的重新定義向下延伸分類資料夾。</li>
  <li>匯入可記錄 Delay Request 的 Log 以及 ORM Query Log。</li>
  <li>匯入並且可使用 compass、scss、gulp。</li>
  <li>匯入 <a href='https://github.com/comdan66/OA-ElasticaSearch' target='_blank'>OA-ElasticaSearch</a> 加入 ElasticaSearch 的使用以及相關管理指令。</li>
</ul>