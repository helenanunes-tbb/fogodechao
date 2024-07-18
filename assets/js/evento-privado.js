jQuery(function() {
    
    jQuery('.dtpicker--hour').pickatime({
        container: 'body',
        formatSubmit: 'H:i',
    });

    jQuery('.dtpicker--date').pickadate({
        container: 'body',
        formatSubmit: 'yyyy-mm-dd',
        selectYears: true,
        selectMonths: true
    });
    
})
