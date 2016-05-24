<p>功能主要是依賴 jQuery 與 jquery-UI 實作，再利用 jQuery-UI 的 <a href='https://jqueryui.com/draggable/' target='_blank'>Draggable</a> 實作拖曳的效果，則 Draggable 需要設定 <span class='path'>axis: 'x'</span> 來固定水平拖曳移動。不過此時會發現手機的滑動時 Draggable 會失效，所以還需仰賴 jQuery.UI.Touch-Punch 修正！然後我再利用這些巨人大大的 library 作出這個 jQuery extend function！</p>

<p>特別注意的部分是：</p>
<ul>
  <li>手機上實測好像還會頓頓的.. 還在調整中..</li>
  <li>Demo 頁面所有元素都是採用 <span class='path'>box-sizing: border-box;</span> 操作，所以要改的話，要稍微注意版型 css 部分。</li>
  <li>因為是使用 scss 撰寫，故此專案會有 scss、css 的資料夾。</li>
  <li>目前最多容納 100 個水平元素！</li>
  <li>Demo 頁面中 <a href='https://github.com/karacas/imgLiquid' target='_blank'>imgLiquid</a> 只是讓我調整圖片的顯示，非主要功能！</li>
</ul>
