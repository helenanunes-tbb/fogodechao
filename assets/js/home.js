jQuery(function() {
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
});