import './bootstrap';
import * as jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

// وارد کردن سایر کتابخانه‌ها
// وارد کردن Persian Date
import persianDate from 'persian-date';

// تنظیم Persian Date به صورت سراسری (اختیاری)
window.persianDate = persianDate;
import "persian-datepicker/dist/js/persian-datepicker.js";
var  n = new persianDate;
console.log(n)
window.$('.data-picker-p').persianDatepicker();

import "./dashboard.js";
