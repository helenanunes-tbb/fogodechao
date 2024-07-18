jQuery(function() {
    jQuery('.submenu-nav-mobile-select').change(function(e) {
        var link = jQuery(this).val();
        window.document.location = link;
    });
});