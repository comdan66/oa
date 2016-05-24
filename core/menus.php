<?php 

return array (
    array ('group' => '基本資料', 'title' => '', 'items' => array (
        array (
            'type' => 'free',
            'text' => '關於 OA',
            'file' => 'index'
          ),
      )),
    array ('group' => '網頁<span>全端</span>作品', 'title' => '(php、JavaScript、MySQL、CSS)', 'items' => array (
        array (
            'type' => 'article',
            'file' => 'mazu',
            'text' => '北港迎媽祖',
            'keywords' => array ('北港迎媽祖'),
            'tags' => array ('Material Design', 'php7', 'Google Maps', 'TinyPNG', 'JSON-LD', 'Google AMP', 'schema'),
            'description' => '北港迎媽祖，這是個為我的家鄉的活動製作網站，幾本上是屬於義務性幫忙、非官方、沒盈利的自主服務。每年我都會在北港農曆三月十九迎媽祖前數個月開始製作，目前為止這網站我算是不斷自我突破吧！整體從 <b>設計</b>、<b>後端</b>、<b>系統</b>、<b>切版</b>、<b>攝影</b>、<b>上稿</b>，基本上都是我嘗試一個人完成！',
            'created_at' => '2016-04-25 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                 'Live Demo' => 'http://mazu.ioa.tw/',
                 'GitHub' => 'https://github.com/comdan66/mazu'
               ),
            'resources' => array (
                 'Live Demo' => 'http://mazu.ioa.tw/',
                 'GitHub' => 'https://github.com/comdan66/mazu',
                 'PTT Yunlin' => 'https://www.ptt.cc/bbs/Yunlin/M.1460567509.A.8BE.html',
                 'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1460607450.A.36A.html',
                 'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/980856278618404/'
               )
          ),
        array (
            'type' => 'article',
            'file' => 'theta-s-360',
            'text' => '全景相簿 Theta S 360',
            'keywords' => array ('Theta S 360', '全景', 'Stereographics Projection', 'Ricoh Theta s', 'Ricoh'),
            'tags' => array ('Theta S', 'AWS S3', 'TinyPNG'),
            'description' => '這是一項特別的作品，由於近幾年全景攝影器材的進步，所以全景影片、全景照片漸漸的流行起來，而最近剛好也入購了 <b>RICOH Theta S</b> 全景攝影機，所以我便實作了一下 <b>360度全景相簿</b>，這作品我特意分成兩個專案，分別是純前端、純後端的角度切入，所以在 GitHub 上會有兩包 code，以下會大略的說明！',
            'created_at' => '2015-11-30 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://360.ioa.tw/',
                'GitHub' => 'https://github.com/comdan66/360',
              ),
            'resources' => array (
                '後端 Live Demo' => 'http://360.ioa.tw/',
                '後端 GitHub' => 'https://github.com/comdan66/360',
                '前端 Live Demo' => 'http://comdan66.github.io/ThetaS/',
                '前端 GitHub' => 'https://github.com/comdan66/ThetaS',
                'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1450408446.A.009.html',
                'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/919907694713263/',
                'shokai/theta-viewer.js' => 'https://github.com/shokai/theta-viewer.js',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'weather-maps',
            'text' => 'Weather Maps 天氣地圖',
            'keywords' => array ('Weather Maps', '中央氣象局', 'Taiwan Weather', 'Weather', 'Google Maps'),
            'tags' => array ('中央氣象局', 'Google Maps', 'local Storage', 'MarkerWithLabel', 'RWD', 'Geocoding API', 'Static Maps API', 'Street View API', 'navigator.geolocation'),
            'description' => "這項做主要是藉由<a href='http://www.cwb.gov.tw/V7/index.htm' target='_blank'>中央氣象局</a>的網站資料建置出來的，其中主要功能是可以藉由 <a href='https://www.google.com.tw/maps' target='_blank'>Google Maps</a> 查詢各地方的天氣預報概況，並且可以查看各個地區的每小時溫度變化，以及搭配使用 <a href='http://www.w3schools.com/html/html5_webstorage.asp' target='_blank'>localStorage</a> 來實作前端關注的功能。此作品著要分成兩個系統面，這次將前端、後端分別拆開，所以在 <a href='https://github.com/comdan66' target='_blank'>GitHub</a> 上面的專案會有兩個！",
            'created_at' => '2015-7-10 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://comdan66.github.io/weather/index.html',
                'GitHub' => 'https://github.com/comdan66/weather',
              ),
            'resources' => array (
                '前端 Live Demo' => 'http://comdan66.github.io/weather/index.html',
                '前端 GitHub' => 'https://github.com/comdan66/weather',
                '後端 GitHub' => 'https://github.com/comdan66/weather_php',
                'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1438158895.A.071.html',
                'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/865165516854148/',
                '中央氣象局' => 'http://www.cwb.gov.tw/',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'point-in-polygon',
            'text' => 'Point in Polygon 範圍內取點',
            'keywords' => array ('point-in-polygon', '範圍內取點'),
            'tags' => array ('LatLngBounds', 'Google Maps Polyline', 'Ajax', 'CodeIgniter'),
            'description' => '這是項個人開發的工具，而且需要前後端配合一起弄的作品，主要目的是撈出藉由不規則多邊形範圍內的點座標。',
            'created_at' => '2015-11-26 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://polygon.ioa.tw/',
                'GitHub' => 'https://github.com/comdan66/point-in-polygon',
              ),
            'resources' => array (
                'Live Demo' => 'http://polygon.ioa.tw/',
                'GitHub' => 'https://github.com/comdan66/point-in-polygon',
                'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1448600173.A.F75.html',
                'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/912091015494931/',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'google-maps-richman',
            'text' => 'Google Maps 大富翁',
            'title' => 'Google Maps 大富翁',
            'keywords' => array ('Google Maps 大富翁', '大富翁', 'OA-richman', 'Google Maps Richman', 'Richman'),
            'tags' => array ('Google Maps', '大富翁'),
            'description' => '這是一個使用 Google Maps JavaScript API 製作的大富翁遊戲！基本上是利用 Google Maps Markers 以及 Polyline 所建置出路線、節點、角色、計分、蓋房... 等設計！',
            'created_at' => '2015-05-04 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-richman/',
                'GitHub' => 'https://github.com/comdan66/OA-richman',
              ),
            'resources' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-richman/',
                'GitHub' => 'https://github.com/comdan66/OA-richman',
                'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1431526940.A.7B1.html',
                'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/830618616975505/',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'javascript-maze-game',
            'text' => 'JavaScript 迷宮遊戲',
            'title' => 'JavaScript 迷宮遊戲',
            'keywords' => array ('JavaScript', '迷宮遊戲', 'JavaScript maze', 'maze', 'jQuery'),
            'tags' => array ('jQuery', '迷宮遊戲', '3D 視角', 'transform', 'rotateX', 'rotateY', 'translateZ', '老鼠走迷宮'),
            'description' => "此作品主要架構於 jQuery 之下實作，它不是一個前端 jQuery extend function，而是 based on jQuery 的前端<b>迷宮遊戲</b>，並且當使用智慧型手機瀏覽時，可支援使用<a href='https://zh.wikipedia.org/wiki/加速規' target='_blank'>重力感測器</a>(G-sensor)，所以可利用搖晃手機達到操作方向的簡單體感遊戲。",
            'created_at' => '2014-12-03 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-maze/',
                'GitHub' => 'https://github.com/comdan66/OA-maze',
              ),
            'resources' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-maze/',
                'GitHub' => 'https://github.com/comdan66/OA-maze',
              )
          ),

        array ('type' => 'more', 'text' => '更多全端作品..', 'file' => 'more-full-stack', 'sub' => array (
            array (
                'type' => 'article',
                'file' => 'github-blog',
                'text' => 'GitHub Blog',
                'keywords' => array ('GitHub.io', 'php', 'Markdown'),
                'tags' => array ('GitHub.io', 'php', 'Markdown', 'octopress', 'pelican', 'templates'),
                'description' => "使用 GitHub 架設個人 Blog 不僅可以節省伺服器空間，同時也可以使用 <a href='http://markdown.tw/' target='_blank'>Markdown</a> 語法做文章管理，坊間也有很多類似的工具 <a href='http://octopress.org/' target='_blank'>octopress</a>、<a href='http://www.pelican.com/' target='_blank'>pelican</a>，但是最後決定自己做一套使用 php、以及 command line 建置出個人的部落格！",
                'created_at' => '2014-12-16 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'http://comdan66.github.io/blog/',
                    'GitHub' => 'https://github.com/comdan66/blog',
                  ),
                'resources' => array (
                    'Live Demo' => 'http://comdan66.github.io/blog/',
                    'GitHub' => 'https://github.com/comdan66/blog',
                    'Youtube' => 'https://www.youtube.com/watch?v=pUBWKUEb7Do',
                    'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1419438051.A.B58.html',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'instagram-maps',
                'text' => 'Instagram Maps',
                'keywords' => array ('instagram', 'Google Maps', 'MarkerClusterer', 'MarkerWithLabel', 'LatLngBounds', 'AJAX'),
                'tags' => array ('instagram', 'Google Maps', 'MarkerClusterer', 'MarkerWithLabel', 'LatLngBounds'),
                'description' => "<a href='https://www.instagram.com/' target='_blank'>Instagram</a> App 當中有一項很特別的功能是我很喜愛的，就是地圖模式的瀏覽照片，而且 Instagram 將這項功能優化得不錯，使得當地圖縮小時，密集的 Marker 會合成一個 Marker，而這樣的地圖功能在 <a href='https://developers.google.com/maps/documentation/javascript/?hl=zh-tw' target='_blank'>Google Mpas JavaScript API</a> 上可以實作得到！",
                'created_at' => '2015-06-29 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'http://map.ioa.tw/',
                    'GitHub' => 'https://github.com/comdan66/OA-instagram_maps',
                  ),
                'resources' => array (
                    'Live Demo' => 'http://map.ioa.tw/',
                    'GitHub' => 'https://github.com/comdan66/OA-instagram_maps',
                    'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1435556584.A.709.html',
                    'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/853973294640037/',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'baishatun-gps',
                'text' => '白沙屯媽祖 GPS',
                'keywords' => array ('Google Maps', '白沙屯 GPS', '白沙屯媽祖 GPS', 'Heatmaps', 'AWS' , 'AWS EC2', 'AWS S3', 'GitHub.io'),
                'tags' => array ('Google Maps', 'Heatmaps', 'AWS' , 'AWS EC2', 'AWS S3', 'GitHub.io'),
                'description' => "白沙屯媽祖南下北港遶境 GPS 定位實作，是我目前 <a href='https://www.google.com/intl/zh-TW_tw/analytics/' target='_blank'>Google Analytics(GA)</a> <b>即時流量</b> 最高也是 Server Loading 最大的任務之一，實作過成功嘗試多樣的系統架構，以達成最低成本、最高效率的方式服務信徒。",
                'created_at' => '2016-03-15 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'GitHub' => 'https://github.com/comdan66/baishatun',
                  ),
                'resources' => array (
                    'GitHub' => 'https://github.com/comdan66/baishatun',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'haotien-gps',
                'text' => '大庄媽 GPS',
                'keywords' => array ('Google Maps', '大庄媽 GPS', '大庄媽', '台中浩天宮大庄媽', '浩天宮'),
                'tags' => array ('Google Maps', 'Google Sheets'),
                'description' => "大庄媽組南下北港進香的活動今年也特別的加入了 GPS 定位的功能，而這次協同開發的夥伴是大庄媽交流協會的 <a href='https://www.facebook.com/zachtoshiya' target='_blank'>楊協達</a> 先生，但與 <a href='" . base_url ('baishatun-gps' . EXTENSION) . "' target='_blank'>白沙屯 GPS</a> 的系統略有所不同！",
                'created_at' => '2016-04-12 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'http://www.haotien.org.tw/GPS/HaotienGPS.html',
                    'GitHub' => 'https://github.com/comdan66/haotien',
                  ),
                'resources' => array (
                    'Live Demo' => 'http://www.haotien.org.tw/GPS/HaotienGPS.html',
                    'GitHub' => 'https://github.com/comdan66/haotien',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'liu-fang-mazu-gps',
                'text' => '六房媽祖 GPS',
                'keywords' => array ('Google Maps', '六房媽 GPS', '六房媽'),
                'tags' => array ('Google Maps'),
                'description' => "雲林六房媽一年一度過爐活動今年也與我的 GPS 系統結合，六房媽在幾年前早已經有在做繞境定位，剛好有朋友介紹讓我與 <a href='http://www.godroad.tw/' target='_blank'>神之路關</a> 的開發團隊認識，所以這次的六房媽過爐活動就與 <a href='https://www.facebook.com/pozzyboy' target='_blank'>林啟元</a> 先生合作開發，首次與 <a href='http://aps.net/' target='_blank'>ASP.NET</a> 後端結合。",
                'created_at' => '2016-05-01 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'http://map.godroad.tw/E160522/',
                    'GitHub' => 'https://github.com/comdan66/LiuFangMazu',
                  ),
                'resources' => array (
                    'Live Demo' => 'http://map.godroad.tw/E160522/',
                    'GitHub' => 'https://github.com/comdan66/LiuFangMazu',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'senior-php-album',
                'text' => '大四 php 相簿',
                'keywords' => array ('php album', 'php', 'album'),
                'tags' => array ('php album', 'php', 'album'),
                'description' => "因為大三專題有接觸網頁設計，所以就利用課餘時間開發了簡單的一套相簿系統，這套系統是使用 php 版本 5.4 開發，內容包含基本的登入、上傳、編輯..等 Create、Read、Update、Delete(CRUD) 功能。",
                'created_at' => '2010-07-01 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'https://www.youtube.com/embed/uEcjUy66BCg',
                  ),
                'resources' => array (
                    'Live Demo' => 'https://www.youtube.com/embed/uEcjUy66BCg',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'senior-box-blog',
                'text' => '大四 php 空間、部落格',
                'keywords' => array ('CKEditor', '部落格', 'blog', 'Facebook', 'wretch', '無名小站', '社群'),
                'tags' => array ('CKEditor', 'blog'),
                'description' => "此作品是大四作品之一，因為製作了 <a href='" . base_url ('senior-php-album' . EXTENSION) . "' target='_blank'>相簿系統</a> 完後有了更多對於網站開發的心得，於是就馬上開啟了新專案，逐步的開發這個平台，這個作品主要是加強了相簿系統，加入了 上傳檔案、部落格文章、隱私權限、好友管理... 等社群功能。",
                'created_at' => '2011-04-01 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'https://www.youtube.com/embed/fuShyDjzrdw',
                  ),
                'resources' => array (
                    'Live Demo' => 'https://www.youtube.com/embed/fuShyDjzrdw',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'flickr-api-search',
                'text' => 'Flickr API 搜尋器',
                'keywords' => array ('Masonry', 'Flickr API'),
                'tags' => array ('Masonry', 'Flickr API'),
                'description' => '這是一個簡單快速搜尋 Flickr 的前端工具，借由輸入想搜尋的圖片關鍵字而撈取出 Flickr 上面的熱門照片！',
                'created_at' => '2015-01-28 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'http://comdan66.github.io/flickr/',
                    'GitHub' => 'https://github.com/comdan66/flickr',
                  ),
                'resources' => array (
                    'Live Demo' => 'http://comdan66.github.io/flickr/',
                    'GitHub' => 'https://github.com/comdan66/flickr',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'youtube-api-player',
                'text' => 'Youtube 播放器',
                'keywords' => array ('Youtube API', 'Local Storage'),
                'tags' => array ('Youtube API', 'Local Storage'),
                'description' => "此作品主要是練習 <a href='https://www.youtube.com/yt/dev/zh-TW/api-resources.html' target='_blank'>Youtube API</a> 的運用，主要功能是利用 API 來操作播放清單以及播放參數的設定。",
                'created_at' => '2014-12-29 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'http://comdan66.github.io/u2/',
                    'GitHub' => 'https://github.com/comdan66/u2',
                  ),
                'resources' => array (
                    'Live Demo' => 'http://comdan66.github.io/u2/',
                    'GitHub' => 'https://github.com/comdan66/u2',
                    'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1419871812.A.813.html',
                    'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/774027889301245/',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'senior-jquery-pokemon-game',
                'text' => '大四 jQuery Game',
                'keywords' => array ('jQuery', 'Nintendo', 'Pokémon'),
                'tags' => array ('jQuery'),
                'description' => '大學期間學習網頁開發過程中，總是會有一些有趣的靈感，而我總是喜歡使用我所會的語言工具，去將想法實現出來，而使用 jQuery 製作遊戲也是我的一項小小里程碑。',
                'created_at' => '2010-07-01 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'https://www.youtube.com/embed/9cPiXCAnA6E',
                  ),
                'resources' => array (
                    'Live Demo' => 'https://www.youtube.com/embed/9cPiXCAnA6E',
                  )
              ),
          )),

      )),
    array ('group' => 'JavaScript 套件、工具開發', 'title' => '', 'items' => array (
        array (
            'type' => 'article',
            'file' => 'mobile-scroll-view',
            'text' => 'Mobile Scroll View',
            'keywords' => array ('scroll-view', 'scroll view', 'imgLiquid', 'jQuery', 'jQuery-UI', 'jQuery.UI.Touch-Punch', 'jQuery Extend'),
            'tags' => array ('imgLiquid', 'jQuery', 'jQuery-UI', 'jQuery.UI.Touch-Punch'),
            'description' => "為了讓手機水平瀏覽圖片的操作更像 App 的介面，所以利用 JavaScript、<a href='https://jquery.com/' target='_blank'>jQuery</a>、<a href='https://jqueryui.com/' target='_blank'>jQuery-UI</a>、<a href='http://touchpunch.furf.com/' target='_blank'>jQuery.UI.Touch-Punch</a> 等套件，實作 Scroll View 的水平滑動效果。",
            'created_at' => '2016-03-14 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-mobileScrollView/',
                'GitHub' => 'https://github.com/comdan66/OA-mobileScrollView',
              ),
            'resources' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-mobileScrollView/',
                'GitHub' => 'https://github.com/comdan66/OA-mobileScrollView',
                'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1457948370.A.BE9.html',
                'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/960507037319995/',
              )),
        array (
            'type' => 'article',
            'file' => 'img-liquid',
            'text' => "OA's imgLiquid",
            'keywords' => array ('imgLiquid', 'position', 'absolute', 'jQuery', 'jQuery Extend'),
            'tags' => array ('jQuery', 'imgLiquid'),
            'description' => "imgLiquid 是一個處理前端圖片置中的 <a href='https://jquery.com/' target='_blank'>jQuery</a> Extend Function，其中參考了 <a href='https://github.com/karacas/imgLiquid' target='_blank'>imgLiquid</a>，但其架構與做法不大相同。",
            'created_at' => '2014-11-28 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-imgLiquid/',
                'GitHub' => 'https://github.com/comdan66/OA-imgLiquid',
              ),
            'resources' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-imgLiquid/',
                'GitHub' => 'https://github.com/comdan66/OA-imgLiquid',
              )),
        array (
            'type' => 'article',
            'file' => 'jquery-scroll-slider-view',
            'text' => "jQuery scrollSliderView",
            'keywords' => array ('scrollSliderView', 'Scroll', 'SliderView', 'View', 'jQuery', 'jQuery Extend'),
            'tags' => array ('jQuery', 'Scroll', 'scrollSliderView'),
            'description' => "scrollSliderView 這是一個前端 <a href='https://jquery.com/' target='_blank'>jQuery</a> Extend Function，主要架構於 jQuery，此版本是支援 <a href='http://www.ibest.tw/page01.php' target='_blank'>Responsive Web Design</a>(RWD) 的頁面。",
            'created_at' => '2014-12-01 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-scrollSliderView/',
                'GitHub' => 'https://github.com/comdan66/OA-scrollSliderView',
              ),
            'resources' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-scrollSliderView/',
                'GitHub' => 'https://github.com/comdan66/OA-scrollSliderView',
              )),
        array (
            'type' => 'article',
            'file' => 'jquery-navbar',
            'text' => "jQuery navbar",
            'keywords' => array ('navbar', 'jQuery', 'jQuery Extend'),
            'tags' => array ('jQuery', 'navbar'),
            'description' => "<p>這是一個前端 <a href='https://jquery.com/' target='_blank'>jQuery</a> Extend Function，主要架構於 jQuery 以及 scss、sass。開發者可自行設定 scss變數、jQuery Extend Options 來更換樣式。</p>",
            'created_at' => '2014-12-04 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-navbar/',
                'GitHub' => 'https://github.com/comdan66/OA-navbar',
              ),
            'resources' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-navbar/',
                'GitHub' => 'https://github.com/comdan66/OA-navbar',
              )),
        
        array ('type' => 'more', 'text' => '更多 JavaScript 作品..', 'file' => 'more-javascript', 'sub' => array (
            array (
                'type' => 'article',
                'file' => 'google-maps-menu',
                'text' => 'Google Maps Menu',
                'keywords' => array (),
                'tags' => array (),
                'description' => "",
                'created_at' => '2015-11-05 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'http://comdan66.github.io/OA-googleMapsMenu/index.html',
                    'GitHub' => 'https://github.com/comdan66/OA-googleMapsMenu',
                  ),
                'resources' => array (
                    'Live Demo' => 'http://comdan66.github.io/OA-googleMapsMenu/index.html',
                    'GitHub' => 'https://github.com/comdan66/OA-googleMapsMenu',
                    'Youtube' => '',
                    'PTT Soft_Job' => '',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'taipei-towns',
                'text' => '雙北市行政區域範圍座標',
                'keywords' => array (),
                'tags' => array (),
                'description' => "",
                'created_at' => '',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                  ),
                'resources' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                    'Youtube' => '',
                    'PTT Soft_Job' => '',
                  )
              ),
            )),
      )),
    array ('group' => 'php 工具、框架開發', 'title' => '', 'items' => array (
        array (
            'type' => 'article',
            'file' => 'php-elastica-search',
            'text' => 'ElasticaSearch',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'oaci',
            'text' => "OACI (OA's CodeIgniter)",
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
      )),
    array ('group' => 'css 框架開發', 'title' => '', 'items' => array (
        array (
            'type' => 'article',
            'file' => 'material-web-design',
            'text' => 'Material Design',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          )
      )),
    array ('group' => 'iOS 工具、app 開發', 'title' => '', 'items' => array (
        array (
            'type' => 'article',
            'file' => 'catmap',
            'text' => 'Cat Map',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'oa-hud',
            'text' => 'OAHUD',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          )
      )),
    array ('group' => '接案作品', 'title' => '', 'items' => array (
        array (
            'type' => 'article',
            'file' => 'zeusdesign',
            'text' => '宙思設計',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
        array ('type' => 'more', 'text' => '更多接案作品..', 'file' => 'more-works', 'sub' => array (
          array (
              'type' => 'article',
              'file' => 'hoga',
              'text' => '嘉豪光學',
              'keywords' => array (),
              'tags' => array (),
              'description' => "",
              'created_at' => '',
              'updated_at' => date ('Y-m-d H:i:s'),
              'main_links' => array (
                  'Live Demo' => '',
                  'GitHub' => '',
                ),
              'resources' => array (
                  'Live Demo' => '',
                  'GitHub' => '',
                  'Youtube' => '',
                  'PTT Soft_Job' => '',
                )
            ),
            array (
                'type' => 'article',
                'file' => 'chitorch',
                'text' => '奇拓',
                'keywords' => array (),
                'tags' => array (),
                'description' => "",
                'created_at' => '',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                  ),
                'resources' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                    'Youtube' => '',
                    'PTT Soft_Job' => '',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'bto',
                'text' => '億進建築 BTO',
                'keywords' => array (),
                'tags' => array (),
                'description' => "",
                'created_at' => '',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                  ),
                'resources' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                    'Youtube' => '',
                    'PTT Soft_Job' => '',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'harmonizedesign',
                'text' => '寬堂空間設計',
                'keywords' => array (),
                'tags' => array (),
                'description' => "",
                'created_at' => '',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                  ),
                'resources' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                    'Youtube' => '',
                    'PTT Soft_Job' => '',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'ofna',
                'text' => 'OFNA',
                'keywords' => array (),
                'tags' => array (),
                'description' => "",
                'created_at' => '',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                  ),
                'resources' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                    'Youtube' => '',
                    'PTT Soft_Job' => '',
                  )
              ),
            array (
                'type' => 'article',
                'file' => 'vg',
                'text' => '鉅臣 VG',
                'keywords' => array (),
                'tags' => array (),
                'description' => "",
                'created_at' => '',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                  ),
                'resources' => array (
                    'Live Demo' => '',
                    'GitHub' => '',
                    'Youtube' => '',
                    'PTT Soft_Job' => '',
                  )
              ),
          )),
      )),
    array ('group' => 'Java 作品開發', 'title' => '', 'items' => array (
        array (
            'type' => 'article',
            'file' => 'freshman-java-painter',
            'text' => '大一 Java 小畫家',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'sophomore-java-msn',
            'text' => '大二 Java MSN',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'sophomore-java-assembler',
            'text' => '大二 Java Assembler',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'junior-java-plurker',
            'text' => '大三 Java Plurker',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
      )),
    array ('group' => '其他', 'title' => '', 'items' => array (
        array (
            'type' => 'article',
            'file' => 'senior-arduino-micro-lit',
            'text' => '大四 Arduino 新銳展翅創意競賽',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'stylewall',
            'text' => '風尚專案 STYLEWALL 多語系',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
        array (
            'type' => 'article',
            'file' => 'c-comic-book',
            'text' => 'C語言 漫畫下載器',
            'keywords' => array (),
            'tags' => array (),
            'description' => "",
            'created_at' => '',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => '',
                'GitHub' => '',
              ),
            'resources' => array (
                'Live Demo' => '',
                'GitHub' => '',
                'Youtube' => '',
                'PTT Soft_Job' => '',
              )
          ),
      ))
  );