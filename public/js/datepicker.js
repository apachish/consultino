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
    $(".month_select").on("change",function() {
        const month = event.target.value;
        const id = event.target.id;
        const id_year = id.replace("month", "year");
        const id_day = id.replace("month", "day");//matrix-field-date-0-day-ts-control
        const year = $("#"+id_year).val();
        // Make an AJAX request
        $.ajax({
            url: '/panel/admin/load-day?month='+month+"&year="+year, // Sample API endpoint
            method: 'get',
            dataType: 'json',
            success: function(data) {
                const daySelect = document.querySelector("#"+id_day);

                // Update the content on success
                Object.entries(data).forEach(([key, value]) => {
                    const option = document.createElement('option');
                    option.value = key;
                    option.textContent = value;
                    console.log(daySelect);
                    console.log(id_day);
                    console.log(option);
                    daySelect.appendChild(option);
                });
                // ارسال رویداد تغییر
                const event = new Event('change', { bubbles: true });
                daySelect.dispatchEvent(event);
            },
            error: function(error) {
                // Handle errors
                console.error('Error:', error);
            }
        });
    });
    // document.querySelector('#month_select').addEventListener('change', function (event) {
    //     const month = event.target.value;
    //
    //     fetch(`/admin/load-day?month=${month}`)
    //         .then(response => response.json())
    //         .then(data => {
    //             const citySelect = document.querySelector('[name="city"]');
    //             citySelect.innerHTML = ''; // حذف مقادیر قبلی
    //
    //             Object.entries(data).forEach(([key, value]) => {
    //                 const option = document.createElement('option');
    //                 option.value = key;
    //                 option.textContent = value;
    //                 citySelect.appendChild(option);
    //             });
    //         });
    // });
});
