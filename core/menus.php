<?php 

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

include_once 'defines.php';
include_once 'functions.php';

return array (
    array ('group' => '基本資料', 'title' => '', 'items' => array (
        array (
            'type' => 'article',
            'text' => '關於 OA',
            'file' => 'index',
            'tabs' => array ('university')
          ),
        array ('type' => 'albums', 'text' => 'OA 的相簿', 'file' => 'albums', 'sub' => array (
            array (
                'type' => 'demo',
                'file' => '2016-beigang-mazu',
                'text' => '2016年 北港迎媽祖',
                'keywords' => array ('北港迎媽祖', '北港媽祖', '農曆三月十九', '北港', '朝天宮'),
                'tags' => array ('北港迎媽祖', '北港媽祖', '農曆三月十九'),
                'description' => "烘爐引炮驚奇火花驚震全場，輪廓描繪傳承力量、霓彩妝童延續風華，三聲起馬炮後，三鼓三哨聲的先鋒中壇開路啟；兩聲哨鼓的北港黃袍勇士也在砲火花中吞雲吐霧聞炮起舞；四小將鏘鏘響，門一開，青紅將軍開路展威風！還是一樣的開場詞！是的，又一年了！這個慶典對於北港人，就像如候鳥的季節，是一個返鄉的時刻；每年十九前一晚，小鎮內車子就漸漸的多了，辦桌的廚棚也滿在街道上。這是一個屬於北港囝仔的春節、北港人的過年！其實對於地方的熱情不僅僅是信仰，更還是一種習慣、參與感、責任感。還記得從國中時，自己去圖書館翻閱北港鎮地圖，拿著筆一筆一畫的將路關路線圖完成。高中時，拿著人生第一台的數位相機，記錄著每一年的活動，從起馬唱班到落馬唱班。如今終於可以用我所學的技能，來為我的故鄉做點什麼！十幾年過去了！不曾改變的習慣還依然繼續！不曾冷卻的期待也是依然澎湃！如果你不是北港人，但對傳統文化有著興趣與熱誠，推薦你來北港參與一次吧！你會看到的不僅是陣頭鞭炮，而是整個鎮上參與的感動！不多說了，要開始了！這個屬於全北港小鎮的盛會！出發，全鎮遶境去！！",
                'created_at' => '2016-05-07 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'pictures' => array (array ('name' => 'IMG_1504.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_1525.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_1526.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_1536.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_1537.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3144.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3154.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3301.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3307.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3312.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3320.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3323.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3335.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3336.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3340.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3408.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3433.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3437.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3441.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3462.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3463.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3505.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3510.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3526.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3534.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3563.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3569.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3584.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3604.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3622.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3652.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3653.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3665.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3790.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3791.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3796.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3812.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3817.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3818.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3857.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3858.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3859.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3863.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3960.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3991.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3992.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3993.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_3994.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4005.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4036.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4042.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4064.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4067.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4068.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4071.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4072.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4076.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4077.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4080.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4083.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4097.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4098.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4099.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4101.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4106.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4109.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4123.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4126.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4128.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4131.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4132.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4177.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4238.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4245.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4246.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4268.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4273.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4276.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4293.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4295.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4299.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4300.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4408.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4412.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4413.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4415.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4418.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4427.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4428.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4429.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4441.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4460.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4461.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4482.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4494.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4500.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4507.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4508.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'),array ('name' => 'IMG_4509.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'))
              ),
              array (
                'type' => 'demo',
                'file' => '2015-beigang-mazu',
                'text' => '2015年 北港迎媽祖',
                'keywords' => array ('北港迎媽祖', '北港媽祖', '農曆三月十九', '北港', '朝天宮'),
                'tags' => array ('北港迎媽祖', '北港媽祖', '農曆三月十九'),
                'description' => "烘爐引炮驚奇火花驚震全場，輪廓描繪傳承力量、霓彩妝童延續風華，三聲起馬炮後，三鼓三哨聲的先鋒中壇開路啟；兩聲哨鼓的北港黃袍勇士也在砲火花中吞雲吐霧聞炮起舞；四小將鏘鏘響，門一開，青紅將軍開路展威風！還是一樣的開場詞！是的，又一年了！這個慶典對於北港人，就像如候鳥的季節，是一個返鄉的時刻；每年十九前一晚，小鎮內車子就漸漸的多了，辦桌的廚棚也滿在街道上。這是一個屬於北港囝仔的春節、北港人的過年！其實對於地方的熱情不僅僅是信仰，更還是一種習慣、參與感、責任感。還記得從國中時，自己去圖書館翻閱北港鎮地圖，拿著筆一筆一畫的將路關路線圖完成。高中時，拿著人生第一台的數位相機，記錄著每一年的活動，從起馬唱班到落馬唱班。如今終於可以用我所學的技能，來為我的故鄉做點什麼！十幾年過去了！不曾改變的習慣還依然繼續！不曾冷卻的期待也是依然澎湃！如果你不是北港人，但對傳統文化有著興趣與熱誠，推薦你來北港參與一次吧！你會看到的不僅是陣頭鞭炮，而是整個鎮上參與的感動！不多說了，要開始了！這個屬於全北港小鎮的盛會！出發，全鎮遶境去！！",
                'created_at' => '2015-05-07 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'pictures' => array (array ('name' => 'IMG_0012.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0013.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0014.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0015.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0016.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0017.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0018.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0029.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0030.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0036.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0039.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0041.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0042.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0044.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0045.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0046.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0050.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0051.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0054.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0055.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0056.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0057.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0058.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0073.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0082.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0083.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0086.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0087.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0089.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0090.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0092.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0093.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0094.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0099.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0100.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0102.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0103.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0104.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0105.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0106.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0110.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0111.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0114.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0115.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0121.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0123.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0125.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0126.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0127.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0129.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0132.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0133.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0137.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0138.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'), array ('name' => 'IMG_0139.jpg', 'text' => '2015年 北港迎媽祖', 'desc' => '2015年 北港迎媽祖'))
              ),
              array (
                'type' => 'demo',
                'file' => '2015-tamsui-shimizu-patriarch',
                'text' => '2015年 淡水清水祖師',
                'keywords' => array ('端午節', '清水祖師', '淡水', '清昭誠', '廟會'),
                'tags' => array ('清水祖師', '淡水', '清昭誠'),
                'description' => "今年一樣在淡水做記錄，分成幾個大主題 1.清水祖師 2.清昭誠 3.鍾馗，其實淡水廟會也是一年又一年的小小改變，回想大一時(7年前)，當時候的淡水大拜拜陣頭性質有蠻多的不同了，以前蠻常看到全身是血的乩童，近年來就很少見，而清昭誠也越來越有在地的特色了！天氣雖然熱，但是淡水人的熱情不滅呀！",
                'created_at' => '2014-12-16 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'pictures' => array (array ('name' => 'IMG_1900.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_1901.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_1981.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2014.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2049.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2057.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2069.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2074.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2087.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2092.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2144.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2207.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2208.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2211.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2228.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2236.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2238.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2242.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2256.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2260.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2267.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2271.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2278.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2343.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2407.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2412.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2444.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2475.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2481.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2485.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2498.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2504.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2519.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2525.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2532.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2539.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2555.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2593.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2603.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2612.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2623.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'), array ('name' => 'IMG_2642.jpg', 'text' => '2015年 淡水清水祖師', 'desc' => '2015年 淡水清水祖師'))
              ),
              array (
                'type' => 'demo',
                'file' => '2014-beigang-mazu',
                'text' => '2014年 北港迎媽祖',
                'keywords' => array ('北港迎媽祖', '北港媽祖', '農曆三月十九', '北港', '朝天宮'),
                'tags' => array ('北港迎媽祖', '北港媽祖', '農曆三月十九'),
                'description' => "回到台北，總覺得耳禮孩聽得到陣陣開路鼓的鼓吹、鑼聲，一年一度北港人的過年結束了！嗯，總是要有圓滿結束才會有新的等待與期待，這幾天大家的共襄盛舉，希望這次的遶境，能讓北港一整年合境平安。朋友們，明年十九再相遇一次吧！",
                'created_at' => '2014-04-08 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'pictures' => array (array ('name' => 'IMG_0342.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_0450.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_0524.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_0535.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_0619.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_0741.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_0753.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_1162.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_1378.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_1502.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_1678.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_1691.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_1727.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_1754.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_1850.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_1990.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_2773.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_2783.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3089.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3097.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3111.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3114.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3123.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3143.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3200.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3355.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3384.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3427.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3505.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3562.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3681.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3807.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3861.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_3883.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_4029.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_4038.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_4257.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_4440.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_4466.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_4498.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_4971.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_4982.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_4986.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_5083.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_5151.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_5157.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_5164.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_5188.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_5271.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_5389.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_5677.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_5687.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_5770.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_6098.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_6224.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_6301.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_6350.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_6410.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_6437.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'), array ('name' => 'IMG_6612.jpg', 'text' => '2014年 北港迎媽祖', 'desc' => '2014年 北港迎媽祖'))
              ),
              array (
                'type' => 'demo',
                'file' => '2014-tamsui-shimizu-patriarch',
                'text' => '2014年 淡水清水祖師',
                'keywords' => array ('端午節', '清水祖師', '淡水', '清昭誠', '廟會'),
                'tags' => array ('清水祖師', '淡水', '清昭誠'),
                'description' => "今年還是一樣，快身為半個淡水人的我，一定要看一下這場大拜拜啦！尤其是可以在遶境隊伍中找到那熟悉的紅色盔甲，或許是因為我對北港是有從小到大的熱情吧，我覺得北港與淡水的繞境差很多，但每個地方都有他們的特色，有興趣的可以來淡水參與體驗一下喔！",
                'created_at' => '2014-06-02 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'pictures' => array (array ('name' => 'IMG_7046.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7048.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7055.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7061.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7070.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7077.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7092.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7103.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7108.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7132.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7143.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7153.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7177.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7201.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7206.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7260.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7265.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7274.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'), array ('name' => 'IMG_7299.jpg', 'text' => '2014年 淡水清水祖師', 'desc' => '2014年 淡水清水祖師'))
              ),
              array (
                'type' => 'demo',
                'file' => '2013-beigang-mazu',
                'text' => '2013年 北港迎媽祖',
                'keywords' => array ('北港迎媽祖', '北港媽祖', '農曆三月十九', '北港', '朝天宮'),
                'tags' => array ('北港迎媽祖', '北港媽祖', '農曆三月十九'),
                'description' => "如候鳥的季節 一年一度北港囝仔ㄟ大日子 因為氣象報導，前幾天還擔心著會下大雨，幸好當天一大早很意外的風雨免朝！街上氣氛不一樣了! 吃著早餐，聽到老闆與買早餐的阿嬤對話，原來是兒子孫子們都要回來逗熱鬧了！小鎮內的車子多了，辦桌的廚棚也滿在街道上。三聲起馬炮後，三鼓三哨聲的先鋒中壇走第一，兩聲哨鼓身穿黃色戰袍的北港勇士，也在砲火花中 聞炮起舞 吞雲吐霧，搖擺將軍青紅開路展 步步威風領領！開始了! 這個屬於全北港小鎮的盛會！！出發，全鎮遶境去！",
                'created_at' => '2013-04-28 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'pictures' => array (array ('name' => 'IMG_0001.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0002.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0003.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0004.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0005.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0006.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0008.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0009.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0011.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0012.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0013.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0014.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0016.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0017.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0018.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0020.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0022.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0024.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0025.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0026.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0027.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0028.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0029.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0030.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0031.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0032.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0033.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0034.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0035.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0036.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0037.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0038.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0039.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'), array ('name' => 'IMG_0040.jpg', 'text' => '2013年 北港迎媽祖', 'desc' => '2013年 北港迎媽祖'))
              ),
              array (
                'type' => 'demo',
                'file' => '2013-tamsui-shimizu-patriarch',
                'text' => '2013年 淡水清水祖師',
                'keywords' => array ('端午節', '清水祖師', '淡水', '清昭誠', '廟會'),
                'tags' => array ('清水祖師', '淡水', '清昭誠'),
                'description' => "又是一年一度端午節也是淡水地區清水崖的蓬萊老祖師的暗訪大日子，因為與北港朝天宮有交流的關係，所以發現了今年還有一頂轎是配上我們朝天宮傳統樣是的服裝、神轎、推車、演樂，在廟宇中的人擠人，看到這群紅衣人不免又害我以為回到三月十九了！與北港廟會很大的一個不同點，這裡面參與在第文化的大多數是老年人，而出廟的儀式上也跟北港較為不同。今晚還意外的看到朝天宮董事-蔡咏锝先生，在朋友動態上得知原來清水崖跟朝天宮有交流，就連朝天宮的金垂髫太子會也過來推廣北港的犁炮文化！",
                'created_at' => '2013-06-12 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'pictures' => array (array ('name' => 'IMG_8606.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8609.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8614.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8621.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8624.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8625.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8628.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8664.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8671.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8683.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8710.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8711.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'), array ('name' => 'IMG_8731.jpg', 'text' => '2013年 淡水清水祖師', 'desc' => '2013年 淡水清水祖師'))
              ),
          )),
      )),
    array ('group' => '網頁<span>全端</span>作品', 'title' => '(php、JavaScript、MySQL、CSS)', 'items' => array (
        array (
            'type' => 'demo',
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
              ),
            'pictures' => array (
                // array ('name' => '01.jpg', 'text' => 'xxxx', 'desc' => 'xxxxxxxxxxxxxxxxxsssssssssssssssssddddddddddd'),
                // array ('name' => '02.png', 'text' => 'xxxx', 'desc' => 'xxxxxxxxxxxxxxxxxsssssssssssssssssddddddddddd'),
                // array ('name' => '03.jpg', 'text' => 'xxxx', 'desc' => 'xxxxxxxxxxxxxxxxxsssssssssssssssssddddddddddd'),
                // array ('name' => '04.png', 'text' => 'xxxx', 'desc' => 'xxxxxxxxxxxxxxxxxsssssssssssssssssddddddddddd'),
                // array ('name' => '05.jpg', 'text' => 'xxxx', 'desc' => 'xxxxxxxxxxxxxxxxxsssssssssssssssssddddddddddd'),
              )
          ),
        array (
            'type' => 'demo',
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
            'type' => 'demo',
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
            'type' => 'demo',
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
            'type' => 'demo',
            'file' => 'google-maps-richman',
            'text' => 'Google Maps 大富翁',
            'title' => 'Google Maps 大富翁',
            'keywords' => array ('Google Maps 大富翁', '大富翁', 'OA-richman', 'Google Maps Richman', 'Richman'),
            'tags' => array ('Google Maps', '大富翁'),
            'description' => "這是一個使用 <a href='https://developers.google.com/maps/documentation/javascript/?hl=zh-tw' target='_blank'>Google Maps JavaScript API</a> 製作的大富翁遊戲！基本上是利用 Google Maps Markers 以及 Polyline 所建置出路線、節點、角色、計分、蓋房... 等設計！",
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
            'type' => 'demo',
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
                'type' => 'demo',
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
                'type' => 'demo',
                'file' => 'instagram-maps',
                'text' => 'Instagram Maps',
                'keywords' => array ('instagram', 'Google Maps', 'MarkerClusterer', 'MarkerWithLabel', 'LatLngBounds', 'AJAX'),
                'tags' => array ('instagram', 'Google Maps', 'MarkerClusterer', 'MarkerWithLabel', 'LatLngBounds'),
                'description' => "<a href='https://www.instagram.com/' target='_blank'>Instagram</a> App 當中有一項很特別的功能是我很喜愛的，就是地圖模式的瀏覽照片，而且 Instagram 將這項功能優化得不錯，使得當地圖縮小時，密集的 Marker 會合成一個 Marker，而這樣的地圖功能在 <a href='https://developers.google.com/maps/documentation/javascript/?hl=zh-tw' target='_blank'>Google Maps JavaScript API</a> 上可以實作得到！",
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
                'type' => 'demo',
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
                'type' => 'demo',
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
                'type' => 'demo',
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
                'type' => 'demo',
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
                'type' => 'demo',
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
                'type' => 'demo',
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
                'type' => 'demo',
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
                'type' => 'demo',
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
            'type' => 'demo',
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
            'type' => 'demo',
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
            'type' => 'demo',
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
            'type' => 'demo',
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
                'type' => 'demo',
                'file' => 'google-maps-menu',
                'text' => 'Google Maps Menu',
                'keywords' => array ('Google Maps', 'Google Maps Marker', 'Google Maps Polyline', 'Excel', '路徑'),
                'tags' => array ('Google Maps', 'Google Maps Marker', 'Google Maps Polyline'),
                'description' => "此作品主要在於開發出可以在 Google Maps 上面編輯基本路徑的功能，利用 <a href='https://developers.google.com/maps/documentation/javascript/?hl=zh-tw' target='_blank'>Google Maps JavaScript API</a> 設計出規劃路線的工具，並且可以匯出路間經緯度 <a href='https://products.office.com/zh-tw/excel' target='_blank'>Excel</a>。",
                'created_at' => '2015-11-05 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'http://comdan66.github.io/OA-googleMapsMenu/index.html',
                    'GitHub' => 'https://github.com/comdan66/OA-googleMapsMenu',
                  ),
                'resources' => array (
                    'Live Demo' => 'http://comdan66.github.io/OA-googleMapsMenu/index.html',
                    'GitHub' => 'https://github.com/comdan66/OA-googleMapsMenu',
                  )
              ),
            array (
                'type' => 'demo',
                'file' => 'taipei-towns',
                'text' => '雙北市行政區域範圍座標',
                'keywords' => array ('Google Maps', '雙北市行政區域範圍座標', '雙北市範圍座標', '範圍座標'),
                'tags' => array ('Google Maps'),
                'description' => "雙北市行政區域範圍座標，藉由大家一起來維護劃分出雙北市甚至於全台灣的行政區域、鄉鎮區域的範圍座標。",
                'created_at' => '2015-12-09 00:00:00',
                'updated_at' => date ('Y-m-d H:i:s'),
                'main_links' => array (
                    'Live Demo' => 'http://comdan66.github.io/TaipeiTowns/index.html',
                    'GitHub' => 'https://github.com/comdan66/TaipeiTowns',
                  ),
                'resources' => array (
                    'Live Demo' => 'http://comdan66.github.io/TaipeiTowns/index.html',
                    'GitHub' => 'https://github.com/comdan66/TaipeiTowns',
                    'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/916800425023990/',
                    'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1449695345.A.4C2.html',
                    '臺北市鄰界圖' => 'http://data.taipei/opendata/datalist/datasetMeta?oid=6d864ede-c482-4f33-bb89-5be19dc772e1',
                    '交通路網數值圖服務網' => 'https://gist-map.motc.gov.tw/Complex/MapTopic',
                    'Shapefile to GeoJSON' => 'http://kuro.tw/posts/2015/05/05/note-shapefile-to-geojson',
                    '村里界圖(WGS84經緯度)' => 'https://sheethub.com/data.gov.tw/村里界圖(WGS84經緯度)',
                  )
              ),
            )),
      )),
    array ('group' => 'php 工具、框架開發', 'title' => '', 'items' => array (
        array (
            'type' => 'demo',
            'file' => 'oaci',
            'text' => "OACI (OA's CodeIgniter)",
            'keywords' => array ('CodeIgniter', 'Ruby on Rails', 'RubyGems', 'Redis', 'ElasticaSearch', 'carrierwave', 'PHP ActiveRecord', 'OrmUploader', 'ImageImagickUtility', 'ImageGdUtility', 'ImageUplader', 'FileUploader'),
            'tags' => array ('CodeIgniter', 'Redis', 'ElasticaSearch', 'PHP ActiveRecord'),
            'description' => "這是一個以 <a href='https://ellislab.com/codeigniter/user-guide/installation/downloads.html' target='_blank'>CodeIgniter 2.1.4</a> 為基礎版本，將其新增進階功能的一套好用的 php Framework，加入了 <a href='http://www.phpactiverecord.org/' target='_blank'>PHP ActiveRecord</a> 並且與 OrmUploader 讓圖片網址處理更方便，以及多樣的前後端整併。",
            'created_at' => '2014-11-11 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'https://www.youtube.com/watch?&v=svomGfqxZvg',
                'GitHub' => 'https://github.com/comdan66/oaci',
              ),
            'resources' => array (
                'Live Demo' => 'https://www.youtube.com/watch?&v=svomGfqxZvg',
                'GitHub' => 'https://github.com/comdan66/oaci',
              )
          ),
        array (
            'type' => 'demo',
            'file' => 'php-elastica-search',
            'text' => 'ElasticaSearch',
            'keywords' => array ('php', 'ElasticaSearch'),
            'tags' => array ('php', 'ElasticaSearch'),
            'description' => "這是一套 <a href='https://www.elastic.co/' target='_blank'>ElasticaSearch</a> 基本 Create、Read、Update、Delete(CRUD) 的使用工具，其工具主要目的就是將資料撈出來並且物件化，架構於 <a href='https://github.com/ruflin/Elastica' target='_blank'>Elastica Library</a>，將讀取出來的資料物件化，以及包裝成方便開發的工具。",
            'created_at' => '2015-08-26 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-ElasticaSearch/guide/index.html',
                'GitHub' => 'https://github.com/comdan66/OA-ElasticaSearch',
              ),
            'resources' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-ElasticaSearch/guide/index.html',
                'GitHub' => 'https://github.com/comdan66/OA-ElasticaSearch',
                'PTT PHP' => 'https://www.ptt.cc/bbs/PHP/M.1440735206.A.FC7.html',
                'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1440735487.A.4C1.html',
                'Facebook PHP 台灣' => 'https://www.facebook.com/groups/199493136812961/permalink/850647258364209/',
                'Facebook Backend 台灣 (Backend Tw)' => 'https://www.facebook.com/groups/616369245163622/permalink/725753477558531/',
                'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/877530442284322/',
              )
          ),
      )),
    array ('group' => 'css 框架開發', 'title' => '', 'items' => array (
        array (
            'type' => 'demo',
            'file' => 'material-web-design',
            'text' => 'Material Web Design',
            'keywords' => array ('Material', 'Gulp', 'Compass'),
            'tags' => array ('Material', 'Gulp', 'Compass'),
            'description' => "這套前端工具主要是參考 <a href='https://www.google.com/design/spec/material-design/introduction.html' target='_blank'>Material UI</a> 風格設計，並且這是一個藉由 <a href='http://compass-style.org/' target='_blank'>Compass</a>、<a href='http://www.w3schools.com/html/' target='_blank'>HTML</a> 以及 <a href='https://jquery.com/' target='_blank'>jQuery</a>..等各種前端工具實作的 Material UI Design for Web，開發者可以自行使用 scss 或者 css 來做修改，目前是使用 jQuery 來達到更多 UI 回饋效果。",
            'created_at' => '2014-12-08 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-material/',
                'GitHub' => 'https://github.com/comdan66/OA-material',
              ),
            'resources' => array (
                'Live Demo' => 'http://comdan66.github.io/OA-material/',
                'GitHub' => 'https://github.com/comdan66/OA-material',
                'PTT Soft_Job' => 'https://www.ptt.cc/bbs/Soft_Job/M.1418573892.A.E39.html',
                'PTT Soft_Job 2' => 'https://www.ptt.cc/bbs/Soft_Job/M.1439537367.A.64B.html',
                'Facebook Front-End Developers Taiwan' => 'https://www.facebook.com/groups/f2e.tw/permalink/766343336736367/',
                'Facebook Front-End Developers Taiwan 2' => 'https://www.facebook.com/groups/f2e.tw/permalink/871517822885584/',
                "Tedshd's GitHub" => 'https://github.com/tedshd/material_design_for_web',
              )
          )
      )),
    array ('group' => 'iOS 工具、app 開發', 'title' => '', 'items' => array (
        array (
            'type' => 'demo',
            'file' => 'catmap',
            'text' => 'CatMap',
            'keywords' => array ('Instagram', 'Facebook'),
            'tags' => array ('iOS', 'Object-C', 'REMarkerClusterer', 'AFNetworking', 'AsyncImageView'),
            'description' => "此作是我第一個比較完整的 iOS 的 App，主要利用基本的 iOS 元件製作照相上傳、分享、地圖功能，以下是我一些學習的筆記與心得！",
            'created_at' => '2015-07-05 00:00:00',
            'updated_at' => date ('Y-m-d H:i:s'),
            'main_links' => array (
                'Live Demo' => 'https://www.youtube.com/watch?&v=HTgfTjmS2UI',
                'GitHub' => 'https://github.com/comdan66/catmap_ios',
                '後端 php GitHub' => 'https://github.com/comdan66/catmap_php',
                'Web 網站' => 'http://catmap.ioa.tw/maps',
              ),
            'resources' => array (
                'Live Demo' => 'https://www.youtube.com/watch?&v=HTgfTjmS2UI',
                'GitHub' => 'https://github.com/comdan66/catmap_ios',
                '後端 php GitHub' => 'https://github.com/comdan66/catmap_php',
                'Web 網站' => 'http://catmap.ioa.tw/maps',
                'Facebook Demo' => 'https://www.facebook.com/comdan66/videos/1115490615130946/',
                'PTT Soft_Job' => 'https://www.ptt.cc/bbs/MacDev/M.1436114088.A.832.html',
              )
          ),
        // array (
        //     'type' => 'demo',
        //     'file' => 'oa-hud',
        //     'text' => 'OAHUD',
        //     'keywords' => array (),
        //     'tags' => array (),
        //     'description' => "",
        //     'created_at' => '',
        //     'updated_at' => date ('Y-m-d H:i:s'),
        //     'main_links' => array (
        //         'Live Demo' => '',
        //         'GitHub' => '',
        //       ),
        //     'resources' => array (
        //         'Live Demo' => '',
        //         'GitHub' => '',
        //         'Youtube' => '',
        //         'PTT Soft_Job' => '',
        //       )
        //   )
      )),
    // array ('group' => '接案作品', 'title' => '', 'items' => array (
    //     array (
    //         'type' => 'demo',
    //         'file' => 'zeusdesign',
    //         'text' => '宙思設計',
    //         'keywords' => array (),
    //         'tags' => array (),
    //         'description' => "",
    //         'created_at' => '',
    //         'updated_at' => date ('Y-m-d H:i:s'),
    //         'main_links' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //           ),
    //         'resources' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //             'Youtube' => '',
    //             'PTT Soft_Job' => '',
    //           )
    //       ),
    //     array ('type' => 'more', 'text' => '更多接案作品..', 'file' => 'more-works', 'sub' => array (
    //       array (
    //           'type' => 'demo',
    //           'file' => 'hoga',
    //           'text' => '嘉豪光學',
    //           'keywords' => array (),
    //           'tags' => array (),
    //           'description' => "",
    //           'created_at' => '',
    //           'updated_at' => date ('Y-m-d H:i:s'),
    //           'main_links' => array (
    //               'Live Demo' => '',
    //               'GitHub' => '',
    //             ),
    //           'resources' => array (
    //               'Live Demo' => '',
    //               'GitHub' => '',
    //               'Youtube' => '',
    //               'PTT Soft_Job' => '',
    //             )
    //         ),
    //         array (
    //             'type' => 'demo',
    //             'file' => 'chitorch',
    //             'text' => '奇拓',
    //             'keywords' => array (),
    //             'tags' => array (),
    //             'description' => "",
    //             'created_at' => '',
    //             'updated_at' => date ('Y-m-d H:i:s'),
    //             'main_links' => array (
    //                 'Live Demo' => '',
    //                 'GitHub' => '',
    //               ),
    //             'resources' => array (
    //                 'Live Demo' => '',
    //                 'GitHub' => '',
    //                 'Youtube' => '',
    //                 'PTT Soft_Job' => '',
    //               )
    //           ),
    //         array (
    //             'type' => 'demo',
    //             'file' => 'bto',
    //             'text' => '億進建築 BTO',
    //             'keywords' => array (),
    //             'tags' => array (),
    //             'description' => "",
    //             'created_at' => '',
    //             'updated_at' => date ('Y-m-d H:i:s'),
    //             'main_links' => array (
    //                 'Live Demo' => '',
    //                 'GitHub' => '',
    //               ),
    //             'resources' => array (
    //                 'Live Demo' => '',
    //                 'GitHub' => '',
    //                 'Youtube' => '',
    //                 'PTT Soft_Job' => '',
    //               )
    //           ),
    //         array (
    //             'type' => 'demo',
    //             'file' => 'harmonizedesign',
    //             'text' => '寬堂空間設計',
    //             'keywords' => array (),
    //             'tags' => array (),
    //             'description' => "",
    //             'created_at' => '',
    //             'updated_at' => date ('Y-m-d H:i:s'),
    //             'main_links' => array (
    //                 'Live Demo' => '',
    //                 'GitHub' => '',
    //               ),
    //             'resources' => array (
    //                 'Live Demo' => '',
    //                 'GitHub' => '',
    //                 'Youtube' => '',
    //                 'PTT Soft_Job' => '',
    //               )
    //           ),
    //         array (
    //             'type' => 'demo',
    //             'file' => 'ofna',
    //             'text' => 'OFNA',
    //             'keywords' => array (),
    //             'tags' => array (),
    //             'description' => "",
    //             'created_at' => '',
    //             'updated_at' => date ('Y-m-d H:i:s'),
    //             'main_links' => array (
    //                 'Live Demo' => '',
    //                 'GitHub' => '',
    //               ),
    //             'resources' => array (
    //                 'Live Demo' => '',
    //                 'GitHub' => '',
    //                 'Youtube' => '',
    //                 'PTT Soft_Job' => '',
    //               )
    //           ),
    //         array (
    //             'type' => 'demo',
    //             'file' => 'vg',
    //             'text' => '鉅臣 VG',
    //             'keywords' => array (),
    //             'tags' => array (),
    //             'description' => "",
    //             'created_at' => '',
    //             'updated_at' => date ('Y-m-d H:i:s'),
    //             'main_links' => array (
    //                 'Live Demo' => '',
    //                 'GitHub' => '',
    //               ),
    //             'resources' => array (
    //                 'Live Demo' => '',
    //                 'GitHub' => '',
    //                 'Youtube' => '',
    //                 'PTT Soft_Job' => '',
    //               )
    //           ),
    //       )),
    //   )),
    // array ('group' => 'Java 作品開發', 'title' => '', 'items' => array (
    //     array (
    //         'type' => 'demo',
    //         'file' => 'freshman-java-painter',
    //         'text' => '大一 Java 小畫家',
    //         'keywords' => array (),
    //         'tags' => array (),
    //         'description' => "",
    //         'created_at' => '',
    //         'updated_at' => date ('Y-m-d H:i:s'),
    //         'main_links' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //           ),
    //         'resources' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //             'Youtube' => '',
    //             'PTT Soft_Job' => '',
    //           )
    //       ),
    //     array (
    //         'type' => 'demo',
    //         'file' => 'sophomore-java-msn',
    //         'text' => '大二 Java MSN',
    //         'keywords' => array (),
    //         'tags' => array (),
    //         'description' => "",
    //         'created_at' => '',
    //         'updated_at' => date ('Y-m-d H:i:s'),
    //         'main_links' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //           ),
    //         'resources' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //             'Youtube' => '',
    //             'PTT Soft_Job' => '',
    //           )
    //       ),
    //     array (
    //         'type' => 'demo',
    //         'file' => 'sophomore-java-assembler',
    //         'text' => '大二 Java Assembler',
    //         'keywords' => array (),
    //         'tags' => array (),
    //         'description' => "",
    //         'created_at' => '',
    //         'updated_at' => date ('Y-m-d H:i:s'),
    //         'main_links' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //           ),
    //         'resources' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //             'Youtube' => '',
    //             'PTT Soft_Job' => '',
    //           )
    //       ),
    //     array (
    //         'type' => 'demo',
    //         'file' => 'junior-java-plurker',
    //         'text' => '大三 Java Plurker',
    //         'keywords' => array (),
    //         'tags' => array (),
    //         'description' => "",
    //         'created_at' => '',
    //         'updated_at' => date ('Y-m-d H:i:s'),
    //         'main_links' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //           ),
    //         'resources' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //             'Youtube' => '',
    //             'PTT Soft_Job' => '',
    //           )
    //       ),
    //   )),
    // array ('group' => '其他', 'title' => '', 'items' => array (
    //     array (
    //         'type' => 'demo',
    //         'file' => 'senior-arduino-micro-lit',
    //         'text' => '大四 Arduino 新銳展翅創意競賽',
    //         'keywords' => array (),
    //         'tags' => array (),
    //         'description' => "",
    //         'created_at' => '',
    //         'updated_at' => date ('Y-m-d H:i:s'),
    //         'main_links' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //           ),
    //         'resources' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //             'Youtube' => '',
    //             'PTT Soft_Job' => '',
    //           )
    //       ),
    //     array (
    //         'type' => 'demo',
    //         'file' => 'stylewall',
    //         'text' => '風尚專案 STYLEWALL 多語系',
    //         'keywords' => array (),
    //         'tags' => array (),
    //         'description' => "",
    //         'created_at' => '',
    //         'updated_at' => date ('Y-m-d H:i:s'),
    //         'main_links' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //           ),
    //         'resources' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //             'Youtube' => '',
    //             'PTT Soft_Job' => '',
    //           )
    //       ),
    //     array (
    //         'type' => 'demo',
    //         'file' => 'c-comic-book',
    //         'text' => 'C語言 漫畫下載器',
    //         'keywords' => array (),
    //         'tags' => array (),
    //         'description' => "",
    //         'created_at' => '',
    //         'updated_at' => date ('Y-m-d H:i:s'),
    //         'main_links' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //           ),
    //         'resources' => array (
    //             'Live Demo' => '',
    //             'GitHub' => '',
    //             'Youtube' => '',
    //             'PTT Soft_Job' => '',
    //           )
    //       ),
    //   ))
  );