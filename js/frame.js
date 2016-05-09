/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

window.fbAsyncInit = function() {
  FB.init({
    appId      : '695906407210191',
    xfbml      : true,
    version    : 'v2.4'
  });
};

(function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/zh_TW/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));

$(function () {

  function setTabLayout ($tab, $tabDivDiv, sum) { $tabDivDiv.css ({'left': 0}); if ((sum ? sum : $tabDivDiv.width ()) > $tab.width ()) $tab.addClass ('o'); else $tab.removeClass ('o'); }

  var $tab = $('._t').each (function () {
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
  var $header = window.$body.find ('> header');
  $header.find ('.fi-m').click (toggleMenu);
  $header.find ('nav a').last ().click (function () { window.open ('https://www.facebook.com/sharer/sharer.php?u=' + window.location.href, '分享', 'scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,top=100,left=' + (window.screen ? Math.round (screen.width / 2 - 275) : 100)); });
  window.$body.find ('#_c > div > span').click (toggleMenu);
  $('time').timeago ();


  if ($(window).width () > 640) {
    $(window).scroll (function () {
      var t = $(this).scrollTop ();
      var l = $(this).get (0).l ? $(this).get (0).l : 0;
      if (t < 60 || t < l) {
        if ($tab.hasClass ('h'))
          $tab.removeClass ('h');
        if ($header.hasClass ('h'))
          $header.removeClass ('h');
      } else {
        if (!$tab.hasClass ('h'))
          $tab.addClass('h');
        if (!$header.hasClass ('h'))
          $header.addClass('h');
      }
      $(this).get (0).l = t;
    });
  }
});