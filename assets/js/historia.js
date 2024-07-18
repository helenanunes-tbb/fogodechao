jQuery(function() {
    var isMobile = /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent);
    var isiPad	= /iPad/i.test(navigator.userAgent);
    var $tooltips = [];
    var $bcon = jQuery('.bubble_content');
    var footer = jQuery('footer#footer_fogo');

    jQuery('.fdc-historia-tooltip').each(function(k, v) {
        $tooltips.push(jQuery(v).html());
    })

    footer.addClass('floating_footer');

	jQuery('#pagepiling').pagepiling({
    menu: '#menu',
        verticalCentered: false,
        animateAnchor: false,
        navigation: {
            'position': 'right',
            'tooltips': $tooltips,
            'textColor': '#dddacf',
            'bulletsColor': '#f3f2ed',
        },
        
        onLeave: function(index, nextIndex, direction) {

            var page = jQuery('#fdc-historia-page--' + nextIndex);
            var menu = jQuery('#nav');
            var footer = jQuery('footer#footer_fogo');

            if (nextIndex == 1) {
                menu.removeClass('no-top').addClass('top');
                pinned(menu);
            } else {
                menu.removeClass('top').addClass('no-top');
                if (direction == 'up') {
                    pinned(menu);
                } else if('down') {
                    unpinned(menu)
                }
            }

            footer.removeClass('shiftUp');

            pauseVid();
            showBubble(page);

        },
        afterRender: function() {
            var page = jQuery('#fdc-historia-page--1');
            checkVid(page);
            addArrows();
        },
        afterLoad: function(anchorLink, index) {
            var page = jQuery('#fdc-historia-page--' + index);
            checkVid(page);
        }
    });

    jQuery('.btn.history').bind('click', function(e) {
        e.preventDefault();
        jQuery.fn.pagepiling.moveSectionDown();
    });

    jQuery('a[data-rel^=lightcase]').lightcase({
        transition : 'fade',
        video : { 	 
             width : 1920 ,
            height : 1080 ,
            poster : '' ,
            preload : 'auto' ,
            controls : true ,
            autobuffer : true ,
            autoplay : true ,
            loop : false  			     
        }   
     });

    /**
     * Check Videos
     */	
    function checkVid(page) {
        var v = page.find('.fdc-historia--video');
        if (v.length > 0) {
            if (isMobile){
            }else if(isiPad){
                v.get(0).play();
                v.fadeIn('200');
            
            }else {
                v.get(0).play();
                v.fadeIn('200');
            }
        }
    }

    function pauseVid() {
        jQuery('.fdc-historia--video').get(0).pause();
        jQuery('.fdc-historia--video').delay('400');
        //jQuery('.fdc-historia--video').delay('400').fadeOut('200');
     }
    
    
    function showBubble(page) {

        var status = page.data('bubble');
        var bubble = jQuery('.bubble_box');
    
        if (status === 'no') {
            bubble.addClass('bubble_hide');
        } else {
            var contentBubble = page.find('.content-bubble');
            if (contentBubble.length > 0 ) {
                bubble.find('.bubble_content').html(contentBubble.html());
            }
            bubble.removeClass('bubble_hide');
        }
    }
    
    /**
     * Up and Down Arrows
     */
        
    function addArrows() {
    
        $('#pp-nav ul').before( "<span class='top-nav-arrow'><i class='dashicons dashicons-arrow-up-alt2'></i></span>" );
        $('#pp-nav ul').after( "<span class='bottom-nav-arrow'><i class='dashicons dashicons-arrow-down-alt2'></i></span>" );
        
        $('.top-nav-arrow').bind('click', function(e) {
                $.fn.pagepiling.moveSectionUp();
            });
            
        $('.bottom-nav-arrow').bind('click', function(e) {
                $.fn.pagepiling.moveSectionDown();
            });
    }






    jQuery('.alt-footer').bind('click', function(e) {
        e.preventDefault();
        footer.addClass('shiftUp');
    })
});
//jQuery( window ).ready(function() {
/*$(window).on('load', function () {
    jQuery('#page-loader').fadeOut("slow", function () {
        jQuery(this).css({display:"none"});
    });
});*/
jQuery('#page-loader').fadeOut("slow", function () {
        jQuery(this).css({display:"none"});
    });

