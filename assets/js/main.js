var Main = (function($) {

  var screen_width = 0,
      breakpoint_small = false,
      breakpoint_medium = false,
      breakpoint_large = false,
      breakpoint_array = [480,1000,1200],
      $document,
      loadingTimer;

  function _init() {
    // touch-friendly fast clicks
    FastClick.attach(document.body);

    // Cache some common DOM queries
    $document = $(document);
    $('body').addClass('loaded');

    // Set screen size vars
    _resize();

    // Init functions
    _initNav();

    // Esc handlers
    $(document).keyup(function(e) {
      if (e.keyCode === 27) {

      }
    });

    // Smoothscroll links
    $('a.smoothscroll').click(function(e) {
      e.preventDefault();
      var href = $(this).attr('href');
      _scrollBody($(href));
    });

    // Scroll down to hash afer page load
    $(window).load(function() {
      if (window.location.hash) {
        _scrollBody($(window.location.hash)); 
      }
    });

  } // end init()

  function _scrollBody(element, duration, delay) {
    if ($('#wpadminbar').length) {
      wpOffset = $('#wpadminbar').height();
    } else {
      wpOffset = 0;
    } 
    element.velocity("scroll", {
      duration: duration,
      delay: delay,
      offset: -wpOffset
    }, "easeOutSine");
  }

  function _initNav() {
    $(document).on('click','.open-nav', function (e) {
      e.preventDefault();
      _openNav();
    });
    $(window).scroll(function () {
      var scrollTop = $(window).scrollTop();

      if(scrollTop > 30 ) {
        _closeNav();
      } else {
        _openNav();
      }
    });
  }
  function _openNav() {
    var $header = $('.site-header');
    if($header.hasClass('-nav-closed')) {
      console.log('opening');
      $header
        .removeClass('-nav-closed')
        .addClass('-nav-open')
        .find('.nav-list-item.has-dropdown')
        .addClass('-temporarily-disable-dropdowns');

      setTimeout(function () {
        $header.find('.nav-list-item.has-dropdown').removeClass('-temporarily-disable-dropdowns');
      }, 500)
    }
  }
  function _closeNav() {
      console.log('closed');
    var $header = $('.site-header');
    if($header.hasClass('-nav-open')) {
      $header
        .removeClass('-nav-open')
        .addClass('-nav-closed');
    }
  }

  // Track ajax pages in Analytics
  function _trackPage() {
    if (typeof ga !== 'undefined') { ga('send', 'pageview', document.location.href); }
  }

  // Track events in Analytics
  function _trackEvent(category, action) {
    if (typeof ga !== 'undefined') { ga('send', 'event', category, action); }
  }

  // Called in quick succession as window is resized
  function _resize() {
    screenWidth = document.documentElement.clientWidth;
    breakpoint_small = (screenWidth > breakpoint_array[0]);
    breakpoint_medium = (screenWidth > breakpoint_array[1]);
    breakpoint_large = (screenWidth > breakpoint_array[2]);
  }

  // Public functions
  return {
    init: _init,
    resize: _resize,
    scrollBody: function(section, duration, delay) {
      _scrollBody(section, duration, delay);
    }
  };

})(jQuery);

// Fire up the mothership
jQuery(document).ready(Main.init);

// Zig-zag the mothership
jQuery(window).resize(Main.resize);
