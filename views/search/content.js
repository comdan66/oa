/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

$(function () {
  window.vars.loopTimer = null;
  window.vars.keyupTimer = null;
  
  window.vars.$figures = $('.works figure');
  window.vars.$figures.find ('>a:not(:first-child)').imgLiquid ({verticalAlign: 'center'});
  window.vars.$suggestas = $('.suggest a');
  window.vars.$search = $('.search');
  window.vars.$kinds = $('.kind input');

  function keywordLoop ($a, i) {
    var $tags = $a.slice (i, i + 5).removeClass ('back').addClass ('start');
    clearTimeout (window.vars.loopTimer);

    window.vars.loopTimer = setTimeout (function () {
      $tags.addClass ('end');
      setTimeout (keywordLoop.bind (this, $a, (i + 5) % 10), 100);
      setTimeout (function () {
        $tags.addClass ('back').removeClass ('start end');
      }, 1500);
    }, 5000);
  }
  function filter (key) {
    var kinds = window.vars.$kinds.filter (':checked').map (function () {
        return $(this).val ();
    }).toArray ();

    window.vars.$figures.removeClass ('s').filter ('[data-str*="' + key.trim ().toLowerCase () + '"]').filter (function () {
      return $.inArray ($(this).data ('kind'), kinds) !== -1;
    }).addClass ('s');
  }

  $('.line button').click (function () {
    $(this).addClass ('a').siblings ().removeClass ('a');
    $(this).parents ('.line').attr ('class', 'line' + ' ' + $(this).data ('type'));
  });
  window.vars.$kinds.click (function () {
    filter ($input.val ());
  });
  // $('.kind input').click (function () {
    
  // });

  var hash = window.location.hash.trim ().slice (1).trim ();
  window.onhashchange = function () {
    location.reload ();
  };
  if (!hash) {
    window.vars.$search.attr ('class', 'search no');
    window.vars.$suggestas.removeClass ();
  } else {
    window.vars.$search.attr ('class', 'search yes');
    filter (decodeURIComponent (hash));
  }
  var $input = $('#search').val (decodeURIComponent (hash)).keyup (function (e) {
    if (e.keyCode == 13)
      window.location.hash = encodeURIComponent ($(this).val ().trim ());

    clearTimeout (window.vars.keyupTimer);
    window.vars.keyupTimer = setTimeout (function () {
      filter ($(this).val ());
    }.bind ($(this)), 500);

    if (!$(this).val ().trim ().length) {
      if (window.vars.$search.hasClass ('yes')) {
        window.vars.$search.attr ('class', 'search no');
        window.vars.$suggestas.removeClass ();
      }
    } else {
      window.vars.$search.attr ('class', 'search yes');
    }
  });
  $input.next ().click (function () {
    window.location.hash = encodeURIComponent ($input.val ().trim ());
  });
  setTimeout (keywordLoop.bind (this, window.vars.$suggestas, 0), 1500);

  // $('.works figure > a:not(:first-child)')
});