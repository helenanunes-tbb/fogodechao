jQuery(function() {

    jQuery('.datepicker').pickadate({
        monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        weekdaysShort: ['DOM','SEG', 'TER', 'QUA', 'QUI', 'SEX', 'SAB'],
        today: 'Hoje',
        clear: 'Apagar',
        formatSubmit: 'dd/mm/yyyy',
        container: 'body',
        selectMonths: true,
        selectYears: 150
    });

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

    // jQuery(document).on('nfFormReady', function(e, layoutView) {
    //     jQuery('nf-fields-wrap').addClass('row');
    //     jQuery('input[name="nome"]').closest('nf-field').addClass('col-12 col-md-6');
    //     jQuery('input[name="sobrenome"]').closest('nf-field').addClass('col-12 col-md-6');
    //     jQuery('input[name="endereco"]').closest('nf-field').addClass('col-12 col-md-6');
    //     jQuery('input[name="cidade"]').closest('nf-field').addClass('col-12 col-md-6');
    //     jQuery('input[name="estado"]').closest('nf-field').addClass('col-7 col-md-4');
    //     jQuery('input[name="cep"]').closest('nf-field').addClass('col-5 col-md-2');
    //     jQuery('input[name="email"]').closest('nf-field').addClass('col-12 col-md-6');
    //     jQuery('input[name="telefone"]').closest('nf-field').addClass('col-12 col-md-6');
    //     jQuery('.fdc-eclub--local').closest('nf-field').addClass('col-12 col-md-6');
    //     jQuery('.fdc-eclub--dtaniversario').closest('nf-field').addClass('col-12 col-md-6');
    //     jQuery('.fdc-eclub--acordo').closest('nf-field').addClass('col-12');
    //     jQuery('.fdc-eclub--enviar').closest('nf-field').addClass('col-12');

    //     if (jQuery('.fdc-eclub--acordo').is(':checked')) {
    //         jQuery('.fogo-radio-form').find('label').removeClass('unchecked').addClass('checked');
    //     }

    //     jQuery('.fdc-eclub--acordo').on('change', function() {
    //         if (jQuery(this).is(':checked')) {
    //             jQuery('.fogo-radio-form').find('label').removeClass('unchecked').addClass('checked');
    //         } else {
    //             jQuery('.fogo-radio-form').find('label').removeClass('checked').addClass('unchecked');
    //         }
    //     });


    // })
});