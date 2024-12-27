jQuery(document).ready(function () {
    // const nowDate = moment().format('YYYY/MM/DD');
    jQuery('#inlineExampleAlt').persianDatepicker({
        autoClose: true,
        // initialValue: true, // مقدار اولیه فعال
        altFormat: 'YYYY/MM/DD',
        format: 'YYYY/MM/DD',
        initialValueType: 'persian', // نوع مقدار اولیه (شمسی)
    });
});
