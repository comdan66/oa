<p>此作品雖然與 <a href='https://github.com/karacas/imgLiquid' target='_blank'>imgLiquid</a> 功能一樣，但是做法不同，前者將 <b>&lt;img /&gt;</b> 設定成隱藏，在取出其圖片網址後設定在該 &lt;img /&gt; 父元素的 Style，而我的這次要實作的雖然目的相同，但做法則不一樣。</p>
<p>首先需要幾個先決條件：</p>
<ul>
  <li>父層 position 一定要是 position、absolute、fixed。</li>
  <li>父層一定要有設定 width 以及 height。</li>
</ul>
<p>做法是將 &lt;img /&gt; 的 position 設定成 absolute，在用 top、right、bottom、left 去調整位置，而此時父層再加上一項屬性 <span class='path'>overflow: hidden;</span> 即可做到調整位置的效果了！</p>
<p><img width='400' alt='<?php echo $alt;?>' src='<?php echo img_url ('articles', 'img-liquid', '01.jpg');?>' /><img width='400' alt='<?php echo $alt;?>' src='<?php echo img_url ('articles', 'img-liquid', '02.jpg');?>' /><br/>▲ 垂直、水平置中(藍色為父層、黃色為 img 元素)</p>
<br/>
<p>其中功能也加入很多方式使用，包含了搭配 <a href='http://w3school.com.cn/html/html_attributes.asp' target='_blank'>元素屬性</a> 設定..等功能，若要更清楚瞭解可以置 <a href='https://github.com/comdan66/OA-imgLiquid#目錄' target='_blank'>GitHub</a> 查看說明。</p>