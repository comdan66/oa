/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

$(function () {
  window.$body.find ('.profile1 > section:first-child figure a').imgLiquid ({verticalAlign: 'top'});
  
  $('.pics figure').imgLiquid ({verticalAlign: 'center'});
  window.fns.initPhotoSwipeFromDOM ('.pics', 'figure');
});