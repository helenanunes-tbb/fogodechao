jQuery(function() {

    var n = jQuery('#nav');
    var current = jQuery(window).scrollTop();
    
    noTop(current, n);

    jQuery(window).scroll(function() {

        var top = jQuery(this).scrollTop();

        if (top == 0) {

            n.removeClass('no-top').addClass('top').addClass('pinned');
            current = 0;

        } else {
            
            noTop(current, n);

            if (current < jQuery(this).scrollTop()) { 
                unpinned(n);
            } else {
                pinned(n);
            }
        }

        current = top;
    });

    jQuery('#btnMobileMenu, .closeNav').click(function(e) {
        e.preventDefault();
        if (jQuery('#mainNavContent').hasClass('open-nav')) {
            enableScroll();
            jQuery('#mainNavContent').removeClass('open-nav').addClass('close-nav');
        } else {
            disableScroll();
            jQuery('#mainNavContent').removeClass('close-nav').addClass('open-nav');
            
        }
        
    })

})
function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
        e.preventDefault();
    e.returnValue = false;  
  }
  
  function preventDefaultForScrollKeys(e) {
      if (keys[e.keyCode]) {
          preventDefault(e);
          return false;
      }
  }

function disableScroll() {
    if (window.addEventListener) // older FF
        window.addEventListener('DOMMouseScroll', preventDefault, false);
    window.onwheel = preventDefault; // modern standard
    window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
    window.ontouchmove  = preventDefault; // mobile
    document.onkeydown  = preventDefaultForScrollKeys;
  }
  
  function enableScroll() {
      if (window.removeEventListener)
          window.removeEventListener('DOMMouseScroll', preventDefault, false);
      window.onmousewheel = document.onmousewheel = null; 
      window.onwheel = null; 
      window.ontouchmove = null;  
      document.onkeydown = null;  
  }

function noTop(top, elem) {
    if (top > 108) {
        elem.addClass('no-top').removeClass('top');
    } else {
        elem.removeClass('no-top').addClass('top');
    }
}

function pinned(elem) {
    elem.removeClass('unpinned').addClass('pinned');
}

function unpinned(elem) {
    elem.removeClass('pinned').addClass('unpinned');
}