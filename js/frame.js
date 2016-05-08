/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

$(function () {

  function setTabLayout ($tab, $tabDivDiv, sum) { $tabDivDiv.css ({'left': 0}); if ((sum ? sum : $tabDivDiv.width ()) > $tab.width ()) $tab.addClass ('o'); else $tab.removeClass ('o'); }

  $('._t').each (function () {
    var $that = $(this), $tabDivDiv = $(this).find ('> div > div'), units = $.makeArray ($tabDivDiv.find ('> a').map (function () { return $(this).width () + parseFloat ($(this).css ('padding-left')) + parseFloat ($(this).css ('padding-right')); })), sum = units.reduce (function (a, b) { return a + b + 4; }), $arrow = $(this).find ('> a'), $firstArrow = $arrow.first ().click (function () { if (units[$that.get (0).clickCount - 1]) $tabDivDiv.css ({'left': (--$that.get (0).clickCount < 1 ? 0 : (0 - units.slice (0, $that.get (0).clickCount).reduce (function (a, b) { return a + b; }))) + 'px'}); }), $lastArrow = $arrow.last ().click (function () { if (units[$that.get (0).clickCount + 1]) $tabDivDiv.css ({'left': 0 - units.slice (0, $that.get (0).clickCount+++1).reduce (function (a, b) { return a + b; }) + 'px'}); });
    $tabDivDiv.width (sum);
    $(window).resize (function () { if ($that.get (0).timer) clearTimeout ($that.get (0).timer); $that.get (0).timer = setTimeout (setTabLayout.bind ($that, $that, $tabDivDiv, sum), 300); });
    setTabLayout ($that, $tabDivDiv, sum);
    $that.get (0).clickCount = $tabDivDiv.find ('> a.a').index () + 1;
    $arrow.click (function () { if (units[$that.get (0).clickCount - 1]) $firstArrow.removeClass ('d'); else $firstArrow.addClass ('d'); if (units[$that.get (0).clickCount + 1]) $lastArrow.removeClass ('d'); else $lastArrow.addClass ('d'); });
    if ($(this).hasClass ('o')) $arrow.first ().click ();
  });

  window.$body = $('body');
  var overflow = window.$body.css ('overflow');
  function toggleMenu () { if (window.$body.hasClass ('s')) window.$body.removeClass ('s').css ('overflow', overflow); else window.$body.addClass ('s').css ('overflow', 'hidden'); }
  window.$body.find ('> header .fi-m').click (toggleMenu);
  window.$body.find ('> header nav a').last ().click (function () { window.open ('https://www.facebook.com/sharer/sharer.php?u=' + window.location.href, '分享', 'scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,top=100,left=' + (window.screen ? Math.round (screen.width / 2 - 275) : 100)); });
  window.$body.find ('#_c > div > span').click (toggleMenu);
});