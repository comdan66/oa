/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

$(function () {
  window.$body.find ('#_c ._c figure a').imgLiquid ({verticalAlign: 'center'});
  window.$body.find ('#_c ._c article a:not([href^=mailto])').each (function () { $(this).attr ('target', '_blank'); });

  $('.pics figure').imgLiquid ({verticalAlign: 'center'});
  window.fns.initPhotoSwipeFromDOM ('.pics', 'figure');
});