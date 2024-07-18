jQuery(function() {
    jQuery('#telefone').mask('(99) 99999-9999');
    jQuery('#telefone').focusout(function(){
        var phone, element;
        element =jQuery(this);
        element.unmask();
        phone = element.val().replace(/\D/g, '');
        if(phone.length > 10) {
            element.mask("(99) 99999-9999");
        } else {
            element.mask("(99) 9999-9999");
        }
    }).trigger('focusout');
});