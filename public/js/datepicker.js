document.addEventListener("DOMContentLoaded", function () {

    jQuery(document).ready(function () {
        // const nowDate = moment().format('YYYY/MM/DD');
        jQuery('#inlineExampleAlt').persianDatepicker({
            autoClose: true,
            initialValue: false, // مقدار اولیه فعال
            altFormat: 'YYYY/MM/DD',
            format: 'YYYY/MM/DD',
            onSelect: function (date) {
                // use $datepicker as needed here...
                console.log(date);
                Livewire.dispatch('dateUpdated', {data:date} );


            }
        });
    });
});
