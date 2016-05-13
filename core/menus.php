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
            'tags' => array ('中央氣象局', 'Google Maps', 'localStorage', 'MarkerWithLabel', 'RWD', 'Geocoding API', 'Static Maps API', 'Street View API', 'navigator.geolocation'),
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
                'file' => 'aaa',
                'text' => 'instagram_maps',
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
                'file' => 'aaa',
                'text' => '大庄媽 GPS',
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
                'file' => 'aaa',
                'text' => '六房媽祖 GPS',
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
                'file' => 'aaa',
                'text' => '大四 php 相簿',
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
                'file' => 'aaa',
                'text' => '大四 php 空間、部落格',
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
                'file' => 'x',
                'text' => 'flickr 搜尋器',
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
                'file' => 'x',
                'text' => 'u2 Youtube 播放器',
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
                'file' => 'x',
                'text' => '大四 jQuery Game',
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
          )),

      )),
    array ('group' => 'JavaScript 套件、工具開發', 'title' => '', 'items' => array (
        array ('type' => 'article', 'text' => 'mobileScrollView', 'file' => 'x'),
        array ('type' => 'article', 'text' => 'jQuery imgLiquid', 'file' => 'x'),
        array ('type' => 'article', 'text' => 'jQuery scrollSliderView', 'file' => 'x'),
        array ('type' => 'article', 'text' => 'jQuery navbar', 'file' => 'x'),
        
        array ('type' => 'more', 'text' => '更多 JavaScript 作品..', 'file' => 'x', 'sub' => array (
            array ('type' => 'article', 'text' => 'Google Maps Menu Tools', 'file' => 'x'),
            array ('type' => 'article', 'text' => '雙北市行政區域範圍座標', 'file' => 'x'),
          )),

      )),
    array ('group' => 'php 工具、框架開發', 'title' => '', 'items' => array (
        array ('type' => 'article', 'text' => 'ElasticaSearch', 'file' => 'x'),
        array ('type' => 'article', 'text' => 'OACI (OA\'s CodeIgniter)', 'file' => 'x'),
      )),
    array ('group' => 'css 框架開發', 'title' => '', 'items' => array (
        array ('type' => 'article', 'text' => 'material design', 'file' => 'x'),
      )),
    array ('group' => 'iOS 工具、app 開發', 'title' => '', 'items' => array (
        array ('type' => 'article', 'text' => 'Cat Map', 'file' => 'x'),
        array ('type' => 'article', 'text' => 'OAHUD', 'file' => 'x'),
      )),
    array ('group' => '獨立接案', 'title' => '', 'items' => array (
        array ('type' => 'article', 'text' => '宙思設計', 'file' => 'x'),
        array ('type' => 'article', 'text' => '嘉豪光學', 'file' => 'x'),
        
        array ('type' => 'more', 'text' => '更多獨立接案作品..', 'file' => 'x', 'sub' => array (
            array ('type' => 'article', 'text' => '奇拓', 'file' => 'x'),
            array ('type' => 'article', 'text' => '億進建築 BTO', 'file' => 'x'),
            array ('type' => 'article', 'text' => '寬堂空間設計', 'file' => 'x'),
            array ('type' => 'article', 'text' => 'OFNA', 'file' => 'x'),
            array ('type' => 'article', 'text' => '鉅臣 VG', 'file' => 'x'),
          )),
      )),
    array ('group' => 'Java 作品開發', 'title' => '', 'items' => array (
        array ('type' => 'article', 'text' => '大一 Java 小畫家', 'file' => 'x'),
        array ('type' => 'article', 'text' => '大二 Java MSN', 'file' => 'x'),
        array ('type' => 'article', 'text' => '大二 Java Assembler', 'file' => 'x'),
        array ('type' => 'article', 'text' => '大三 Java Plurker', 'file' => 'x'),
      )),
    array ('group' => '其他', 'title' => '', 'items' => array (
        array ('type' => 'article', 'text' => '大四 Arduino 新銳機器人大賽', 'file' => 'x'),
        array ('type' => 'article', 'text' => '風尚專案 STYLEWALL 多語系', 'file' => 'x'),
        array ('type' => 'article', 'text' => 'C語言 漫畫下載器', 'file' => 'x'),
      ))
  );