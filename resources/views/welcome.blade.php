<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>مشاوره زندگی</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if ( false && file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <link rel='dns-prefetch' href='//fonts.googleapis.com' />
            <link rel="alternate" type="application/rss+xml" title="Consultino &raquo; خوراک" href="https://rosetheme.us/consultino/feed/" />
            <link rel="alternate" type="application/rss+xml" title="Consultino &raquo; خوراک دیدگاه‌ها" href="https://rosetheme.us/consultino/comments/feed/" />
            <script>
                window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/rosetheme.us\/consultino\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"}};
                /*! This file is auto-generated */
                !function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
            </script>
            <link rel='stylesheet' id='mailchimpSF_main_css-css' href='https://rosetheme.us/consultino/consultino/?mcsf_action=main_css&#038;ver=6.6.2' media='all' />
            <!--[if IE]>
            <link rel='stylesheet' id='mailchimpSF_ie_css-css' href='https://rosetheme.us/consultino/wp-content/plugins/mailchimp/css/ie.css?ver=6.6.2' media='all' />
            <![endif]-->
            <style id='wp-emoji-styles-inline-css'>

                img.wp-smiley, img.emoji {
                    display: inline !important;
                    border: none !important;
                    box-shadow: none !important;
                    height: 1em !important;
                    width: 1em !important;
                    margin: 0 0.07em !important;
                    vertical-align: -0.1em !important;
                    background: none !important;
                    padding: 0 !important;
                }
            </style>
            <link rel='stylesheet' id='wp-block-library-rtl-css' href='https://rosetheme.us/consultino/wp-includes/css/dist/block-library/style-rtl.min.css?ver=6.6.2' media='all' />
            <style id='wp-block-library-theme-inline-css'>
                .wp-block-audio :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio :where(figcaption){color:#ffffffa6}.wp-block-audio{margin:0 0 1em}.wp-block-code{border:1px solid #ccc;border-radius:4px;font-family:Menlo,Consolas,monaco,monospace;padding:.8em 1em}.wp-block-embed :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed :where(figcaption){color:#ffffffa6}.wp-block-embed{margin:0 0 1em}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:#ffffffa6}:root :where(.wp-block-image figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme :root :where(.wp-block-image figcaption){color:#ffffffa6}.wp-block-image{margin:0 0 1em}.wp-block-pullquote{border-bottom:4px solid;border-top:4px solid;color:currentColor;margin-bottom:1.75em}.wp-block-pullquote cite,.wp-block-pullquote footer,.wp-block-pullquote__citation{color:currentColor;font-size:.8125em;font-style:normal;text-transform:uppercase}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;font-style:normal;position:relative}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large,.wp-block-quote.is-style-plain{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-search__button{border:1px solid #ccc;padding:.375em .625em}:where(.wp-block-group.has-background){padding:1.25em 2.375em}.wp-block-separator.has-css-opacity{opacity:.4}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto}.wp-block-separator.has-alpha-channel-opacity{opacity:1}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table{margin:0 0 1em}.wp-block-table td,.wp-block-table th{word-break:normal}.wp-block-table :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table :where(figcaption){color:#ffffffa6}.wp-block-video :where(figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video :where(figcaption){color:#ffffffa6}.wp-block-video{margin:0 0 1em}:root :where(.wp-block-template-part.has-background){margin-bottom:0;margin-top:0;padding:1.25em 2.375em}
            </style>
            <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='https://rosetheme.us/consultino/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css?ver=9.1.5' media='all' />
            <link rel='stylesheet' id='wc-blocks-style-rtl-css' href='https://rosetheme.us/consultino/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style-rtl.css?ver=9.1.5' media='all' />
            <style id='classic-theme-styles-inline-css'>
                /*! This file is auto-generated */
                .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
            </style>
            <style id='global-styles-inline-css'>
                :root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
                :where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
                :where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
                :root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
            </style>
            <link rel='stylesheet' id='contact-form-7-css' href='https://rosetheme.us/consultino/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.9.8' media='all' />
            <link rel='stylesheet' id='contact-form-7-rtl-css' href='https://rosetheme.us/consultino/wp-content/plugins/contact-form-7/includes/css/styles-rtl.css?ver=5.9.8' media='all' />
            <link rel='stylesheet' id='radiantthemeswidget-css' href='https://rosetheme.us/consultino/wp-content/uploads/radiantthemeswidget.css?ver=6.6.2' media='all' />
            <link rel='stylesheet' id='woocommerce-layout-rtl-css' href='https://rosetheme.us/consultino/wp-content/plugins/woocommerce/assets/css/woocommerce-layout-rtl.css?ver=7.3.0' media='all' />
            <link rel='stylesheet' id='woocommerce-smallscreen-rtl-css' href='https://rosetheme.us/consultino/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen-rtl.css?ver=7.3.0' media='only screen and (max-width: 768px)' />
            <link rel='stylesheet' id='woocommerce-general-rtl-css' href='https://rosetheme.us/consultino/wp-content/plugins/woocommerce/assets/css/woocommerce-rtl.css?ver=7.3.0' media='all' />
            <style id='woocommerce-inline-inline-css'>
                .woocommerce form .form-row .required { visibility: visible; }
            </style>
            <link rel='stylesheet' id='woo-variation-swatches-css' href='https://rosetheme.us/consultino/wp-content/plugins/woo-variation-swatches/assets/css/frontend.min.css?ver=1675257469' media='all' />
            <style id='woo-variation-swatches-inline-css'>
                :root {
                    --wvs-tick:url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 2px rgb(0 0 0 / .8))' xmlns='http://www.w3.org/2000/svg'  viewBox='0 0 30 30'%3E%3Cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='4' d='M4 16L11 23 27 7'/%3E%3C/svg%3E");

                    --wvs-cross:url("data:image/svg+xml;utf8,%3Csvg filter='drop-shadow(0px 0px 5px rgb(255 255 255 / .6))' xmlns='http://www.w3.org/2000/svg' width='72px' height='72px' viewBox='0 0 24 24'%3E%3Cpath fill='none' stroke='%23ff0000' stroke-linecap='round' stroke-width='0.6' d='M5 5L19 19M19 5L5 19'/%3E%3C/svg%3E");
                    --wvs-single-product-item-width:30px;
                    --wvs-single-product-item-height:30px;
                    --wvs-single-product-item-font-size:16px}
            </style>
            <link rel='stylesheet' id='bootstrap-css' href='https://rosetheme.us/consultino/wp-content/themes/consultino/assets/css/bootstrap.min.css?ver=1731229253' media='all' />
            <link rel='stylesheet' id='consultino-fonts-css' href='https://fonts.googleapis.com/css?family=IranYekan%3Aregular%7CEstedad-Bold%3A600%7CEstedad-Bold%3A600%7CEstedad-Bold%3A600%7CEstedad-Bold%3A600%7CEstedad-Bold%3A600%7CEstedad-Bold%3A600%7CIranYekan%3Aregular%7CIranYekan%3A600%7CIranYekan%3A600%7CSora%3A600%7CSora%3A600%7CSora%3A600%7CSora%3A600&#038;subset=latin&#038;display=fallback' media='all' />
            <link rel='stylesheet' id='consultino-custom-css' href='/css/consultino-custom.css?ver=1731229253' media='all' />
            <link rel='stylesheet' id='consultino-menu-css' href='https://rosetheme.us/consultino/wp-content/themes/consultino/assets/css/header-menu.css?ver=1731229253' media='all' />
            <link rel='stylesheet' id='consultino-style-css' href='https://rosetheme.us/consultino/wp-content/themes/consultino/style.css?ver=1731229253' media='all' />
            <link rel='stylesheet' id='elementor-icons-css' href='https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.17.0' media='all' />
            <link rel='stylesheet' id='elementor-frontend-css' href='https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/css/frontend-lite-rtl.min.css?ver=3.24.4' media='all' />
            <link rel='stylesheet' id='elementor-post-5-css' href='https://rosetheme.us/consultino/wp-content/uploads/elementor/css/post-5.css?ver=1727621209' media='all' />
            <link rel='stylesheet' id='elementor-pro-css' href='https://rosetheme.us/consultino/wp-content/plugins/elementor-pro/assets/css/frontend-lite-rtl.min.css?ver=3.24.2%20%20' media='all' />
            <link rel='stylesheet' id='font-awesome-5-all-css' href='https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=3.24.4' media='all' />
            <link rel='stylesheet' id='font-awesome-4-shim-css' href='https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.24.4' media='all' />
            <link rel='stylesheet' id='elementor-post-38217-css' href='{{url("/css/post-38217.css")}}' media='all' />
            <script src="https://rosetheme.us/consultino/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
            <script src="https://rosetheme.us/consultino/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
            <script src="https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.24.4" id="font-awesome-4-shim-js"></script>
            <link rel="https://api.w.org/" href="https://rosetheme.us/consultino/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://rosetheme.us/consultino/wp-json/wp/v2/pages/38217" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://rosetheme.us/consultino/xmlrpc.php?rsd" />
            <link rel="stylesheet" href="https://rosetheme.us/consultino/wp-content/themes/consultino/rtl.css" media="screen" /><meta name="generator" content="WordPress 6.6.2" />
            <meta name="generator" content="WooCommerce 7.3.0" />
            <link rel="canonical" href="https://rosetheme.us/consultino/life-coach/" />
            <link rel='shortlink' href='https://rosetheme.us/consultino/?p=38217' />
            <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://rosetheme.us/consultino/wp-json/oembed/1.0/embed?url=https%3A%2F%2Frosetheme.us%2Fconsultino%2Flife-coach%2F" />
            <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://rosetheme.us/consultino/wp-json/oembed/1.0/embed?url=https%3A%2F%2Frosetheme.us%2Fconsultino%2Flife-coach%2F&#038;format=xml" />
            <style type='text/css'> .ae_data .elementor-editor-element-setting {
                    display:none !important;
                }
            </style>		<!--Customizer CSS-->
            <style type="text/css">


            </style>
            <!--/Customizer CSS-->
            <meta name="fontiran.com:license" content="NB76C">
            <link rel="stylesheet" type="text/css" href="https://rosetheme.us/consultino/wp-content/themes/consultino/rosetheme-typo/pink.css" />
            <style>
                .IRANSansWeb_Bold {font-family:IranYekan;}
            </style>
            <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
            <meta name="generator" content="Powered by Slider Revolution 6.7.17 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
            <link rel="icon" href="https://rosetheme.us/consultino/wp-content/uploads/2022/08/MicrosoftTeams-image-1.png" sizes="32x32" />
            <link rel="icon" href="https://rosetheme.us/consultino/wp-content/uploads/2022/08/MicrosoftTeams-image-1.png" sizes="192x192" />
            <link rel="apple-touch-icon" href="https://rosetheme.us/consultino/wp-content/uploads/2022/08/MicrosoftTeams-image-1.png" />
            <meta name="msapplication-TileImage" content="https://rosetheme.us/consultino/wp-content/uploads/2022/08/MicrosoftTeams-image-1.png" />
            <script>function setREVStartSize(e){
                    //window.requestAnimationFrame(function() {
                    window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
                    window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
                    try {
                        var pw = document.getElementById(e.c).parentNode.offsetWidth,
                            newh;
                        pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
                        e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
                        e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
                        e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
                        e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
                        e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
                        e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
                        e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
                        if(e.layout==="fullscreen" || e.l==="fullscreen")
                            newh = Math.max(e.mh,window.RSIH);
                        else{
                            e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                            for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
                            e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                            e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                            for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

                            var nl = new Array(e.rl.length),
                                ix = 0,
                                sl;
                            e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                            e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                            e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                            e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
                            for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                            sl = nl[0];
                            for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
                            var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
                            newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
                        }
                        var el = document.getElementById(e.c);
                        if (el!==null && el) el.style.height = newh+"px";
                        el = document.getElementById(e.c+"_wrapper");
                        if (el!==null && el) {
                            el.style.height = newh+"px";
                            el.style.display = "block";
                        }
                    } catch(e){
                        console.log("Failure at Presize of Slider:" + e)
                    }
                    //});
                };</script>
            <style id="wp-custom-css">
                /*** Landing Page Start ***/
                .wraper_error_main.style-one .error_main .btn {
                    font-family:iransans !important ;
                }
                @media (min-width:1025px){
                    .column-space-two .elementor-column-gap-default{
                        column-gap: 60px;
                    }
                }
                .full-width-retina .rt-link .rt-retina-image .rt-retina-image-container img{
                    width:100%;
                    height:100%;
                }
                .page-id-51 .rt-header.style2.mobile-header-style1.fixed .rt-box-holder{
                    width:100%;
                    max-width:1620px;
                }
                .change-width .change-width-div .elementor-element, .change-width .change-width-div .elementor-element .change-width-inner-div .elementor-element{
                    width:100%;
                    max-width:1620px;
                }
                .change-portfolio-style .portfolio-style-one .rt-portfolio-box-item .rt-portfolio-box-img{
                    padding-top: 50%;
                }
                .change-portfolio-style .portfolio-style-one .swiper-slide img{
                    object-position: top center;
                }
                .width-change .elementor-container{
                    max-width:1620px;
                }
                .typo-change .rt-title-heading{
                    font-weight:600 !important;
                    line-height:66px!important;
                    letter-spacing:-0.16px !important;
                }
                .shape-position-change .rt-underline-txt{
                    bottom:-15px;
                }

                .change-height .swiper-wrapper{
                    height:289px;
                }

                .change-height-two .swiper-wrapper{
                    height:204px;
                }

                .change-height-three .swiper-wrapper{
                    height:301px;
                }

                .change-height-four .swiper-wrapper{
                    width:550px !important;
                    height:330px;
                }

                .set-box-shadow img{
                    box-shadow: 0 10px 20px rgb(0 0 0 / 10%)
                }

                .set-box-shadow .swiper-slide-inner{
                    padding:30px 0;
                }

                .landing-font-change .rt-textappear-line{
                    line-height:74px !important;
                }

                .landing-font-change .elementor-heading-title{
                    font-family: "Style Script", Sans-serif !important;
                }

                /*** Landing Page End ***/
                /*** About Company Start ***/
                .about-company-hover-effect .arrow-icon .elementor-icon svg{
                    opacity:0;
                    transition:all 0.5s ease;
                    -webkit-transition:all 0.5s ease;
                }
                .about-company-hover-effect:hover .arrow-icon .elementor-icon svg{
                    opacity:1;
                }
                .about-company-hover-effect .arrow-icon .elementor-icon svg path{
                    transition:all 0.5s ease;
                    -webkit-transition:all 0.5s ease;
                    transition-delay:0.2s;
                }
                .about-company-hover-effect:hover .arrow-icon .elementor-icon svg path{
                    transform:translate3d(5px, 0, 0);
                    -webkit-transform:translate3d(5px, 0, 0);
                }
                /*** About Company End ***/

                /*** About Simple Start ***/
                .fixed-column-width .elementor-column{
                    max-width:1400px;
                }
                .change-underline-position .rt-underline-txt{
                    bottom:-15px;
                }
                /** Hover Effect Start **/
                .about-simple-hover-main .hover-box{
                    border:1px solid #CFCFCF !important;
                    border-radius:0 0 4px 4px;
                    transition:all 0.5s ease;
                    -webkit-transition:all 0.5s ease;
                }
                .about-simple-hover-main .hover-text-box{
                    border-style:solid;
                    border-width:1px 1px 0 1px;
                    border-color:#CFCFCF;
                    border-radius:4px 4px 0 0;
                    transition:all 0.5s ease;
                    -webkit-transition:all 0.5s ease;
                }
                .about-simple-hover-main:hover .hover-text-box{
                    border-color:#ffffff;
                }
                .about-simple-hover-main:hover .hover-box{
                    background-color:#FF906C;
                    border:1px solid #FF906C !important;
                }

                /** Hover Effect End **/
                /** Newsletter Start **/
                .about-simple-newsletter-main p{
                    text-align: center;
                }
                .about-simple-mail{
                    height: 53px;
                    background: #FFFFFF;
                    border: 1px solid #C5C5C5 !important;
                    border-radius: 4px;
                    padding:0 20px;
                    margin-right:15px;
                }
                .about-simple-btn{
                    height: 53px;
                    background: #0378E9;
                    box-shadow: 20px 20px 50px rgba(239, 247, 255, 0.5);
                    border:0;
                    border-radius: 4px;
                    padding:0 30px;
                    color:#ffffff;
                    font-weight:600;
                    line-height:1px;
                }

                @media (max-width:620px){
                    .about-simple-mail, .about-simple-btn{
                        width:100%;
                    }
                    .about-simple-mail{
                        margin:0;
                        margin-bottom:10px;
                    }
                }

                /** Newsletter End **/
                /*** About Simple End ***/

                /*** Service Simple Start ***/

                .service-simple-underline .rt-underline-txt{
                    bottom:7px;
                }

                /*** Service Simple End ***/

                @media only screen and (max-width: 767px) {
                    .counter-custom .elementor-counter .elementor-counter-number-prefix{
                        display:none;
                    }
                }

                .prev-next-off .elementor-swiper-button-prev,
                .prev-next-off .elementor-swiper-button-next{
                    display:none;
                }
                .prev-next-off .swiper-pagination-bullet{
                    width:8px;
                    height:8px;
                }

                .rt-blog-thirteen .meta-holder{
                    display:inline-flex;
                }

                .rt-blog-thirteen .author-attributes{
                    display:flex;
                    align-items:center;
                    align-content:center;
                    flex-wrap:wrap;
                }

                .rt-blog-thirteen .author-attributes .author,
                .rt-blog-thirteen .author-attributes .date{
                    padding:0;
                    margin:0;
                    width:100%;
                }

                .rt-blog-thirteen .author-avatar{
                    padding-right:15px;
                }
                .image-shadow img{
                    filter: drop-shadow(3px 4px 42px rgba(0,0,0,0.07));
                }

                /*** Arrow Start ***/

                .hover-box .elementor-icon-list-icon svg{
                    transform: translateX(0px);
                    transition:all 0.3s ease;
                }
                .hover-box:hover .elementor-icon-list-icon svg{
                    transform: translateX(8px);
                    transition:all 0.3s ease;
                }
                .hover-box-static .elementor-icon-list-icon svg{
                    transform: translateX(0px);
                    transition:all 0.3s ease;
                }
                .hover-box-static:hover .elementor-icon-list-icon svg{
                    transform: translateX(8px);
                    transition:all 0.3s ease;
                }
                /*** Arrow End ***/
                .about-simple-accodian .radiantthemes-accordion.element-one .mb-0 {
                    padding:6px 10px 6px 0;
                }

                tspan { white-space:pre }
                .play-cir01 { fill: #ffffff }
                .play01 { fill: #18191d }

                .hover-icon-box:hover svg {
                    filter: brightness(0) invert(1);
                }

                .hover-icon-box:hover h6, .hover-icon-box:hover .elementor-widget-container {
                    color:#fff;
                }		</style>
        @endif
    </head>
    <body class="rtl page-template page-template-elementor_header_footer page page-id-38217 wp-custom-logo wp-embed-responsive theme-consultino woocommerce-no-js woo-variation-swatches wvs-behavior-blur wvs-theme-consultino wvs-show-label wvs-tooltip consultino consultino-consultino elementor-default elementor-template-full-width elementor-kit-5 elementor-page elementor-page-38217">
    <!-- overlay -->
    <div class="overlay"></div>
    <!-- overlay -->

    <!-- scrollup -->
    <div class="scrollup right">
        <svg height="20px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="20px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <polygon points="396.6,352 416,331.3 256,160 96,331.3 115.3,352 256,201.5 " />
            </svg>
    </div>
    <!-- scrollup -->
    <div class="consultino-website-layout full-width body-inner"><header id="header" class="rt-dark rt-submenu-light"><div class="rt-header-inner">		<div data-elementor-type="section" data-elementor-id="38261" class="elementor elementor-38261">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-146fdf6b elementor-section-stretched elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="146fdf6b" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6f4528cc" data-id="6f4528cc" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-1665fef2 elementor-align-right elementor-icon-list--layout-inline change-font elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1665fef2" data-element_type="widget" data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <link rel="stylesheet" href="https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/css/widget-icon-list-rtl.min.css">		<ul class="elementor-icon-list-items elementor-inline-items">
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <a href="http://ایران%20،%20تهران%20،%20خیابان%20ولیعصر">

												<span class="elementor-icon-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#466DB4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>						</span>
                                                        <span class="elementor-icon-list-text">ایران ، تهران ، خیابان ولیعصر</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6f4775cd" data-id="6f4775cd" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6b03e072 elementor-align-left elementor-icon-list--layout-inline elementor-list-item-link-inline change-font elementor-widget elementor-widget-icon-list" data-id="6b03e072" data-element_type="widget" data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items elementor-inline-items">
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <a href="#">

												<span class="elementor-icon-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#466DB4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>						</span>
                                                        <span class="elementor-icon-list-text">سوالی دارید؟ تلفن 09121234567</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <a href="#">

												<span class="elementor-icon-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#466DB4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>						</span>
                                                        <span class="elementor-icon-list-text">ایمیل: info@examples.com</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-4eb60d2f elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4eb60d2f" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-42117c90" data-id="42117c90" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-7bd4069f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7bd4069f" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3d7d6a97" data-id="3d7d6a97" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-5cc78d7e change-font elementor-widget elementor-widget-radiant-header_custom_menu" data-id="5cc78d7e" data-element_type="widget" data-widget_type="radiant-header_custom_menu.default">
                                                        <div class="elementor-widget-container">
                                                            <header class="rt-header logo-left  style3 mobile-header-style1 fixed">
                                                                <div class="rt-header-holder rt-box-holder mobile-logo-column">




                                                                    <div class="logo-holder">
                                                                        <div class="logo">
                                                                            <a href="/">
                                                                                <span class="logo-default">
                                                                                    <img src="/images/logo-s.png" alt="logo" width="220" height="42">
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rt-navbar-menu menu-center">
                                                                        <nav class="apr-nav-menu--main apr-nav-menu--layout-horizontal hover-underline e--pointer-none">
                                                                            <ul id="menu-main-menu" class="mega-menu"><li id="menu-item-41831" class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-41831 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">خانه ها<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="41825" class="elementor elementor-41825">
                                                                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-1f821f6 elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="1f821f6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c9e3fb8" data-id="c9e3fb8" data-element_type="column">
                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-0cf427b rt-mega-sub-text elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0cf427b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-9f3962b" data-id="9f3962b" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-9fad75e elementor-widget elementor-widget-heading" data-id="9fad75e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <style>/*! elementor - v3.10.2 - 29-01-2023 */
                                                                                                                                            .elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/">آژانس خلاق</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-8df6f1c elementor-widget elementor-widget-heading" data-id="8df6f1c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/life-coach/">مشاوره زندگی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-6e850af elementor-widget elementor-widget-heading" data-id="6e850af" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/software-business/">تجاری نرم افزار</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-6eafedf elementor-widget elementor-widget-heading" data-id="6eafedf" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/personal-finance/">امور مالی شخصی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-8e78dcd elementor-widget elementor-widget-heading" data-id="8e78dcd" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/broadband/">IPTV</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-040933c elementor-widget elementor-widget-heading" data-id="040933c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/investment/">سرمایه گذاری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-0b44676 elementor-widget elementor-widget-heading" data-id="0b44676" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/app-demo/">اپلیکیشن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-3f937d8 elementor-widget elementor-widget-heading" data-id="3f937d8" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/attorney/">وکالت</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1ed8052" data-id="1ed8052" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-574724d elementor-widget elementor-widget-heading" data-id="574724d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/digital-studio/">استادیو دیجیتال</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-28b8a8b elementor-widget elementor-widget-heading" data-id="28b8a8b" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/consultant/">مشاوره</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-bbba898 elementor-widget elementor-widget-heading" data-id="bbba898" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/corporate/">شرکتی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-8d63b03 elementor-widget elementor-widget-heading" data-id="8d63b03" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/marketing/">بازاریابی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-65b748a elementor-widget elementor-widget-heading" data-id="65b748a" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/fitness/">بدنسازی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-45f0bbc elementor-widget elementor-widget-heading" data-id="45f0bbc" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/project-management/">مدیریت پروژه</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-e2f7425 elementor-widget elementor-widget-heading" data-id="e2f7425" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/digital-payment/">پرداخت دیجیتال</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-25799dd elementor-widget elementor-widget-heading" data-id="25799dd" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/essential-oil/">اسانس گیاهی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-4ba3ad4" data-id="4ba3ad4" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-550458e elementor-widget elementor-widget-heading" data-id="550458e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/logistics/">حمل و نقل</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-cf0cf5e elementor-widget elementor-widget-heading" data-id="cf0cf5e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/spa/">آرایشی و زیبایی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-faa7a6c elementor-widget elementor-widget-heading" data-id="faa7a6c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/construction/">ساخت و ساز ساختمان</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-8010096 elementor-widget elementor-widget-heading" data-id="8010096" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/digital-marketing/">بازاریابی دیجیتال</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-9615a1d elementor-widget elementor-widget-heading" data-id="9615a1d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/doctor/">پزشکی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-4f46e34 elementor-widget elementor-widget-heading" data-id="4f46e34" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/pet-care/">حیوانات خانگی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-770d279 elementor-widget elementor-widget-heading" data-id="770d279" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/agency/">آژانس</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-536c37c elementor-widget elementor-widget-heading" data-id="536c37c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/saas/">نرم افزار</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-b828415" data-id="b828415" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-9bd6073 elementor-widget elementor-widget-heading" data-id="9bd6073" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/consulting-company/">مشاوره مالی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-468010c elementor-widget elementor-widget-heading" data-id="468010c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/handyman/">صنایع دستی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-bf06aac elementor-widget elementor-widget-heading" data-id="bf06aac" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/modern-business/">کسب و کار مدرن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-1b51154 elementor-widget elementor-widget-heading" data-id="1b51154" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/business-consultant/">مشاوره کسب و کار</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-ed6c5c3 elementor-widget elementor-widget-heading" data-id="ed6c5c3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/advisor/">مشاوره تلفنی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-481f930 elementor-widget elementor-widget-heading" data-id="481f930" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/it-servicess/">خدمات آی تی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-7c69614 elementor-widget elementor-widget-heading" data-id="7c69614" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/education/">خدمات آموزش</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-fe5ffaa elementor-widget elementor-widget-heading" data-id="fe5ffaa" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/financial-services/">دموی خدمات مالی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-70c5c13" data-id="70c5c13" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-41c1ead elementor-widget elementor-widget-heading" data-id="41c1ead" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/software/">ساخت نرم افزار</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-cf412da elementor-widget elementor-widget-heading" data-id="cf412da" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/app-development/">توسعه اپلیکیشن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-93075d6 elementor-widget elementor-widget-heading" data-id="93075d6" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/marketing-agency/">آژانس بازایابی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-cdac528 elementor-widget elementor-widget-heading" data-id="cdac528" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/startup-company/">استارت آپ</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-cac7a99 elementor-widget elementor-widget-heading" data-id="cac7a99" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/startup/">استارت آپ 2</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </section>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </li></ul></li>
                                                                                <li id="menu-item-35657" class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-35657 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">صفحات<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="8381" class="elementor elementor-8381">
                                                                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-7f587b1 elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="7f587b1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3709fc0" data-id="3709fc0" data-element_type="column">
                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-78aede6 rt-mega-sub-text elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78aede6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9b54d5a" data-id="9b54d5a" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-f6f807f elementor-widget elementor-widget-heading" data-id="f6f807f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">صفحه درباره ما</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-a847c4c elementor-widget elementor-widget-heading" data-id="a847c4c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-company/">درباره شرکت</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-f1e1d13 elementor-widget elementor-widget-heading" data-id="f1e1d13" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-corporate/">درباره کمپانی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-5ebb1c4 elementor-widget elementor-widget-heading" data-id="5ebb1c4" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-creative/">درباره ما خلاق</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-0c485db elementor-widget elementor-widget-heading" data-id="0c485db" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-modern/">درباره ما مدرن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-18f6990 elementor-widget elementor-widget-heading" data-id="18f6990" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-simple/">درباره ما ساده</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-fc9be46" data-id="fc9be46" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-087fc27 elementor-widget elementor-widget-heading" data-id="087fc27" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">صفحات خدمات</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-32d17e3 elementor-widget elementor-widget-heading" data-id="32d17e3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-company/">خدمات کمپانی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-445a1c3 elementor-widget elementor-widget-heading" data-id="445a1c3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-corporate/">خدمات شرکت</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-983a7af elementor-widget elementor-widget-heading" data-id="983a7af" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-creative/">خدمات خلاق</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-b056037 elementor-widget elementor-widget-heading" data-id="b056037" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-modern/">خدمات مدرن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-9662df5 elementor-widget elementor-widget-heading" data-id="9662df5" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-simple/"> خدمات ساده</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-405c8ae" data-id="405c8ae" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-4c502e1 elementor-widget elementor-widget-heading" data-id="4c502e1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">صفحات تماس</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-9a36298 elementor-widget elementor-widget-heading" data-id="9a36298" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-company/">تماس با شرکت</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-c4bb4be elementor-widget elementor-widget-heading" data-id="c4bb4be" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-corporate/">با شرکت تماس بگیرید</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-b00ea1f elementor-widget elementor-widget-heading" data-id="b00ea1f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-creative/">باما تماس بگیرد خلاق</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-15e9b08 elementor-widget elementor-widget-heading" data-id="15e9b08" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-modern/">باما تماس مدرن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-7e54b84 elementor-widget elementor-widget-heading" data-id="7e54b84" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-simple/">باما تماس بگیرد ساده</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2d87828" data-id="2d87828" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-d7713ec elementor-widget elementor-widget-heading" data-id="d7713ec" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">سایر صفحات</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-b4549ec elementor-widget elementor-widget-heading" data-id="b4549ec" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/pricing/">قیمت گذاری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-a7328b0 elementor-widget elementor-widget-heading" data-id="a7328b0" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/coming-soon/">به زودی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-c0efc21 elementor-widget elementor-widget-heading" data-id="c0efc21" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/404">404</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </section>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </li></ul></li>
                                                                                <li id="menu-item-35656" class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-35656 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">نمونه کارها<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="9311" class="elementor elementor-9311">
                                                                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-5163a599 elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="5163a599" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5a2a8bbe" data-id="5a2a8bbe" data-element_type="column">
                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-41b32f1a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="41b32f1a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-55f11fd6" data-id="55f11fd6" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-76881146 elementor-widget elementor-widget-heading" data-id="76881146" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">طرح بند نمونه کار ها</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-2b2b0a47 elementor-widget elementor-widget-heading" data-id="2b2b0a47" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/horizontal-carousel/"> کاروسل افقی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-0923588 elementor-widget elementor-widget-heading" data-id="0923588" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/parallax-slider/">پارالاکس اسلایدر</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-4159759 elementor-widget elementor-widget-heading" data-id="4159759" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/classic-carousel/">کلاسیک کاروسل</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-220f8cc4 elementor-widget elementor-widget-heading" data-id="220f8cc4" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/fancy-slider/">اسلایدر فنسی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-0a5219a elementor-widget elementor-widget-heading" data-id="0a5219a" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/portfolio-three-columns-box/">باکس سه ستون</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-0424a47 elementor-widget elementor-widget-heading" data-id="0424a47" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/portfolio-four-column-box/">باکس چهار ستون</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7ae4d0b6" data-id="7ae4d0b6" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-49bc55e elementor-widget elementor-widget-heading" data-id="49bc55e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default"> همه نمونه کارها</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-c0594d7 elementor-widget elementor-widget-heading" data-id="c0594d7" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/marquee-portfolio/">نمونه کار مارکی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-2ad0759 elementor-widget elementor-widget-heading" data-id="2ad0759" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/masonry-overlay/">پوشش ماسونری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-3822c3f elementor-widget elementor-widget-heading" data-id="3822c3f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/masonry-creative/">ماسو نری خلاق</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-25feb7c elementor-widget elementor-widget-heading" data-id="25feb7c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/masonry-Caption/">عنوان ماسونری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-66dca88 elementor-widget elementor-widget-heading" data-id="66dca88" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/metro/">مترو ماسونری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-86727f5 elementor-widget elementor-widget-heading" data-id="86727f5" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/three-column-metro-masonry/">مترو سه ستونه</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3b94673" data-id="3b94673" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-eb9c570 elementor-widget elementor-widget-heading" data-id="eb9c570" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">جزئیات نمونه کارها</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-a6317c1 elementor-widget elementor-widget-heading" data-id="a6317c1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/sticky-portfolio6/">استایل یک</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-ddb4165 elementor-widget elementor-widget-heading" data-id="ddb4165" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/slider-portfolio/">استایل دو</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-c49cebc elementor-widget elementor-widget-heading" data-id="c49cebc" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/full-width-portfolio/">استایل سه</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-46a12f2 elementor-widget elementor-widget-heading" data-id="46a12f2" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/portfolio-image-reveal/">استایل چهار</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-ee99547 elementor-widget elementor-widget-heading" data-id="ee99547" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/full-width-color/">استایل پنج</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </section>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </li></ul></li>
                                                                                <li id="menu-item-35658" class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-35658 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">وبلاگ<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="35341" class="elementor elementor-35341">
                                                                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-9c84fbc elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="9c84fbc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6311387" data-id="6311387" data-element_type="column">
                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-11fd01d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="11fd01d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9ab237d" data-id="9ab237d" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-2dc7a8e elementor-widget elementor-widget-heading" data-id="2dc7a8e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">طرح بندی وبلاگ</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-6829e84 elementor-widget elementor-widget-heading" data-id="6829e84" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/">استایل پیش فرض</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-eb80d93 elementor-widget elementor-widget-heading" data-id="eb80d93" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=four">طرح بندی ماسونری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-a0f56b2 elementor-widget elementor-widget-heading" data-id="a0f56b2" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=one">طرح بندی گرید</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-2e93cb1 elementor-widget elementor-widget-heading" data-id="2e93cb1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=two">نمایش لیستی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-d718d5c elementor-widget elementor-widget-heading" data-id="d718d5c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=three">گرید سه سوتنه</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-4277b1d elementor-widget elementor-widget-heading" data-id="4277b1d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=five">نمایش کلاسیک</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3e0a76e" data-id="3e0a76e" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-a8a9dfb elementor-widget elementor-widget-heading" data-id="a8a9dfb" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">طرح بندی وبلاگ</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-1a854f3 elementor-widget elementor-widget-heading" data-id="1a854f3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=six">نمایش گرید نویسنده</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-2df9021 elementor-widget elementor-widget-heading" data-id="2df9021" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=seven">نمایش تمام عرض</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-1f1073f elementor-widget elementor-widget-heading" data-id="1f1073f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=eight">وبلاگ مدرن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-56e4ed0 elementor-widget elementor-widget-heading" data-id="56e4ed0" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=nine">الگانت</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-48c8f46 elementor-widget elementor-widget-heading" data-id="48c8f46" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=ten">طرح بندی مترو</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-03e10b8" data-id="03e10b8" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-21a7ca1 elementor-widget elementor-widget-heading" data-id="21a7ca1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">استایل پست</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-2eb5e10 elementor-widget elementor-widget-heading" data-id="2eb5e10" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-optimize-blog-for-high-ranking/">پیش فرض</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-7e507ca elementor-widget elementor-widget-heading" data-id="7e507ca" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-optimize-blog-for-high-ranking/?blog-details=one">استایل پست تکی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-74e3255 elementor-widget elementor-widget-heading" data-id="74e3255" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-optimize-blog-for-high-ranking/?blog-details=two">استایل پست دوتایی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-4bb000e elementor-widget elementor-widget-heading" data-id="4bb000e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-utilize-map-to-find-where-visitors-clicking/?blog-details=three">استایل پست سه تایی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-c8db135 elementor-widget elementor-widget-heading" data-id="c8db135" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-improve-page-speed-for-your-wordpress/?blog-details=four">استایل پست چهار تایی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </section>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </li></ul></li>
                                                                                <li id="menu-item-35670" class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-35670 rt-dropdown"><a  href="#" data-description="">فروشگاه<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a>
                                                                                    <ul class="sub-menu  menu-odd  menu-depth-1">
                                                                                        <li id="menu-item-35671" class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35671"><a  href="https://rosetheme.us/consultino/shop/" data-description="">طرح بندی فروشگاه<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                        <li id="menu-item-35674" class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35674"><a  href="https://rosetheme.us/consultino/my-account/" data-description="">حساب من<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                        <li id="menu-item-35673" class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35673"><a  href="https://rosetheme.us/consultino/checkout/" data-description="">پرداخت<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                        <li id="menu-item-35672" class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35672"><a  href="https://rosetheme.us/consultino/cart/" data-description="">سبد خرید<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>                </nav>
                                                                    </div>

                                                                    <div class="rt-search-cart-holder">
                                                                        <div class="rt-search-cart-inner-holder">

                                                                            <div class="rt-search-box3 cat-search-box
                                        visible-lg
                                                            hidden-md
                                                            hidden-xs
                                        ">
                                                                                <a href="#search-header" class="search-btn3 " style="">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                                                        <circle cx="11" cy="11" r="8"></circle>
                                                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                                                    </svg>
                                                                                </a>

                                                                            </div>
                                                                        </div>

                                                                        <div class="radiantthemes-menu-custom-button visible-lg hidden-xs hidden-md"><a class="radiantthemes-menu-custom-button-main" href="#"  target="_blank" rel="nofollow" >یک نوبت رزرو کنید</a></div>

                                                                        <div class="menu-icon rt-mobile-hamburger rt-column hidden-lg">
                                                                            <div class="rt-mobile-toggle-holder">
                                                                                <div class="rt-mobile-toggle">
                                                                                    <span></span><span></span><span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                            </header>
                                                            <header class="rt-header logo-left  style3 mobile-header-style1">


                                                                <div class="rt-header-holder mobile-logo-column">



                                                                    <div class="logo-holder">
                                                                        <div class="logo">
                                                                            <a href="https://rosetheme.us/consultino"><span class="logo-default">
                                                                                    <img src="/images/logo-s.png" alt="logo" width="220" height="42"></span></a>
                                                                        </div>        </div>
                                                                    <div class="rt-navbar-menu menu-center">
                                                                        <nav class="apr-nav-menu--main apr-nav-menu--layout-horizontal hover-underline e--pointer-none">
                                                                            <ul id="menu-main-menu-1" class="mega-menu"><li class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-41831 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">خانه ها<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="41825" class="elementor elementor-41825">
                                                                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-1f821f6 elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="1f821f6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c9e3fb8" data-id="c9e3fb8" data-element_type="column">
                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-0cf427b rt-mega-sub-text elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0cf427b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-9f3962b" data-id="9f3962b" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-9fad75e elementor-widget elementor-widget-heading" data-id="9fad75e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/">آژانس خلاق</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-8df6f1c elementor-widget elementor-widget-heading" data-id="8df6f1c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/life-coach/">مشاوره زندگی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-6e850af elementor-widget elementor-widget-heading" data-id="6e850af" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/software-business/">تجاری نرم افزار</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-6eafedf elementor-widget elementor-widget-heading" data-id="6eafedf" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/personal-finance/">امور مالی شخصی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-8e78dcd elementor-widget elementor-widget-heading" data-id="8e78dcd" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/broadband/">IPTV</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-040933c elementor-widget elementor-widget-heading" data-id="040933c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/investment/">سرمایه گذاری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-0b44676 elementor-widget elementor-widget-heading" data-id="0b44676" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/app-demo/">اپلیکیشن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-3f937d8 elementor-widget elementor-widget-heading" data-id="3f937d8" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/attorney/">وکالت</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1ed8052" data-id="1ed8052" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-574724d elementor-widget elementor-widget-heading" data-id="574724d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/digital-studio/">استادیو دیجیتال</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-28b8a8b elementor-widget elementor-widget-heading" data-id="28b8a8b" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/consultant/">مشاوره</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-bbba898 elementor-widget elementor-widget-heading" data-id="bbba898" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/corporate/">شرکتی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-8d63b03 elementor-widget elementor-widget-heading" data-id="8d63b03" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/marketing/">بازاریابی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-65b748a elementor-widget elementor-widget-heading" data-id="65b748a" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/fitness/">بدنسازی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-45f0bbc elementor-widget elementor-widget-heading" data-id="45f0bbc" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/project-management/">مدیریت پروژه</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-e2f7425 elementor-widget elementor-widget-heading" data-id="e2f7425" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/digital-payment/">پرداخت دیجیتال</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-25799dd elementor-widget elementor-widget-heading" data-id="25799dd" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/essential-oil/">اسانس گیاهی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-4ba3ad4" data-id="4ba3ad4" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-550458e elementor-widget elementor-widget-heading" data-id="550458e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/logistics/">حمل و نقل</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-cf0cf5e elementor-widget elementor-widget-heading" data-id="cf0cf5e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/spa/">آرایشی و زیبایی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-faa7a6c elementor-widget elementor-widget-heading" data-id="faa7a6c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/construction/">ساخت و ساز ساختمان</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-8010096 elementor-widget elementor-widget-heading" data-id="8010096" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/digital-marketing/">بازاریابی دیجیتال</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-9615a1d elementor-widget elementor-widget-heading" data-id="9615a1d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/doctor/">پزشکی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-4f46e34 elementor-widget elementor-widget-heading" data-id="4f46e34" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/pet-care/">حیوانات خانگی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-770d279 elementor-widget elementor-widget-heading" data-id="770d279" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/agency/">آژانس</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-536c37c elementor-widget elementor-widget-heading" data-id="536c37c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/saas/">نرم افزار</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-b828415" data-id="b828415" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-9bd6073 elementor-widget elementor-widget-heading" data-id="9bd6073" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/consulting-company/">مشاوره مالی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-468010c elementor-widget elementor-widget-heading" data-id="468010c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/handyman/">صنایع دستی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-bf06aac elementor-widget elementor-widget-heading" data-id="bf06aac" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/modern-business/">کسب و کار مدرن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-1b51154 elementor-widget elementor-widget-heading" data-id="1b51154" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/business-consultant/">مشاوره کسب و کار</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-ed6c5c3 elementor-widget elementor-widget-heading" data-id="ed6c5c3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/advisor/">مشاوره تلفنی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-481f930 elementor-widget elementor-widget-heading" data-id="481f930" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/it-servicess/">خدمات آی تی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-7c69614 elementor-widget elementor-widget-heading" data-id="7c69614" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/education/">خدمات آموزش</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-fe5ffaa elementor-widget elementor-widget-heading" data-id="fe5ffaa" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/financial-services/">دموی خدمات مالی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-70c5c13" data-id="70c5c13" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-41c1ead elementor-widget elementor-widget-heading" data-id="41c1ead" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/software/">ساخت نرم افزار</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-cf412da elementor-widget elementor-widget-heading" data-id="cf412da" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/app-development/">توسعه اپلیکیشن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-93075d6 elementor-widget elementor-widget-heading" data-id="93075d6" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/marketing-agency/">آژانس بازایابی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-cdac528 elementor-widget elementor-widget-heading" data-id="cdac528" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/startup-company/">استارت آپ</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-cac7a99 elementor-widget elementor-widget-heading" data-id="cac7a99" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/startup/">استارت آپ 2</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </section>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </li></ul></li>
                                                                                <li class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-35657 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">صفحات<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="8381" class="elementor elementor-8381">
                                                                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-7f587b1 elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="7f587b1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3709fc0" data-id="3709fc0" data-element_type="column">
                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-78aede6 rt-mega-sub-text elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78aede6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9b54d5a" data-id="9b54d5a" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-f6f807f elementor-widget elementor-widget-heading" data-id="f6f807f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">صفحه درباره ما</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-a847c4c elementor-widget elementor-widget-heading" data-id="a847c4c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-company/">درباره شرکت</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-f1e1d13 elementor-widget elementor-widget-heading" data-id="f1e1d13" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-corporate/">درباره کمپانی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-5ebb1c4 elementor-widget elementor-widget-heading" data-id="5ebb1c4" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-creative/">درباره ما خلاق</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-0c485db elementor-widget elementor-widget-heading" data-id="0c485db" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-modern/">درباره ما مدرن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-18f6990 elementor-widget elementor-widget-heading" data-id="18f6990" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-simple/">درباره ما ساده</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-fc9be46" data-id="fc9be46" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-087fc27 elementor-widget elementor-widget-heading" data-id="087fc27" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">صفحات خدمات</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-32d17e3 elementor-widget elementor-widget-heading" data-id="32d17e3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-company/">خدمات کمپانی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-445a1c3 elementor-widget elementor-widget-heading" data-id="445a1c3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-corporate/">خدمات شرکت</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-983a7af elementor-widget elementor-widget-heading" data-id="983a7af" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-creative/">خدمات خلاق</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-b056037 elementor-widget elementor-widget-heading" data-id="b056037" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-modern/">خدمات مدرن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-9662df5 elementor-widget elementor-widget-heading" data-id="9662df5" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-simple/"> خدمات ساده</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-405c8ae" data-id="405c8ae" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-4c502e1 elementor-widget elementor-widget-heading" data-id="4c502e1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">صفحات تماس</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-9a36298 elementor-widget elementor-widget-heading" data-id="9a36298" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-company/">تماس با شرکت</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-c4bb4be elementor-widget elementor-widget-heading" data-id="c4bb4be" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-corporate/">با شرکت تماس بگیرید</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-b00ea1f elementor-widget elementor-widget-heading" data-id="b00ea1f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-creative/">باما تماس بگیرد خلاق</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-15e9b08 elementor-widget elementor-widget-heading" data-id="15e9b08" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-modern/">باما تماس مدرن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-7e54b84 elementor-widget elementor-widget-heading" data-id="7e54b84" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-simple/">باما تماس بگیرد ساده</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2d87828" data-id="2d87828" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-d7713ec elementor-widget elementor-widget-heading" data-id="d7713ec" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">سایر صفحات</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-b4549ec elementor-widget elementor-widget-heading" data-id="b4549ec" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/pricing/">قیمت گذاری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-a7328b0 elementor-widget elementor-widget-heading" data-id="a7328b0" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/coming-soon/">به زودی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-c0efc21 elementor-widget elementor-widget-heading" data-id="c0efc21" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/404">404</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </section>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </li></ul></li>
                                                                                <li class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-35656 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">نمونه کارها<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="9311" class="elementor elementor-9311">
                                                                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-5163a599 elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="5163a599" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5a2a8bbe" data-id="5a2a8bbe" data-element_type="column">
                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-41b32f1a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="41b32f1a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-55f11fd6" data-id="55f11fd6" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-76881146 elementor-widget elementor-widget-heading" data-id="76881146" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">طرح بند نمونه کار ها</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-2b2b0a47 elementor-widget elementor-widget-heading" data-id="2b2b0a47" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/horizontal-carousel/"> کاروسل افقی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-0923588 elementor-widget elementor-widget-heading" data-id="0923588" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/parallax-slider/">پارالاکس اسلایدر</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-4159759 elementor-widget elementor-widget-heading" data-id="4159759" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/classic-carousel/">کلاسیک کاروسل</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-220f8cc4 elementor-widget elementor-widget-heading" data-id="220f8cc4" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/fancy-slider/">اسلایدر فنسی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-0a5219a elementor-widget elementor-widget-heading" data-id="0a5219a" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/portfolio-three-columns-box/">باکس سه ستون</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-0424a47 elementor-widget elementor-widget-heading" data-id="0424a47" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/portfolio-four-column-box/">باکس چهار ستون</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7ae4d0b6" data-id="7ae4d0b6" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-49bc55e elementor-widget elementor-widget-heading" data-id="49bc55e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default"> همه نمونه کارها</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-c0594d7 elementor-widget elementor-widget-heading" data-id="c0594d7" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/marquee-portfolio/">نمونه کار مارکی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-2ad0759 elementor-widget elementor-widget-heading" data-id="2ad0759" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/masonry-overlay/">پوشش ماسونری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-3822c3f elementor-widget elementor-widget-heading" data-id="3822c3f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/masonry-creative/">ماسو نری خلاق</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-25feb7c elementor-widget elementor-widget-heading" data-id="25feb7c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/masonry-Caption/">عنوان ماسونری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-66dca88 elementor-widget elementor-widget-heading" data-id="66dca88" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/metro/">مترو ماسونری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-86727f5 elementor-widget elementor-widget-heading" data-id="86727f5" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/three-column-metro-masonry/">مترو سه ستونه</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3b94673" data-id="3b94673" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-eb9c570 elementor-widget elementor-widget-heading" data-id="eb9c570" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">جزئیات نمونه کارها</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-a6317c1 elementor-widget elementor-widget-heading" data-id="a6317c1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/sticky-portfolio6/">استایل یک</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-ddb4165 elementor-widget elementor-widget-heading" data-id="ddb4165" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/slider-portfolio/">استایل دو</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-c49cebc elementor-widget elementor-widget-heading" data-id="c49cebc" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/full-width-portfolio/">استایل سه</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-46a12f2 elementor-widget elementor-widget-heading" data-id="46a12f2" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/portfolio-image-reveal/">استایل چهار</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-ee99547 elementor-widget elementor-widget-heading" data-id="ee99547" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/full-width-color/">استایل پنج</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </section>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </li></ul></li>
                                                                                <li class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-35658 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">وبلاگ<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="35341" class="elementor elementor-35341">
                                                                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-9c84fbc elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="9c84fbc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6311387" data-id="6311387" data-element_type="column">
                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-11fd01d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="11fd01d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9ab237d" data-id="9ab237d" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-2dc7a8e elementor-widget elementor-widget-heading" data-id="2dc7a8e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">طرح بندی وبلاگ</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-6829e84 elementor-widget elementor-widget-heading" data-id="6829e84" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/">استایل پیش فرض</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-eb80d93 elementor-widget elementor-widget-heading" data-id="eb80d93" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=four">طرح بندی ماسونری</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-a0f56b2 elementor-widget elementor-widget-heading" data-id="a0f56b2" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=one">طرح بندی گرید</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-2e93cb1 elementor-widget elementor-widget-heading" data-id="2e93cb1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=two">نمایش لیستی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-d718d5c elementor-widget elementor-widget-heading" data-id="d718d5c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=three">گرید سه سوتنه</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-4277b1d elementor-widget elementor-widget-heading" data-id="4277b1d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=five">نمایش کلاسیک</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3e0a76e" data-id="3e0a76e" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-a8a9dfb elementor-widget elementor-widget-heading" data-id="a8a9dfb" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">طرح بندی وبلاگ</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-1a854f3 elementor-widget elementor-widget-heading" data-id="1a854f3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=six">نمایش گرید نویسنده</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-2df9021 elementor-widget elementor-widget-heading" data-id="2df9021" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=seven">نمایش تمام عرض</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-1f1073f elementor-widget elementor-widget-heading" data-id="1f1073f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=eight">وبلاگ مدرن</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-56e4ed0 elementor-widget elementor-widget-heading" data-id="56e4ed0" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=nine">الگانت</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-48c8f46 elementor-widget elementor-widget-heading" data-id="48c8f46" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=ten">طرح بندی مترو</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-03e10b8" data-id="03e10b8" data-element_type="column">
                                                                                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                                <div class="elementor-element elementor-element-21a7ca1 elementor-widget elementor-widget-heading" data-id="21a7ca1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <span class="elementor-heading-title elementor-size-default">استایل پست</span>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-2eb5e10 elementor-widget elementor-widget-heading" data-id="2eb5e10" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-optimize-blog-for-high-ranking/">پیش فرض</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-7e507ca elementor-widget elementor-widget-heading" data-id="7e507ca" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-optimize-blog-for-high-ranking/?blog-details=one">استایل پست تکی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-74e3255 elementor-widget elementor-widget-heading" data-id="74e3255" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-optimize-blog-for-high-ranking/?blog-details=two">استایل پست دوتایی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-4bb000e elementor-widget elementor-widget-heading" data-id="4bb000e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-utilize-map-to-find-where-visitors-clicking/?blog-details=three">استایل پست سه تایی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                                <div class="elementor-element elementor-element-c8db135 elementor-widget elementor-widget-heading" data-id="c8db135" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                    <div class="elementor-widget-container">
                                                                                                                                        <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-improve-page-speed-for-your-wordpress/?blog-details=four">استایل پست چهار تایی</a></p>		</div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </section>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                            </div>
                                                                                        </li></ul></li>
                                                                                <li class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-35670 rt-dropdown"><a  href="#" data-description="">فروشگاه<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a>
                                                                                    <ul class="sub-menu  menu-odd  menu-depth-1">
                                                                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35671"><a  href="https://rosetheme.us/consultino/shop/" data-description="">طرح بندی فروشگاه<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35674"><a  href="https://rosetheme.us/consultino/my-account/" data-description="">حساب من<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35673"><a  href="https://rosetheme.us/consultino/checkout/" data-description="">پرداخت<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                        <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35672"><a  href="https://rosetheme.us/consultino/cart/" data-description="">سبد خرید<span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>            </nav>
                                                                    </div>

                                                                    <div class="rt-search-cart-holder">
                                                                        <div class="rt-search-cart-inner-holder">

                                                                        </div>
                                                                        <div class="rt-right-menu-holder">

                                                                            <div class="rt-search-box3 cat-search-box
                                        visible-lg
                                                            hidden-md
                                                            hidden-xs
                                        ">
                                                                                <a href="#search-header" class="search-btn3 " style="">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                                                        <circle cx="11" cy="11" r="8"></circle>
                                                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                                                    </svg>
                                                                                </a>
                                                                                <div id="search-header">
                                                                                    <div class="search-btn3">
                                                                                        <a class="close"><span></span></a>
                                                                                    </div>
                                                                                    <form action="https://rosetheme.us/consultino/" class="search-form3" method="get" target="_top">
                                                                                        <input name="s" class="search-text" placeholder="جستجو" type="search">

                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="radiantthemes-menu-custom-button visible-lg hidden-xs hidden-md"><a class="radiantthemes-menu-custom-button-main" href="#"  target="_blank" rel="nofollow" >یک نوبت رزرو کنید</a></div>

                                                                        <div class="menu-icon rt-mobile-hamburger rt-column hidden-lg">
                                                                            <div class="rt-mobile-toggle-holder">
                                                                                <div class="rt-mobile-toggle">
                                                                                    <span></span><span></span><span></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                            </header>
                                                            <nav id="mobile-menu" class="side-panel">
                                                                <header class="side-panel-header">
                                                                    <span><img src="{{url("/images/logo-r.png")}}" alt="logo" width="220" height="42"></span>
                                                                    <div class="rt-toggle-close rt-close-btn" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="12" height="12" viewBox="1.1 1.1 12 12" enable-background="new 1.1 1.1 12 12" xml:space="preserve">
                <path d="M8.3 7.1l4.6-4.6c0.3-0.3 0.3-0.8 0-1.2 -0.3-0.3-0.8-0.3-1.2 0L7.1 5.9 2.5 1.3c-0.3-0.3-0.8-0.3-1.2 0 -0.3 0.3-0.3 0.8 0 1.2L5.9 7.1l-4.6 4.6c-0.3 0.3-0.3 0.8 0 1.2s0.8 0.3 1.2 0L7.1 8.3l4.6 4.6c0.3 0.3 0.8 0.3 1.2 0 0.3-0.3 0.3-0.8 0-1.2L8.3 7.1z"></path>
            </svg></div>
                                                                </header>
                                                                <div class="side-panel-inner mobile-side-panel-inner">
                                                                    <div class="mobile-menu-top">
                                                                        <form role="search" class="woocommerce-product-search rt-product-search" action="/">
                                                                            <label class="search-lebel">Search for:</label>
                                                                            <input type="search" class="search-field" placeholder="Search…" name="s">
                                                                            <button type="submit" value="Search" aria-label="Search">
                                                                                <svg version="1.1" class="rt-search-icon" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20.999px" height="20.999px" viewBox="0 0 20.999 20.999" enable-background="new 0 0 20.999 20.999" xml:space="preserve">
                        <path d="M8.797,0C3.949,0,0,3.949,0,8.796c0,4.849,3.949,8.797,8.797,8.797c2.118,0,4.065-0.759,5.586-2.014l5.16,5.171
					c0.333,0.332,0.874,0.332,1.206,0c0.333-0.333,0.333-0.874,0-1.207l-5.169-5.16c1.253-1.521,2.013-3.467,2.013-5.587
					C17.593,3.949,13.645,0,8.797,0L8.797,0z M8.797,1.703c3.928,0,7.094,3.166,7.094,7.093c0,3.929-3.166,7.095-7.094,7.095
					s-7.094-3.166-7.094-7.095C1.703,4.869,4.869,1.703,8.797,1.703z"></path>
                    </svg>
                                                                            </button>

                                                                        </form>

                                                                        <ul id="menu-main-menu-2" class="rt-mobile-menu"><li class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-41831 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">خانه ها<span></span><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="41825" class="elementor elementor-41825">
                                                                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-1f821f6 elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="1f821f6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c9e3fb8" data-id="c9e3fb8" data-element_type="column">
                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-0cf427b rt-mega-sub-text elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0cf427b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-9f3962b" data-id="9f3962b" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-9fad75e elementor-widget elementor-widget-heading" data-id="9fad75e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/">آژانس خلاق</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-8df6f1c elementor-widget elementor-widget-heading" data-id="8df6f1c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/life-coach/">مشاوره زندگی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-6e850af elementor-widget elementor-widget-heading" data-id="6e850af" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/software-business/">تجاری نرم افزار</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-6eafedf elementor-widget elementor-widget-heading" data-id="6eafedf" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/personal-finance/">امور مالی شخصی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-8e78dcd elementor-widget elementor-widget-heading" data-id="8e78dcd" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/broadband/">IPTV</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-040933c elementor-widget elementor-widget-heading" data-id="040933c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/investment/">سرمایه گذاری</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-0b44676 elementor-widget elementor-widget-heading" data-id="0b44676" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/app-demo/">اپلیکیشن</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-3f937d8 elementor-widget elementor-widget-heading" data-id="3f937d8" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/attorney/">وکالت</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-1ed8052" data-id="1ed8052" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-574724d elementor-widget elementor-widget-heading" data-id="574724d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/digital-studio/">استادیو دیجیتال</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-28b8a8b elementor-widget elementor-widget-heading" data-id="28b8a8b" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/consultant/">مشاوره</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-bbba898 elementor-widget elementor-widget-heading" data-id="bbba898" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/corporate/">شرکتی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-8d63b03 elementor-widget elementor-widget-heading" data-id="8d63b03" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/marketing/">بازاریابی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-65b748a elementor-widget elementor-widget-heading" data-id="65b748a" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/fitness/">بدنسازی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-45f0bbc elementor-widget elementor-widget-heading" data-id="45f0bbc" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/project-management/">مدیریت پروژه</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-e2f7425 elementor-widget elementor-widget-heading" data-id="e2f7425" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/digital-payment/">پرداخت دیجیتال</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-25799dd elementor-widget elementor-widget-heading" data-id="25799dd" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/essential-oil/">اسانس گیاهی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-4ba3ad4" data-id="4ba3ad4" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-550458e elementor-widget elementor-widget-heading" data-id="550458e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/logistics/">حمل و نقل</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-cf0cf5e elementor-widget elementor-widget-heading" data-id="cf0cf5e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/spa/">آرایشی و زیبایی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-faa7a6c elementor-widget elementor-widget-heading" data-id="faa7a6c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/construction/">ساخت و ساز ساختمان</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-8010096 elementor-widget elementor-widget-heading" data-id="8010096" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/digital-marketing/">بازاریابی دیجیتال</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-9615a1d elementor-widget elementor-widget-heading" data-id="9615a1d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/doctor/">پزشکی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-4f46e34 elementor-widget elementor-widget-heading" data-id="4f46e34" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/pet-care/">حیوانات خانگی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-770d279 elementor-widget elementor-widget-heading" data-id="770d279" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/agency/">آژانس</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-536c37c elementor-widget elementor-widget-heading" data-id="536c37c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/saas/">نرم افزار</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-b828415" data-id="b828415" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-9bd6073 elementor-widget elementor-widget-heading" data-id="9bd6073" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/consulting-company/">مشاوره مالی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-468010c elementor-widget elementor-widget-heading" data-id="468010c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/handyman/">صنایع دستی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-bf06aac elementor-widget elementor-widget-heading" data-id="bf06aac" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/modern-business/">کسب و کار مدرن</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-1b51154 elementor-widget elementor-widget-heading" data-id="1b51154" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/business-consultant/">مشاوره کسب و کار</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-ed6c5c3 elementor-widget elementor-widget-heading" data-id="ed6c5c3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/advisor/">مشاوره تلفنی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-481f930 elementor-widget elementor-widget-heading" data-id="481f930" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/it-servicess/">خدمات آی تی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-7c69614 elementor-widget elementor-widget-heading" data-id="7c69614" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/education/">خدمات آموزش</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-fe5ffaa elementor-widget elementor-widget-heading" data-id="fe5ffaa" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/financial-services/">دموی خدمات مالی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-70c5c13" data-id="70c5c13" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-41c1ead elementor-widget elementor-widget-heading" data-id="41c1ead" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/software/">ساخت نرم افزار</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-cf412da elementor-widget elementor-widget-heading" data-id="cf412da" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/app-development/">توسعه اپلیکیشن</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-93075d6 elementor-widget elementor-widget-heading" data-id="93075d6" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/marketing-agency/">آژانس بازایابی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-cdac528 elementor-widget elementor-widget-heading" data-id="cdac528" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/startup-company/">استارت آپ</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-cac7a99 elementor-widget elementor-widget-heading" data-id="cac7a99" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/startup/">استارت آپ 2</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </section>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>
                                                                                        </div>
                                                                                    </li></ul></li>
                                                                            <li class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-35657 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">صفحات<span></span><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="8381" class="elementor elementor-8381">
                                                                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-7f587b1 elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="7f587b1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3709fc0" data-id="3709fc0" data-element_type="column">
                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-78aede6 rt-mega-sub-text elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78aede6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9b54d5a" data-id="9b54d5a" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-f6f807f elementor-widget elementor-widget-heading" data-id="f6f807f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <span class="elementor-heading-title elementor-size-default">صفحه درباره ما</span>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-a847c4c elementor-widget elementor-widget-heading" data-id="a847c4c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-company/">درباره شرکت</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-f1e1d13 elementor-widget elementor-widget-heading" data-id="f1e1d13" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-corporate/">درباره کمپانی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-5ebb1c4 elementor-widget elementor-widget-heading" data-id="5ebb1c4" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-creative/">درباره ما خلاق</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-0c485db elementor-widget elementor-widget-heading" data-id="0c485db" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-modern/">درباره ما مدرن</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-18f6990 elementor-widget elementor-widget-heading" data-id="18f6990" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/about-simple/">درباره ما ساده</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-fc9be46" data-id="fc9be46" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-087fc27 elementor-widget elementor-widget-heading" data-id="087fc27" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <span class="elementor-heading-title elementor-size-default">صفحات خدمات</span>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-32d17e3 elementor-widget elementor-widget-heading" data-id="32d17e3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-company/">خدمات کمپانی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-445a1c3 elementor-widget elementor-widget-heading" data-id="445a1c3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-corporate/">خدمات شرکت</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-983a7af elementor-widget elementor-widget-heading" data-id="983a7af" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-creative/">خدمات خلاق</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-b056037 elementor-widget elementor-widget-heading" data-id="b056037" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-modern/">خدمات مدرن</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-9662df5 elementor-widget elementor-widget-heading" data-id="9662df5" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/service-simple/"> خدمات ساده</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-405c8ae" data-id="405c8ae" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-4c502e1 elementor-widget elementor-widget-heading" data-id="4c502e1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <span class="elementor-heading-title elementor-size-default">صفحات تماس</span>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-9a36298 elementor-widget elementor-widget-heading" data-id="9a36298" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-company/">تماس با شرکت</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-c4bb4be elementor-widget elementor-widget-heading" data-id="c4bb4be" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-corporate/">با شرکت تماس بگیرید</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-b00ea1f elementor-widget elementor-widget-heading" data-id="b00ea1f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-creative/">باما تماس بگیرد خلاق</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-15e9b08 elementor-widget elementor-widget-heading" data-id="15e9b08" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-modern/">باما تماس مدرن</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-7e54b84 elementor-widget elementor-widget-heading" data-id="7e54b84" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-simple/">باما تماس بگیرد ساده</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2d87828" data-id="2d87828" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-d7713ec elementor-widget elementor-widget-heading" data-id="d7713ec" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <span class="elementor-heading-title elementor-size-default">سایر صفحات</span>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-b4549ec elementor-widget elementor-widget-heading" data-id="b4549ec" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/pricing/">قیمت گذاری</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-a7328b0 elementor-widget elementor-widget-heading" data-id="a7328b0" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/coming-soon/">به زودی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-c0efc21 elementor-widget elementor-widget-heading" data-id="c0efc21" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/404">404</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </section>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>
                                                                                        </div>
                                                                                    </li></ul></li>
                                                                            <li class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-35656 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">نمونه کارها<span></span><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="9311" class="elementor elementor-9311">
                                                                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-5163a599 elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="5163a599" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5a2a8bbe" data-id="5a2a8bbe" data-element_type="column">
                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-41b32f1a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="41b32f1a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-55f11fd6" data-id="55f11fd6" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-76881146 elementor-widget elementor-widget-heading" data-id="76881146" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <span class="elementor-heading-title elementor-size-default">طرح بند نمونه کار ها</span>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-2b2b0a47 elementor-widget elementor-widget-heading" data-id="2b2b0a47" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/horizontal-carousel/"> کاروسل افقی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-0923588 elementor-widget elementor-widget-heading" data-id="0923588" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/parallax-slider/">پارالاکس اسلایدر</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-4159759 elementor-widget elementor-widget-heading" data-id="4159759" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/classic-carousel/">کلاسیک کاروسل</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-220f8cc4 elementor-widget elementor-widget-heading" data-id="220f8cc4" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/fancy-slider/">اسلایدر فنسی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-0a5219a elementor-widget elementor-widget-heading" data-id="0a5219a" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/portfolio-three-columns-box/">باکس سه ستون</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-0424a47 elementor-widget elementor-widget-heading" data-id="0424a47" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/portfolio-four-column-box/">باکس چهار ستون</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7ae4d0b6" data-id="7ae4d0b6" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-49bc55e elementor-widget elementor-widget-heading" data-id="49bc55e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <span class="elementor-heading-title elementor-size-default"> همه نمونه کارها</span>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-c0594d7 elementor-widget elementor-widget-heading" data-id="c0594d7" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/marquee-portfolio/">نمونه کار مارکی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-2ad0759 elementor-widget elementor-widget-heading" data-id="2ad0759" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/masonry-overlay/">پوشش ماسونری</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-3822c3f elementor-widget elementor-widget-heading" data-id="3822c3f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/masonry-creative/">ماسو نری خلاق</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-25feb7c elementor-widget elementor-widget-heading" data-id="25feb7c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/masonry-Caption/">عنوان ماسونری</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-66dca88 elementor-widget elementor-widget-heading" data-id="66dca88" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/metro/">مترو ماسونری</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-86727f5 elementor-widget elementor-widget-heading" data-id="86727f5" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/three-column-metro-masonry/">مترو سه ستونه</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3b94673" data-id="3b94673" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-eb9c570 elementor-widget elementor-widget-heading" data-id="eb9c570" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <span class="elementor-heading-title elementor-size-default">جزئیات نمونه کارها</span>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-a6317c1 elementor-widget elementor-widget-heading" data-id="a6317c1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/sticky-portfolio6/">استایل یک</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-ddb4165 elementor-widget elementor-widget-heading" data-id="ddb4165" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/slider-portfolio/">استایل دو</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-c49cebc elementor-widget elementor-widget-heading" data-id="c49cebc" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/full-width-portfolio/">استایل سه</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-46a12f2 elementor-widget elementor-widget-heading" data-id="46a12f2" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/portfolio-image-reveal/">استایل چهار</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-ee99547 elementor-widget elementor-widget-heading" data-id="ee99547" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/full-width-color/">استایل پنج</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </section>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>
                                                                                        </div>
                                                                                    </li></ul></li>
                                                                            <li class=" menu-item menu-item-type-post_type menu-item-object-mega_menu menu-item-35658 menu-item-has-children  menu-item-mega-parent"><a  href="#" data-description="">وبلاگ<span></span><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a><ul class="sub-menu"><li class="mega-menu-content">		<div data-elementor-type="wp-post" data-elementor-id="35341" class="elementor elementor-35341">
                                                                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-9c84fbc elementor-section-full_width elementor-section-stretched mega-menu-section elementor-section-height-default elementor-section-height-default" data-id="9c84fbc" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6311387" data-id="6311387" data-element_type="column">
                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-11fd01d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="11fd01d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                                                <div class="elementor-container elementor-column-gap-default">
                                                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9ab237d" data-id="9ab237d" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-2dc7a8e elementor-widget elementor-widget-heading" data-id="2dc7a8e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <span class="elementor-heading-title elementor-size-default">طرح بندی وبلاگ</span>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-6829e84 elementor-widget elementor-widget-heading" data-id="6829e84" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/">استایل پیش فرض</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-eb80d93 elementor-widget elementor-widget-heading" data-id="eb80d93" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=four">طرح بندی ماسونری</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-a0f56b2 elementor-widget elementor-widget-heading" data-id="a0f56b2" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=one">طرح بندی گرید</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-2e93cb1 elementor-widget elementor-widget-heading" data-id="2e93cb1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=two">نمایش لیستی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-d718d5c elementor-widget elementor-widget-heading" data-id="d718d5c" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=three">گرید سه سوتنه</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-4277b1d elementor-widget elementor-widget-heading" data-id="4277b1d" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=five">نمایش کلاسیک</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3e0a76e" data-id="3e0a76e" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-a8a9dfb elementor-widget elementor-widget-heading" data-id="a8a9dfb" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <span class="elementor-heading-title elementor-size-default">طرح بندی وبلاگ</span>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-1a854f3 elementor-widget elementor-widget-heading" data-id="1a854f3" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=six">نمایش گرید نویسنده</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-2df9021 elementor-widget elementor-widget-heading" data-id="2df9021" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=seven">نمایش تمام عرض</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-1f1073f elementor-widget elementor-widget-heading" data-id="1f1073f" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=eight">وبلاگ مدرن</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-56e4ed0 elementor-widget elementor-widget-heading" data-id="56e4ed0" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=nine">الگانت</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-48c8f46 elementor-widget elementor-widget-heading" data-id="48c8f46" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/blog/?blog-style=ten">طرح بندی مترو</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-03e10b8" data-id="03e10b8" data-element_type="column">
                                                                                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                                                                                            <div class="elementor-element elementor-element-21a7ca1 elementor-widget elementor-widget-heading" data-id="21a7ca1" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <span class="elementor-heading-title elementor-size-default">استایل پست</span>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-2eb5e10 elementor-widget elementor-widget-heading" data-id="2eb5e10" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-optimize-blog-for-high-ranking/">پیش فرض</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-7e507ca elementor-widget elementor-widget-heading" data-id="7e507ca" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-optimize-blog-for-high-ranking/?blog-details=one">استایل پست تکی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-74e3255 elementor-widget elementor-widget-heading" data-id="74e3255" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-optimize-blog-for-high-ranking/?blog-details=two">استایل پست دوتایی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-4bb000e elementor-widget elementor-widget-heading" data-id="4bb000e" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-utilize-map-to-find-where-visitors-clicking/?blog-details=three">استایل پست سه تایی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                            <div class="elementor-element elementor-element-c8db135 elementor-widget elementor-widget-heading" data-id="c8db135" data-element_type="widget" data-widget_type="heading.default">
                                                                                                                                <div class="elementor-widget-container">
                                                                                                                                    <p class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/how-to-improve-page-speed-for-your-wordpress/?blog-details=four">استایل پست چهار تایی</a></p>		</div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </section>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>
                                                                                        </div>
                                                                                    </li></ul></li>
                                                                            <li class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-35670 rt-dropdown"><a  href="#" data-description="">فروشگاه<span></span><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a>
                                                                                <ul class="sub-menu  menu-odd  menu-depth-1">
                                                                                    <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35671"><a  href="https://rosetheme.us/consultino/shop/" data-description="">طرح بندی فروشگاه<span></span><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                    <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35674"><a  href="https://rosetheme.us/consultino/my-account/" data-description="">حساب من<span></span><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                    <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35673"><a  href="https://rosetheme.us/consultino/checkout/" data-description="">پرداخت<span></span><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                    <li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-35672"><a  href="https://rosetheme.us/consultino/cart/" data-description="">سبد خرید<span></span><span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></span></a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>            <div class="rt-search-cart-holder">
                                                                        </div>        </div>
                                                                </div>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div></header>
        <!-- #page -->
        <div class="site">
            <!-- #content -->
            <div id="content" class="site-content">
                <div data-elementor-type="wp-page" data-elementor-id="38217" class="elementor elementor-38217">
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-4513e86 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4513e86" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f0d7df5" data-id="f0d7df5" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-46d1efa7" data-id="46d1efa7" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-498ed915 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="498ed915" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6475f7d2 position-left" data-id="6475f7d2" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-1c5e8bc4 elementor-widget__width-auto elementor-widget elementor-widget-radiant-separator" data-id="1c5e8bc4" data-element_type="widget" data-widget_type="radiant-separator.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="radiantthemes-separator element-one text-center"><div class="radiantthemes-separator-block" style="width: 58px; height: 2px;"><div class="radiantthemes-separator-block-gap"></div></div></div>		</div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-2eba8592 elementor-widget__width-initial change-font-two elementor-widget elementor-widget-text-editor" data-id="2eba8592" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <style>/*! elementor - v3.10.2 - 29-01-2023 */
                                                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:right;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p>من یک مشاور زندگی هستم</p>						</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="elementor-element elementor-element-261f6058 elementor-widget elementor-widget-heading" data-id="261f6058" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h1 class="elementor-heading-title elementor-size-default">رازهای موفقیت در زندگی را کشف کنید.</h1>		</div>
                                    </div>
                                    <div class="elementor-element elementor-element-765b6ea elementor-widget elementor-widget-text-editor" data-id="765b6ea" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.						</div>
                                    </div>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-153667d6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="153667d6" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4eef0184 position-left" data-id="4eef0184" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-36421b34 elementor-widget__width-initial elementor-widget-mobile__width-inherit change-font elementor-widget elementor-widget-radiant-custom-button" data-id="36421b34" data-element_type="widget" data-widget_type="radiant-custom-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="radiantthemes-custom-button element-four"> <button class="rt-arrow-btn"><a href="https://rosetheme.us/consultino/contact-simple/"  target="_blank" rel="nofollow" class="rt-readmore-btn">دریافت مشاوره رایگان</a> </button></div>		</div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-379229d5 elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-view-default elementor-widget elementor-widget-icon" data-id="379229d5" data-element_type="widget" data-widget_type="icon.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-icon-wrapper">
                                                                <a class="elementor-icon" href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><path fill="" d="M16 20c-1.771 0-3.655-0.502-5.6-1.492-1.793-0.913-3.564-2.22-5.122-3.78s-2.863-3.333-3.775-5.127c-0.988-1.946-1.49-3.83-1.49-5.601 0-1.148 1.070-2.257 1.529-2.68 0.661-0.609 1.701-1.32 2.457-1.32 0.376 0 0.816 0.246 1.387 0.774 0.425 0.394 0.904 0.928 1.383 1.544 0.289 0.372 1.73 2.271 1.73 3.182 0 0.747-0.845 1.267-1.739 1.816-0.346 0.212-0.703 0.432-0.961 0.639-0.276 0.221-0.325 0.338-0.333 0.364 0.949 2.366 3.85 5.267 6.215 6.215 0.021-0.007 0.138-0.053 0.363-0.333 0.207-0.258 0.427-0.616 0.639-0.961 0.55-0.894 1.069-1.739 1.816-1.739 0.911 0 2.81 1.441 3.182 1.73 0.616 0.479 1.15 0.958 1.544 1.383 0.528 0.57 0.774 1.011 0.774 1.387 0 0.756-0.711 1.799-1.319 2.463-0.424 0.462-1.533 1.537-2.681 1.537zM3.994 1c-0.268 0.005-0.989 0.333-1.773 1.055-0.744 0.686-1.207 1.431-1.207 1.945 0 6.729 8.264 15 14.986 15 0.513 0 1.258-0.465 1.944-1.213 0.723-0.788 1.051-1.512 1.056-1.781-0.032-0.19-0.558-0.929-1.997-2.037-1.237-0.952-2.24-1.463-2.498-1.469-0.018 0.005-0.13 0.048-0.357 0.336-0.197 0.251-0.408 0.594-0.613 0.926-0.56 0.911-1.089 1.772-1.858 1.772-0.124 0-0.246-0.024-0.363-0.071-2.625-1.050-5.729-4.154-6.779-6.779-0.126-0.315-0.146-0.809 0.474-1.371 0.33-0.299 0.786-0.579 1.228-0.851 0.332-0.204 0.676-0.415 0.926-0.613 0.288-0.227 0.331-0.339 0.336-0.357-0.007-0.258-0.517-1.261-1.469-2.498-1.108-1.439-1.847-1.964-2.037-1.997z"></path></svg>			</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-20973f9c elementor-icon-list--layout-inline elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="20973f9c" data-element_type="widget" data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items elementor-inline-items">
                                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                                    <span class="elementor-icon-list-text">تلفن تماس</span>
                                                                </li>
                                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                                    <a href="">

                                                                        <span class="elementor-icon-list-text">09121234567</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <div class="elementor-element elementor-element-1fa1845d elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="1fa1845d" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <style>/*! elementor - v3.10.2 - 29-01-2023 */
                                                .elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>												<img decoding="async" src="/images/book.png" title="image_5@2x.png" alt="image_5@2x.png" loading="lazy" />															</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-8b8c761 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8b8c761" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f95df0e" data-id="f95df0e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-48dab333 change-font-two elementor-widget elementor-widget-text-editor" data-id="48dab333" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>کاری که ما میکنیم</p>						</div>
                                    </div>
                                    <div class="elementor-element elementor-element-52253ede elementor-widget elementor-widget-heading" data-id="52253ede" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">چطور میتوانیم به شما کمک کنیم</h3>		</div>
                                    </div>
                                    <div class="elementor-element elementor-element-5aeee2a9 elementor-widget elementor-widget-text-editor" data-id="5aeee2a9" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>						</div>
                                    </div>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-57c0cdea column-space elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="57c0cdea" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1bfe378e life-coach-hover-div hover-position arrow-move" data-id="1bfe378e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-element elementor-element-70a813bb elementor-widget elementor-widget-spacer" data-id="70a813bb" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <style>/*! elementor - v3.10.2 - 29-01-2023 */
                                                                .elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}</style>		<div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-71787426 hover-text-section elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="71787426" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-32d479e" data-id="32d479e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-745eabe1 elementor-widget elementor-widget-heading" data-id="745eabe1" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default"><a href="#">انگیزه</a></p>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-3e3eb25 elementor-widget elementor-widget-heading" data-id="3e3eb25" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default"><a href="#">مشاوره گروهی</a></h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-69cf81fd arrow-move-fw elementor-view-default elementor-widget elementor-widget-icon" data-id="69cf81fd" data-element_type="widget" data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <a class="elementor-icon" href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="8" viewBox="0 0 17 8" fill="#3C3C3C"><path d="M16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464466C12.9763 0.269204 12.6597 0.269204 12.4645 0.464466C12.2692 0.659728 12.2692 0.976311 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53553L16.3536 4.35355ZM0 4.5H16V3.5H0V4.5Z"></path></svg>			</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-390f9495 life-coach-hover-div hover-position arrow-move" data-id="390f9495" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-element elementor-element-25118ad1 elementor-widget elementor-widget-spacer" data-id="25118ad1" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-57fe90b9 hover-text-section elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="57fe90b9" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-37d82d18" data-id="37d82d18" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-12de7bda elementor-widget elementor-widget-heading" data-id="12de7bda" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default"><a href="#">موفقیت</a></p>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-9e57afb elementor-widget elementor-widget-heading" data-id="9e57afb" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default"><a href="#">مشاوره آنلاین</a></h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-de51fa2 arrow-move-fw elementor-view-default elementor-widget elementor-widget-icon" data-id="de51fa2" data-element_type="widget" data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <a class="elementor-icon" href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="8" viewBox="0 0 17 8" fill="#3C3C3C"><path d="M16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464466C12.9763 0.269204 12.6597 0.269204 12.4645 0.464466C12.2692 0.659728 12.2692 0.976311 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53553L16.3536 4.35355ZM0 4.5H16V3.5H0V4.5Z"></path></svg>			</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4367bf41 life-coach-hover-div hover-position arrow-move" data-id="4367bf41" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-element elementor-element-16a665f4 elementor-widget elementor-widget-spacer" data-id="16a665f4" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-58b40cbe hover-text-section elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="58b40cbe" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-470e91e9" data-id="470e91e9" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-34b9d314 elementor-widget elementor-widget-heading" data-id="34b9d314" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default"><a href="#">بهبودی</a></p>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2d2915de elementor-widget elementor-widget-heading" data-id="2d2915de" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default"><a href="#">بخش مشاوره</a></h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-efddb22 arrow-move-fw elementor-view-default elementor-widget elementor-widget-icon" data-id="efddb22" data-element_type="widget" data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <a class="elementor-icon" href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="8" viewBox="0 0 17 8" fill="#3C3C3C"><path d="M16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464466C12.9763 0.269204 12.6597 0.269204 12.4645 0.464466C12.2692 0.659728 12.2692 0.976311 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53553L16.3536 4.35355ZM0 4.5H16V3.5H0V4.5Z"></path></svg>			</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-475e20d4 life-coach-hover-div hover-position arrow-move" data-id="475e20d4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-element elementor-element-677fefa6 elementor-widget elementor-widget-spacer" data-id="677fefa6" data-element_type="widget" data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-3ca2f06 hover-text-section elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3ca2f06" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-44407896" data-id="44407896" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-293a421b elementor-widget elementor-widget-heading" data-id="293a421b" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p class="elementor-heading-title elementor-size-default"><a href="#">شادی</a></p>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-50baee24 elementor-widget elementor-widget-heading" data-id="50baee24" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default"><a href="#">ایجاد اعتماد</a></h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2ff7378 arrow-move-fw elementor-view-default elementor-widget elementor-widget-icon" data-id="2ff7378" data-element_type="widget" data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <a class="elementor-icon" href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="8" viewBox="0 0 17 8" fill="#3C3C3C"><path d="M16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464466C12.9763 0.269204 12.6597 0.269204 12.4645 0.464466C12.2692 0.659728 12.2692 0.976311 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53553L16.3536 4.35355ZM0 4.5H16V3.5H0V4.5Z"></path></svg>			</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-6008e4c1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6008e4c1" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3011fb3e" data-id="3011fb3e" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-9c6f567 change-font-two elementor-widget elementor-widget-text-editor" data-id="9c6f567" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            درباره ما						</div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-425f3396 elementor-widget elementor-widget-heading" data-id="425f3396" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h3 class="elementor-heading-title elementor-size-default">سلام من زهرا محمدی روانشناس و مشاور زندگی هستم</h3>		</div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e7a35e elementor-widget elementor-widget-text-editor" data-id="e7a35e" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است						</div>
                                                    </div>
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-455c6473 column-space elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="455c6473" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1a8232f5" data-id="1a8232f5" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-4974f7d0 elementor-view-default elementor-widget elementor-widget-icon" data-id="4974f7d0" data-element_type="widget" data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div class="elementor-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" height="43px" viewBox="0 0 512.00102 512" width="43px"><path d="M 456.816406 160.660156 L 391.484375 160.660156 L 391.484375 110.332031 L 496.980469 110.332031 C 496.988281 110.332031 496.996094 110.332031 497 110.332031 C 505.285156 110.332031 512 103.613281 512 95.332031 C 512 90.953125 510.128906 87.015625 507.136719 84.273438 L 478.027344 55.164062 L 507.589844 25.605469 C 511.878906 21.316406 513.160156 14.863281 510.839844 9.261719 C 508.519531 3.65625 503.050781 0 496.984375 0 L 376.484375 0 C 368.203125 0 361.488281 6.714844 361.488281 15 L 361.488281 160.660156 L 344.351562 160.660156 C 313.933594 160.660156 289.1875 185.410156 289.1875 215.828125 L 289.1875 247.089844 C 281.636719 243.203125 273.085938 240.992188 264.023438 240.992188 L 247.957031 240.992188 C 217.539062 240.992188 192.792969 265.738281 192.792969 296.15625 L 192.792969 327.421875 C 185.238281 323.535156 176.6875 321.324219 167.625 321.324219 L 151.5625 321.324219 C 121.140625 321.324219 96.394531 346.070312 96.394531 376.488281 L 96.394531 407.753906 C 88.84375 403.863281 80.292969 401.652344 71.230469 401.652344 L 55.164062 401.652344 C 24.746094 401.652344 0 426.398438 0 456.816406 L 0 496.980469 C 0 505.265625 6.714844 511.980469 15 511.980469 L 496.980469 511.980469 C 505.265625 511.980469 511.980469 505.265625 511.980469 496.980469 L 511.980469 215.828125 C 511.980469 185.410156 487.234375 160.660156 456.816406 160.660156 Z M 391.484375 30 L 460.769531 30 L 446.210938 44.558594 C 443.394531 47.371094 441.816406 51.1875 441.816406 55.164062 C 441.816406 59.144531 443.394531 62.957031 446.210938 65.773438 L 460.769531 80.332031 L 391.484375 80.332031 Z M 30 456.816406 C 30 442.941406 41.289062 431.652344 55.164062 431.652344 L 71.230469 431.652344 C 85.105469 431.652344 96.394531 442.941406 96.394531 456.816406 L 96.394531 481.984375 L 30 481.984375 Z M 126.394531 456.816406 L 126.394531 376.488281 C 126.394531 362.609375 137.683594 351.320312 151.558594 351.320312 L 167.625 351.320312 C 181.5 351.320312 192.789062 362.609375 192.789062 376.488281 L 192.789062 481.984375 L 126.394531 481.984375 Z M 222.789062 376.488281 L 222.789062 296.15625 C 222.789062 282.28125 234.082031 270.992188 247.957031 270.992188 L 264.023438 270.992188 C 277.898438 270.992188 289.1875 282.28125 289.1875 296.15625 L 289.1875 481.984375 L 222.789062 481.984375 Z M 481.980469 481.984375 L 319.1875 481.984375 L 319.1875 215.828125 C 319.1875 201.949219 330.476562 190.660156 344.351562 190.660156 L 456.816406 190.660156 C 470.691406 190.660156 481.980469 201.949219 481.980469 215.828125 Z M 481.980469 481.984375 " style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"></path></svg>			</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-1ace580d elementor-widget elementor-widget-heading" data-id="1ace580d" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default">سلامت روان</h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-306b6bca elementor-widget elementor-widget-text-editor" data-id="306b6bca" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.						</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1590bcf1" data-id="1590bcf1" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-715cadd8 elementor-view-default elementor-widget elementor-widget-icon" data-id="715cadd8" data-element_type="widget" data-widget_type="icon.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-icon-wrapper">
                                                                                <div class="elementor-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" height="43px" viewBox="0 0 512.00102 512" width="43px"><g id="surface1"><path d="M 507.136719 114.722656 L 462.804688 70.390625 L 507.585938 25.609375 C 511.878906 21.316406 513.160156 14.867188 510.839844 9.261719 C 508.515625 3.65625 503.046875 0 496.980469 0 L 330.808594 0 C 322.527344 0 315.808594 6.71875 315.808594 15 L 315.808594 199.59375 L 290.457031 174.238281 C 266.820312 150.605469 231.292969 131.304688 203.371094 125.914062 C 214.214844 112.617188 220.730469 95.660156 220.730469 77.203125 C 220.730469 34.632812 186.097656 0 143.527344 0 C 100.957031 0 66.324219 34.632812 66.324219 77.203125 C 66.324219 94.972656 72.371094 111.347656 82.5 124.40625 L 47.128906 124.410156 C 21.144531 124.410156 0 145.554688 0 171.542969 L 0 300.070312 C 0 326.058594 21.144531 347.203125 47.132812 347.203125 C 53.171875 347.203125 58.953125 346.0625 64.265625 343.980469 L 64.265625 464.851562 C 64.265625 490.839844 85.410156 511.984375 111.398438 511.984375 C 123.800781 511.984375 135.105469 507.164062 143.527344 499.304688 C 151.953125 507.164062 163.253906 511.984375 175.660156 511.984375 C 201.648438 511.984375 222.792969 490.839844 222.792969 464.851562 L 222.792969 239.882812 L 265.351562 282.441406 C 274.253906 291.34375 286.089844 296.246094 298.679688 296.246094 C 304.636719 296.246094 310.421875 295.136719 315.8125 293.035156 L 315.8125 496.984375 C 315.8125 505.269531 322.527344 511.984375 330.8125 511.984375 C 339.09375 511.984375 345.8125 505.269531 345.8125 496.984375 L 345.8125 140.78125 L 496.980469 140.78125 C 496.988281 140.78125 496.996094 140.78125 497 140.78125 C 505.285156 140.78125 512 134.066406 512 125.78125 C 512 121.402344 510.125 117.464844 507.136719 114.722656 Z M 96.324219 77.207031 C 96.324219 51.175781 117.5 30 143.527344 30 C 169.554688 30 190.730469 51.175781 190.730469 77.207031 C 190.730469 103.207031 169.597656 124.367188 143.605469 124.410156 L 143.449219 124.410156 C 117.457031 124.367188 96.324219 103.207031 96.324219 77.207031 Z M 175.660156 481.984375 C 166.210938 481.984375 158.527344 474.300781 158.527344 464.851562 L 158.527344 352.386719 C 158.527344 344.105469 151.8125 337.390625 143.527344 337.390625 C 135.242188 337.390625 128.527344 344.105469 128.527344 352.386719 L 128.527344 464.851562 C 128.527344 474.300781 120.84375 481.984375 111.394531 481.984375 C 101.949219 481.984375 94.261719 474.300781 94.261719 464.851562 L 94.261719 303.125 L 192.792969 303.125 L 192.792969 464.851562 C 192.792969 474.300781 185.105469 481.984375 175.660156 481.984375 Z M 310.792969 261.230469 C 307.554688 264.464844 303.253906 266.246094 298.679688 266.246094 C 294.101562 266.246094 289.800781 264.464844 286.5625 261.230469 L 218.398438 193.066406 C 214.109375 188.773438 207.65625 187.492188 202.054688 189.8125 C 196.449219 192.136719 192.792969 197.605469 192.792969 203.671875 L 192.792969 273.125 L 94.265625 273.125 L 94.265625 207.792969 C 94.265625 199.511719 87.546875 192.796875 79.265625 192.796875 C 70.980469 192.796875 64.265625 199.511719 64.265625 207.792969 L 64.265625 300.070312 C 64.265625 309.519531 56.578125 317.203125 47.132812 317.203125 C 37.683594 317.203125 30 309.519531 30 300.070312 L 30 171.542969 C 30 162.09375 37.683594 154.410156 47.132812 154.410156 L 143.449219 154.40625 C 143.476562 154.40625 143.5 154.410156 143.527344 154.410156 C 143.554688 154.410156 143.582031 154.40625 143.605469 154.40625 L 188.96875 154.40625 C 207.523438 154.40625 245.054688 171.265625 269.246094 195.453125 L 310.792969 237.003906 C 317.472656 243.679688 317.472656 254.550781 310.792969 261.230469 Z M 345.808594 110.78125 L 345.808594 30 L 460.769531 30 L 430.984375 59.785156 C 428.171875 62.597656 426.589844 66.414062 426.589844 70.390625 C 426.589844 74.367188 428.171875 78.183594 430.984375 80.996094 L 460.769531 110.78125 Z M 345.808594 110.78125 " style=" stroke:none;fill-rule:nonzero;fill-opacity:1;"></path></g></svg>			</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-5ee8fce9 elementor-widget elementor-widget-heading" data-id="5ee8fce9" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default">سلامت جسم</h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-38e33036 elementor-widget elementor-widget-text-editor" data-id="38e33036" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.						</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="elementor-element elementor-element-5098b447 elementor-widget-mobile__width-inherit change-font elementor-widget elementor-widget-radiant-custom-button" data-id="5098b447" data-element_type="widget" data-widget_type="radiant-custom-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="radiantthemes-custom-button element-four"> <button class="rt-arrow-btn"><a href="http://rosetheme.us/consultino/contact-simple/"  target="_blank" rel="nofollow" class="rt-readmore-btn">اطلاعات بیشتر</a> </button></div>		</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2303e91d" data-id="2303e91d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-background-overlay"></div>
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-70e8d7f2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="70e8d7f2" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3917ace7" data-id="3917ace7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-background-overlay"></div>
                                                                    <div class="elementor-element elementor-element-782eb350 elementor-absolute rt-particle-moving-2 elementor-widget elementor-widget-image" data-id="782eb350" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img decoding="async" width="213" height="213" src="https://rosetheme.us/consultino/wp-content/uploads/2022/09/image09.png" class="attachment-medium size-medium wp-image-38229" alt="" srcset="https://rosetheme.us/consultino/wp-content/uploads/2022/09/image09.png 213w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/image09-150x150.png 150w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/image09-100x100.png 100w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/image09-50x50.png 50w" sizes="(max-width: 213px) 100vw, 213px" />															</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-59e5a42c image-box-shadow elementor-widget elementor-widget-image" data-id="59e5a42c" data-element_type="widget" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img fetchpriority="high" decoding="async" width="1006" height="1006" src="https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-07-min.webp" class="attachment-large size-large wp-image-38762" alt="" srcset="https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-07-min.webp 1006w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-07-min-300x300.webp 300w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-07-min-150x150.webp 150w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-07-min-768x768.webp 768w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-07-min-400x400.webp 400w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-07-min-800x800.webp 800w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-07-min-600x600.webp 600w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-07-min-100x100.webp 100w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-07-min-50x50.webp 50w" sizes="(max-width: 1006px) 100vw, 1006px" />															</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-679fafa elementor-absolute image-box-shadow elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="679fafa" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                                                        <div class="elementor-widget-container">
                                                                            <img decoding="async" width="300" height="300" src="https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-08-min-300x300.webp" class="attachment-medium size-medium wp-image-38768" alt="" srcset="https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-08-min-300x300.webp 300w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-08-min-150x150.webp 150w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-08-min-400x400.webp 400w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-08-min-100x100.webp 100w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-08-min-50x50.webp 50w, https://rosetheme.us/consultino/wp-content/uploads/2022/09/life-coach-2x-08-min.webp 568w" sizes="(max-width: 300px) 100vw, 300px" />															</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-594347c4 elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="594347c4" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-34f3655" data-id="34f3655" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-1681ba3f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1681ba3f" data-element_type="section">
                                                                        <div class="elementor-container elementor-column-gap-default">
                                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-247f665a" data-id="247f665a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-379d73b4 elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="379d73b4" data-element_type="widget" data-widget_type="counter.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <style>/*! elementor - v3.10.2 - 29-01-2023 */
                                                                                                .elementor-counter .elementor-counter-number-wrapper{display:flex;font-size:69px;font-weight:600;line-height:1}.elementor-counter .elementor-counter-number-prefix,.elementor-counter .elementor-counter-number-suffix{flex-grow:1;white-space:pre-wrap}.elementor-counter .elementor-counter-number-prefix{text-align:left}.elementor-counter .elementor-counter-number-suffix{text-align:right}.elementor-counter .elementor-counter-title{text-align:center;font-size:19px;font-weight:400;line-height:2.5}</style>		<div class="elementor-counter">
                                                                                                <div class="elementor-counter-number-wrapper">
                                                                                                    <span class="elementor-counter-number-prefix"></span>
                                                                                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="15" data-from-value="0" data-delimiter=",">0</span>
                                                                                                    <span class="elementor-counter-number-suffix">+</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-9b2db49 elementor-widget__width-auto elementor-widget elementor-widget-heading" data-id="9b2db49" data-element_type="widget" data-widget_type="heading.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <h6 class="elementor-heading-title elementor-size-default">سال<br>
                                                                                                تجربه</h6>		</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-19ee6fa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="19ee6fa" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-44ef99a" data-id="44ef99a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-836657 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="836657" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5f0b2d44" data-id="5f0b2d44" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-5e329f80 elementor-widget-mobile__width-initial elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image" data-id="5e329f80" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" src="https://rosetheme.us/consultino/wp-content/uploads/elementor/thumbs/life-coach-2x-02-min-pv8c54rd5n561qt80zubmy22xxy0oedyenqcthyeti.png" title="life-coach-2x-02-min.png" alt="life-coach-2x-02-min.png" loading="lazy" />															</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-46eb21f7" data-id="46eb21f7" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-655d7914 change-font-two elementor-widget elementor-widget-text-editor" data-id="655d7914" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            راز شاد زیستن آزادی است.						</div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-365e1205 elementor-widget elementor-widget-heading" data-id="365e1205" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h3 class="elementor-heading-title elementor-size-default">برای زندگی بهتر با یکدیگر کار کنید!</h3>		</div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-67d466 elementor-widget elementor-widget-text-editor" data-id="67d466" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.						</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c7ae845" data-id="c7ae845" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-3f5d1f03 elementor-widget-mobile__width-inherit change-font elementor-widget elementor-widget-radiant-custom-button" data-id="3f5d1f03" data-element_type="widget" data-widget_type="radiant-custom-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="radiantthemes-custom-button element-four"> <button class="rt-arrow-btn"><a href="https://rosetheme.us/consultino/contact-simple/"  target="_blank" rel="nofollow" class="rt-readmore-btn">شروع کنید</a> </button></div>		</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-6a6b49f0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6a6b49f0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-78561631" data-id="78561631" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-be60f80 change-font-two elementor-widget elementor-widget-text-editor" data-id="be60f80" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            پردازش رفتارها						</div>
                                    </div>
                                    <div class="elementor-element elementor-element-cdba93d elementor-widget elementor-widget-heading" data-id="cdba93d" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">بیاید باهم کارکنیم</h3>		</div>
                                    </div>
                                    <div class="elementor-element elementor-element-583e8ac3 elementor-widget elementor-widget-text-editor" data-id="583e8ac3" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>						</div>
                                    </div>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-467f2596 column-space elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="467f2596" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1c893f7 life-coach-hover-effect life-coach-change-color" data-id="1c893f7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-73bcf85e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="73bcf85e" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-61f48db4 move-up change-color" data-id="61f48db4" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-13d6aeab change-color elementor-widget elementor-widget-heading" data-id="13d6aeab" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-company/">مشاوره خانوادگی</a></h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-ca0af10 elementor-widget elementor-widget-text-editor" data-id="ca0af10" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی است.</p>						</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2cfe6052 life-coach-hover-effect life-coach-change-color" data-id="2cfe6052" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-61e3314b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="61e3314b" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5b296394 move-up change-color" data-id="5b296394" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-663c6b63 change-color elementor-widget elementor-widget-heading" data-id="663c6b63" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-company/">مشاوره گروهی</a></h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-712b0f68 elementor-widget elementor-widget-text-editor" data-id="712b0f68" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            لورم ایپسوم متن ساختگی با تولید سادگی است.						</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-52243929 life-coach-hover-effect life-coach-change-color" data-id="52243929" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-24c02f1a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="24c02f1a" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-57f84536 move-up change-color" data-id="57f84536" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-2eb7ee69 change-color elementor-widget elementor-widget-heading" data-id="2eb7ee69" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default"><a href="https://rosetheme.us/consultino/contact-modern/">موفقیت همه مشتریان</a></h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2fac06a8 elementor-widget elementor-widget-text-editor" data-id="2fac06a8" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            لورم ایپسوم متن ساختگی با تولید سادگی است.						</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-29c853e6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="29c853e6" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-247f43ce" data-id="247f43ce" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-638fb827 elementor-widget elementor-widget-counter" data-id="638fb827" data-element_type="widget" data-widget_type="counter.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-counter">
                                                                <div class="elementor-counter-number-wrapper">
                                                                    <span class="elementor-counter-number-prefix"></span>
                                                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="86" data-from-value="0" data-delimiter=",">0</span>
                                                                    <span class="elementor-counter-number-suffix">%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-48dce3dc elementor-widget elementor-widget-text-editor" data-id="48dce3dc" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی است.						</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2dd76834" data-id="2dd76834" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-bfecbf2 elementor-widget elementor-widget-counter" data-id="bfecbf2" data-element_type="widget" data-widget_type="counter.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-counter">
                                                                <div class="elementor-counter-number-wrapper">
                                                                    <span class="elementor-counter-number-prefix"></span>
                                                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="15" data-from-value="0" data-delimiter=",">0</span>
                                                                    <span class="elementor-counter-number-suffix">+</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-3e4c6635 elementor-widget elementor-widget-text-editor" data-id="3e4c6635" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی است.						</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-41730d3b" data-id="41730d3b" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-5142c80c elementor-widget elementor-widget-counter" data-id="5142c80c" data-element_type="widget" data-widget_type="counter.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-counter">
                                                                <div class="elementor-counter-number-wrapper">
                                                                    <span class="elementor-counter-number-prefix"></span>
                                                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="250" data-from-value="0">0</span>
                                                                    <span class="elementor-counter-number-suffix">+</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-27b058e3 elementor-widget elementor-widget-text-editor" data-id="27b058e3" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی است.						</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-15ee35d" data-id="15ee35d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-6ba07143 elementor-widget elementor-widget-counter" data-id="6ba07143" data-element_type="widget" data-widget_type="counter.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-counter">
                                                                <div class="elementor-counter-number-wrapper">
                                                                    <span class="elementor-counter-number-prefix"></span>
                                                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="5689" data-from-value="0">0</span>
                                                                    <span class="elementor-counter-number-suffix">+</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-762ca63c elementor-widget elementor-widget-text-editor" data-id="762ca63c" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی است.						</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-31005913 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="31005913" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-29a7c4ba" data-id="29a7c4ba" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-2ab4e44 elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2ab4e44" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-19f8f492 elementor-hidden-tablet elementor-hidden-mobile" data-id="19f8f492" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-48ee8da0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="48ee8da0" data-element_type="section">
                                                                        <div class="elementor-container elementor-column-gap-default">
                                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-73d99d51" data-id="73d99d51" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-5b2ed40 counter-prefix elementor-widget__width-inherit elementor-widget elementor-widget-counter" data-id="5b2ed40" data-element_type="widget" data-widget_type="counter.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-counter">
                                                                                                <div class="elementor-counter-number-wrapper">
                                                                                                    <span class="elementor-counter-number-prefix"></span>
                                                                                                    <span class="elementor-counter-number" data-duration="2000" data-to-value="300" data-from-value="0" data-delimiter=",">0</span>
                                                                                                    <span class="elementor-counter-number-suffix">+</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-57dc958d elementor-widget elementor-widget-text-editor" data-id="57dc958d" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <p>اعتماد مردم به ما و علاقه آنها</p>						</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="elementor-element elementor-element-6b74c299 elementor-widget elementor-widget-image" data-id="6b74c299" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <img decoding="async" src="https://rosetheme.us/consultino/wp-content/uploads/elementor/thumbs/life-coach-2x-12-min-pvbxxe4wz61btgekr8fj6mybrnaxpcz3ebsznl0lv6.webp" title="life-coach-2x-12-min" alt="life-coach-2x-12-min" loading="lazy" />															</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6eb8b642" data-id="6eb8b642" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-1b1f3d2e change-font-two elementor-widget elementor-widget-text-editor" data-id="1b1f3d2e" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>چگونه کار میکنیم</p>						</div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-52ad09c7 elementor-widget elementor-widget-heading" data-id="52ad09c7" data-element_type="widget" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h3 class="elementor-heading-title elementor-size-default">قدم های ساده به سمت موفقیت</h3>		</div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-529689f0 elementor-widget elementor-widget-text-editor" data-id="529689f0" data-element_type="widget" data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.						</div>
                                                    </div>
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-3dbf7fda elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3dbf7fda" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-75b587c4" data-id="75b587c4" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-48c9058d elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="48c9058d" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            1						</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4f4a6d90" data-id="4f4a6d90" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-3da4da70 elementor-widget elementor-widget-heading" data-id="3da4da70" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default">زمان بندی یک قرار</h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-266b46e5 elementor-widget elementor-widget-text-editor" data-id="266b46e5" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.						</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-4cd8bc34 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4cd8bc34" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3ab54245" data-id="3ab54245" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-7df39278 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="7df39278" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            2						</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4a9e236f" data-id="4a9e236f" data-element_type="column">
                                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                                    <div class="elementor-element elementor-element-4fac5d71 elementor-widget elementor-widget-heading" data-id="4fac5d71" data-element_type="widget" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h6 class="elementor-heading-title elementor-size-default">دریافت امتیاز ویژه</h6>		</div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-2198f707 elementor-widget elementor-widget-text-editor" data-id="2198f707" data-element_type="widget" data-widget_type="text-editor.default">
                                                                        <div class="elementor-widget-container">
                                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.						</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="elementor-element elementor-element-645e5d0c elementor-widget-mobile__width-inherit change-font elementor-widget elementor-widget-radiant-custom-button" data-id="645e5d0c" data-element_type="widget" data-widget_type="radiant-custom-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="radiantthemes-custom-button element-four"> <button class="rt-arrow-btn"><a href="https://rosetheme.us/consultino/contact-company/"  target="_blank" rel="nofollow" class="rt-readmore-btn">بیایید حرف بزنیم</a> </button></div>		</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-72d6ac33 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="72d6ac33" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3f3e4aa6" data-id="3f3e4aa6" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6468991e change-font-two elementor-widget elementor-widget-text-editor" data-id="6468991e" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            گوهینامه ها						</div>
                                    </div>
                                    <div class="elementor-element elementor-element-3228c00a elementor-widget elementor-widget-heading" data-id="3228c00a" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">مردم چه میگویند</h3>		</div>
                                    </div>
                                    <div class="elementor-element elementor-element-5fb97813 elementor-widget elementor-widget-text-editor" data-id="5fb97813" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.						</div>
                                    </div>
                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-3f19bd79 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3f19bd79" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-790459be" data-id="790459be" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4222ce67 elementor-widget elementor-widget-radiant-testimonial" data-id="4222ce67" data-element_type="widget" data-widget_type="radiant-testimonial.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="testimonial3 rt-testimonial element-three swiper-container " data-mobile-items="1" data-tab-items="2" data-desktop-items="3" data-spacer="1"><div class="swiper-wrapper"><div class="swiper-slide">
                                                                        <div class="testimonial-three">
                                                                            <div class="testi-pic">
                                                                                <img decoding="async" class="img-fluid" src="https://rosetheme.us/consultino/wp-content/uploads/2021/08/test2.jpg" alt="Testimonial Image">
                                                                            </div>
                                                                            <div class="testi-content">
                                                                                <h6 class="name">امیر محمد ثامنی</h6>
                                                                                <span class="divider">/</span>
                                                                                <p class="location">مهندس IT</p>

                                                                            </div>
                                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه است. </p>
                                                                        </div></div><div class="swiper-slide">
                                                                        <div class="testimonial-three">
                                                                            <div class="testi-pic">
                                                                                <img decoding="async" class="img-fluid" src="https://rosetheme.us/consultino/wp-content/uploads/2021/08/Testimonial2.jpg" alt="Testimonial Image">
                                                                            </div>
                                                                            <div class="testi-content">
                                                                                <h6 class="name">نگار کوثری</h6>
                                                                                <span class="divider">/</span>
                                                                                <p class="location">توسعه دهنده اپلیکیشن</p>

                                                                            </div>
                                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه است. </p>
                                                                        </div></div><div class="swiper-slide">
                                                                        <div class="testimonial-three">
                                                                            <div class="testi-pic">
                                                                                <img decoding="async" class="img-fluid" src="https://rosetheme.us/consultino/wp-content/uploads/2021/08/Testimonial3.jpg" alt="Testimonial Image">
                                                                            </div>
                                                                            <div class="testi-content">
                                                                                <h6 class="name">کاوه شاکری</h6>
                                                                                <span class="divider">/</span>
                                                                                <p class="location">مدیر منابع انسانی</p>

                                                                            </div>
                                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه است. </p>
                                                                        </div></div><div class="swiper-slide">
                                                                        <div class="testimonial-three">
                                                                            <div class="testi-pic">
                                                                                <img decoding="async" class="img-fluid" src="https://rosetheme.us/consultino/wp-content/uploads/2021/08/Testimonial1.jpg" alt="Testimonial Image">
                                                                            </div>
                                                                            <div class="testi-content">
                                                                                <h6 class="name">شیما شکوری</h6>
                                                                                <span class="divider">/</span>
                                                                                <p class="location">توسعه دهنده سایت</p>

                                                                            </div>
                                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه است. </p>
                                                                        </div></div></div></div>				</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-7d073b7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7d073b7" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3d682529" data-id="3d682529" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-170ca7c3 elementor-widget__width-initial elementor-absolute elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-radiant-image-scroll" data-id="170ca7c3" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="radiant-image-scroll.default">
                                        <div class="elementor-widget-container">
                                            <div class="item" rt-data-move="fade-zoom-in" rt-data-move-anchor-placement="top-bottom"><a class="rt-link" href="">
                                                    <img decoding="async" class="rt-img"  src="{{url("/images/image16.png")}}" alt="دموی مشاوره زندگی" srcset="{{url("/images/image16.png")}} 1x, 2x"/>

                                                </a>		</div>








                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6a0aa6eb change-font-two elementor-widget elementor-widget-text-editor" data-id="6a0aa6eb" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            سوالات متداول						</div>
                                    </div>
                                    <div class="elementor-element elementor-element-574e1115 elementor-widget elementor-widget-heading" data-id="574e1115" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">سوالی دارید؟</h3>		</div>
                                    </div>
                                    <div class="elementor-element elementor-element-25af3fa8 mordern-business-accordion elementor-widget elementor-widget-radiant-accordion" data-id="25af3fa8" data-element_type="widget" data-widget_type="radiant-accordion.default">
                                        <div class="elementor-widget-container">


                                            <div id="a727077279" class="radiantthemes-accordion element-one">



                                                <div class="card">
                                                    <button class="btn btn-link " data-toggle="collapse" data-target="#aeb0df2e1" aria-expanded="true" aria-controls="aeb0df2e">
                                                        <div class="card-header" id="aeb0df2e"><div class="img-upload"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="20" width="20" x="0px" y="0px" viewBox="0 0 492.308 492.308" style="enable-background:new 0 0 492.308 492.308;" xml:space="preserve">
<g>
    <g>
        <path d="M492.308,283v-73.692l-53.462-9.115c-4.846-20.413-12.885-39.798-23.971-57.769l31.385-44.279l-52.106-52.106    l-44.279,31.394c-17.99-11.096-37.365-19.144-57.769-23.981L282.99,0h-73.683l-9.115,53.452    c-20.413,4.846-39.798,12.885-57.769,23.971L98.144,46.038L46.038,98.144l31.394,44.279    c-11.096,17.99-19.144,37.365-23.981,57.769L0,209.308V283l53.452,9.106c4.837,20.404,12.885,39.779,23.981,57.769l-31.394,44.279    l52.106,52.106l44.279-31.385c17.971,11.086,37.346,19.125,57.769,23.981l9.115,53.452h73.683l9.115-53.452    c20.423-4.856,39.798-12.894,57.769-23.981l44.279,31.385l52.106-52.106l-31.385-44.279    c11.086-17.962,19.125-37.346,23.971-57.769L492.308,283z M421,281.567c-4.539,22.577-13.356,43.817-26.202,63.135l-3.74,5.635    l29.529,41.644l-28.606,28.606l-41.644-29.529l-5.635,3.74c-19.327,12.846-40.567,21.663-63.135,26.212l-6.625,1.337    l-8.567,50.269h-40.452l-8.567-50.269l-6.625-1.337c-22.567-4.548-43.808-13.365-63.135-26.212l-5.635-3.74l-41.644,29.529    l-28.606-28.606l29.529-41.644l-3.74-5.625c-12.856-19.356-21.663-40.596-26.202-63.144l-1.337-6.625l-50.269-8.558v-40.462    l50.269-8.567l1.337-6.625c4.538-22.548,13.346-43.788,26.202-63.144l3.74-5.625l-29.529-41.644l28.606-28.606l41.644,29.529    l5.635-3.74c19.327-12.846,40.567-21.663,63.135-26.202l6.625-1.337l8.567-50.269h40.452l8.567,50.269l6.625,1.337    c22.548,4.538,43.789,13.346,63.144,26.202l5.625,3.74l41.644-29.529l28.606,28.606l-29.529,41.644l3.74,5.635    c12.846,19.327,21.663,40.567,26.202,63.135l1.336,6.625l50.279,8.567v40.462l-50.279,8.558L421,281.567z" fill=""></path>
    </g>
</g>
                                                                    <g>
                                                                        <g>
                                                                            <path d="M246.154,139.51c-58.808,0-106.644,47.837-106.644,106.644c0,58.798,47.837,106.635,106.644,106.635    c58.798,0,106.635-47.837,106.635-106.635C352.788,187.346,304.952,139.51,246.154,139.51z M246.154,333.096    c-47.942,0-86.952-39-86.952-86.942s39.01-86.952,86.952-86.952s86.942,39.01,86.942,86.952S294.096,333.096,246.154,333.096z" fill=""></path>
                                                                        </g>
                                                                    </g>
</svg></div>
                                                            <span class="mb-0">

         لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم است؟

      </span>
                                                        </div>
                                                    </button>
                                                    <div id="aeb0df2e1" class="collapse show" aria-labelledby="aeb0df2e" data-parent="#a727077279">
                                                        <div class="card-body"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p></div>
                                                    </div>
                                                </div><div class="card">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#a5f6c0b21" aria-expanded="false" aria-controls="a5f6c0b2">
                                                        <div class="card-header" id="a5f6c0b2"><div class="img-upload"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" height="20" width="20" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
<g>
    <path d="M59,55.5v-39H47v39h-3v-31H32v31h-3v-23H17v23h-3v-14H2v14H1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1h12h3h12h3h12h3h12   c0.552,0,1-0.447,1-1S59.552,55.5,59,55.5z M4,55.5v-12h8v12H4z M19,55.5v-21h8v21H19z M34,55.5v-29h8v29H34z M49,55.5v-37h8v37H49   z" fill=""></path>
    <path d="M8.03,27.83c0.169,0,0.342-0.043,0.499-0.134l36.269-20.94l-2.27,4.99c-0.229,0.503-0.007,1.096,0.496,1.324   c0.134,0.062,0.275,0.09,0.414,0.09c0.38,0,0.743-0.218,0.911-0.586l3.562-7.83c0.011-0.025,0.009-0.052,0.018-0.078   c0.019-0.053,0.034-0.104,0.044-0.16c0.005-0.028,0.021-0.051,0.023-0.08c0.001-0.012-0.004-0.022-0.003-0.034   c0.002-0.038-0.002-0.073-0.004-0.111c-0.003-0.055-0.012-0.107-0.024-0.162c-0.008-0.038-0.01-0.077-0.023-0.114   c-0.012-0.036-0.033-0.066-0.049-0.101C47.88,3.881,47.88,3.854,47.866,3.83c-0.014-0.024-0.038-0.038-0.054-0.061   c-0.021-0.031-0.037-0.064-0.062-0.092c-0.026-0.03-0.059-0.051-0.089-0.078c-0.041-0.037-0.082-0.071-0.128-0.101   c-0.031-0.02-0.059-0.042-0.093-0.059c-0.011-0.005-0.017-0.015-0.028-0.02c-0.025-0.011-0.052-0.009-0.077-0.018   c-0.055-0.02-0.109-0.034-0.166-0.044c-0.026-0.005-0.047-0.02-0.074-0.022l-8.562-0.83c-0.555-0.056-1.039,0.35-1.092,0.898   c-0.054,0.55,0.349,1.039,0.898,1.092l5.456,0.529L7.529,25.964C7.05,26.24,6.887,26.852,7.163,27.33   C7.348,27.651,7.684,27.83,8.03,27.83z" fill=""></path>
</g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
                                                                    <g>
                                                                    </g>
</svg></div>
                                                            <span class="mb-0">

         لورم ایپسوم متن ساختگی نامفهوم است؟

      </span>
                                                        </div>
                                                    </button>
                                                    <div id="a5f6c0b21" class="collapse " aria-labelledby="a5f6c0b2" data-parent="#a727077279">
                                                        <div class="card-body"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p></div>
                                                    </div>
                                                </div><div class="card">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#a88dacbe1" aria-expanded="false" aria-controls="a88dacbe">
                                                        <div class="card-header" id="a88dacbe"><div class="img-upload"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 98 110" fill=""> <path fill-rule="evenodd" clip-rule="evenodd" d="M52.0906 1.80432V18.9453C52.0906 19.9418 51.2827 20.7497 50.2863 20.7497C49.2898 20.7497 48.4819 19.9418 48.4819 18.9453V1.80432C48.4819 0.80789 49.2898 0 50.2863 0C51.2827 0 52.0906 0.80789 52.0906 1.80432ZM65.6228 10.8258V18.9452C65.6228 19.9417 64.8149 20.7495 63.8185 20.7495C62.822 20.7495 62.0142 19.9417 62.0142 18.9452V10.8258C62.0142 9.82937 62.822 9.02148 63.8185 9.02148C64.8149 9.02148 65.6228 9.82937 65.6228 10.8258ZM38.5583 18.9452V10.8258C38.5583 9.82937 37.7505 9.02148 36.754 9.02148C35.7576 9.02148 34.9497 9.82937 34.9497 10.8258V18.9452C34.9497 19.9417 35.7576 20.7495 36.754 20.7495C37.7505 20.7495 38.5583 19.9417 38.5583 18.9452ZM50.2862 76.3473C35.8358 76.3473 24.1218 64.6333 24.1218 50.1829C24.1386 35.7396 35.8428 24.0344 50.2862 24.0186C64.7366 24.0186 76.4505 35.7325 76.4505 50.1829C76.4505 64.6333 64.7366 76.3473 50.2862 76.3473ZM72.8419 50.1829C72.8419 37.7254 62.7437 27.6272 50.2862 27.6272C37.8348 27.6413 27.7446 37.7315 27.7305 50.1829C27.7305 62.6405 37.8286 72.7386 50.2862 72.7386C62.7437 72.7386 72.8419 62.6405 72.8419 50.1829ZM85.3453 80.7953L71.2112 87.4734C69.2597 83.8436 65.5163 81.5336 61.3967 81.4173L48.3488 81.0588C46.2829 80.9997 44.2556 80.4764 42.4187 79.5276L41.091 78.8395C34.2931 75.296 26.1904 75.3049 19.3996 78.8624L19.4824 75.8546C19.5097 74.8582 18.7247 74.0283 17.7283 74.001L3.42062 73.6071C2.42419 73.5798 1.59516 74.3648 1.56785 75.3612L0.703572 106.759C0.676261 107.755 1.46124 108.585 2.45767 108.612L16.7653 109.006H16.8147C17.7926 109.006 18.5926 108.228 18.619 107.251L18.6604 105.749L22.3774 103.759C23.8364 102.974 25.542 102.787 27.1358 103.238L49.332 109.468C49.3708 109.479 49.4096 109.488 49.4492 109.497C51.0535 109.833 52.6887 110.001 54.3274 110C57.7986 110.002 61.2293 109.254 64.3842 107.805C64.4617 107.77 64.5366 107.729 64.6079 107.682L96.7905 86.8655C97.5922 86.3466 97.8513 85.2938 97.3817 84.4621C94.9924 80.2227 89.6931 78.6078 85.3453 80.7953ZM4.36066 105.055L5.12538 77.2642L15.8253 77.5585L15.0606 105.35L4.36066 105.055ZM62.7587 104.583C58.8391 106.352 54.4613 106.84 50.2483 105.979L28.1119 99.7653C25.6204 99.0614 22.9536 99.353 20.6744 100.579L18.7749 101.596L19.2833 83.1186C25.3024 79.1152 33.0218 78.7038 39.4321 82.0437L40.7598 82.7318C43.0804 83.93 45.6397 84.5907 48.2502 84.6665L61.2989 85.0251C64.9639 85.1308 68.0765 87.7404 68.8201 91.3314L49.384 90.7948C48.3876 90.7675 47.5586 91.5534 47.5304 92.549C47.5031 93.5454 48.2889 94.3753 49.2845 94.4026L70.7336 94.9929H70.7839C71.7609 94.992 72.56 94.2141 72.5864 93.2379C72.6084 92.4538 72.5503 91.6688 72.412 90.897L86.9091 84.0472C86.9232 84.041 86.9373 84.0339 86.9514 84.0269C89.0076 82.9864 91.4939 83.3344 93.1854 84.9L62.7587 104.583ZM49.8176 60.012C50.0238 59.9812 50.2326 59.9891 50.4361 60.0332C52.6668 59.9521 54.4218 58.0985 54.3804 55.8669C54.3399 53.6352 52.5188 51.8477 50.2864 51.8477C46.4266 51.8485 43.1625 48.9932 42.6497 45.1678C42.137 41.3424 44.5333 37.7276 48.2565 36.711V34.9586C48.2565 33.9622 49.0644 33.1543 50.0608 33.1543C51.0572 33.1543 51.8651 33.9622 51.8651 34.9586V36.6008C55.4324 37.3532 57.9864 40.4976 57.9917 44.1432C57.9917 45.1396 57.1838 45.9475 56.1874 45.9475C55.191 45.9475 54.3831 45.1396 54.3831 44.1432C54.3831 41.8807 52.5488 40.0465 50.2864 40.0465C48.0239 40.0465 46.1896 41.8807 46.1896 44.1432C46.1896 46.4056 48.0239 48.2399 50.2864 48.2399C54.2342 48.2408 57.5424 51.2248 57.9494 55.1515C58.3556 59.0782 55.7293 62.6771 51.8651 63.4859V65.1809C51.8651 66.1774 51.0572 66.9853 50.0608 66.9853C49.0644 66.9853 48.2565 66.1774 48.2565 65.1809V63.3766C44.9086 62.4577 42.5863 59.4165 42.581 55.9444C42.581 54.948 43.3889 54.1401 44.3853 54.1401C45.3817 54.1401 46.1896 54.948 46.1896 55.9444C46.1932 58.0236 47.7517 59.7715 49.8176 60.012Z" fill=""> </path> <defs> <linearGradient id="paint0_linear" x1="36.754" y1="9.02148" x2="36.754" y2="106.5" gradientUnits="userSpaceOnUse"> <stop offset="0.0377767" stop-color="#52B9FB"> </stop> <stop offset="0.775712" stop-color="#2472E1"> </stop> </linearGradient> </defs> </svg></div>
                                                            <span class="mb-0">

         لورم ایپسوم متن ساختگی با تولید سادگی است؟

      </span>
                                                        </div>
                                                    </button>
                                                    <div id="a88dacbe1" class="collapse " aria-labelledby="a88dacbe" data-parent="#a727077279">
                                                        <div class="card-body"><p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-705dc9bd" data-id="705dc9bd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-element elementor-element-60a70c0b change-font-two elementor-widget elementor-widget-text-editor" data-id="60a70c0b" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            هم اکنون با مشاور خود حرف بزنید						</div>
                                    </div>
                                    <div class="elementor-element elementor-element-f2ace elementor-widget__width-initial arrow-move-fw elementor-widget elementor-widget-heading" data-id="f2ace" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-default">برای زندگی بهتر باهم کار کنید.</h4>		</div>
                                    </div>
                                    <div class="elementor-element elementor-element-47d94c8 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-hidden-mobile elementor-hidden-tablet e-transform elementor-view-default elementor-widget elementor-widget-icon" data-id="47d94c8" data-element_type="widget" data-settings="{&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}" data-widget_type="icon.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-wrapper">
                                                <div class="elementor-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="8" viewBox="0 0 17 8" fill="#3C3C3C"><path d="M16.3536 4.35355C16.5488 4.15829 16.5488 3.84171 16.3536 3.64645L13.1716 0.464466C12.9763 0.269204 12.6597 0.269204 12.4645 0.464466C12.2692 0.659728 12.2692 0.976311 12.4645 1.17157L15.2929 4L12.4645 6.82843C12.2692 7.02369 12.2692 7.34027 12.4645 7.53553C12.6597 7.7308 12.9763 7.7308 13.1716 7.53553L16.3536 4.35355ZM0 4.5H16V3.5H0V4.5Z"></path></svg>			</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="elementor-section elementor-top-section elementor-element elementor-element-2a3d4cfe elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2a3d4cfe" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-792024e7" data-id="792024e7" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-4f3afda elementor-widget elementor-widget-heading" data-id="4f3afda" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default">عضو خبرنامه ما شوید</h3>		</div>
                                    </div>
                                    <div class="elementor-element elementor-element-40243a91 elementor-widget elementor-widget-text-editor" data-id="40243a91" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم است. 						</div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2e14a715" data-id="2e14a715" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-44a2a34b newsletter-position elementor-widget elementor-widget-void-section-cf7" data-id="44a2a34b" data-element_type="widget" data-widget_type="void-section-cf7.default">
                                        <div class="elementor-widget-container">
                                            <div class="void-cf7-form-widget-wrapper elementor-shortcode void-cf7-0" data-void-cf7-contact-form-id="35863">
                                                <div class="wpcf7 no-js" id="wpcf7-f35863-p38217-o1" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                                    <form action="/consultino/life-coach/#wpcf7-f35863-p38217-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="35863" />
                                                            <input type="hidden" name="_wpcf7_version" value="5.9.8" />
                                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f35863-p38217-o1" />
                                                            <input type="hidden" name="_wpcf7_container_post" value="38217" />
                                                            <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                        </div>
                                                        <p><span class="wpcf7-form-control-wrap" data-name="text-542"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required advisor-newsletter-name" aria-required="true" aria-invalid="false" placeholder="نام شما" value="" type="text" name="text-542" /></span><span class="wpcf7-form-control-wrap" data-name="email-826"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email advisor-newsletter-mail" aria-required="true" aria-invalid="false" placeholder="آدرس ایمیل" value="" type="email" name="email-826" /></span><input class="wpcf7-form-control has-spinner wpcf7-submit advisor-newsletter-btn" type="submit" value="ارسال" />
                                                        </p><div class="wpcf7-response-output" aria-hidden="true"></div>
                                                    </form>
                                                </div>
                                            </div>		</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- #content -->
        </div>
        <!-- #page -->
        <footer class="wraper_footer custom-footer">		<div data-elementor-type="section" data-elementor-id="38275" class="elementor elementor-38275">
                <section class="elementor-section elementor-top-section elementor-element elementor-element-32557e63 elementor-section-stretched move-icon-main elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="32557e63" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3cedf818" data-id="3cedf818" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7047b4b6 bg-icon-moving-style-three-up elementor-widget__width-auto elementor-absolute elementor-view-default elementor-widget elementor-widget-icon" data-id="7047b4b6" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8" width="8" height="8"><style>		tspan { white-space:pre }		.shp01 { fill: #8214ff } 	</style><path class="shp01" d="M4.3 0.71C6.34 0.71 8 2.37 8 4.42C8 6.46 6.34 8.12 4.3 8.12C2.25 8.12 0.59 6.46 0.59 4.42C0.59 2.37 2.25 0.71 4.3 0.71Z"></path></svg>			</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7c1a4d42 bg-icon-moving-style-three-up elementor-widget__width-auto elementor-absolute elementor-view-default elementor-widget elementor-widget-icon" data-id="7c1a4d42" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 8" width="8" height="8"><style>		tspan { white-space:pre }		.shp03 { fill: #ff601a } 	</style><path class="shp03" d="M4.3 0.71C6.34 0.71 8 2.37 8 4.42C8 6.46 6.34 8.12 4.3 8.12C2.25 8.12 0.59 6.46 0.59 4.42C0.59 2.37 2.25 0.71 4.3 0.71Z"></path></svg>			</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-25767603 bg-icon-moving-style-two elementor-widget__width-auto elementor-absolute elementor-view-default elementor-widget elementor-widget-icon" data-id="25767603" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="14" height="14"><style>		tspan { white-space:pre }		.shp04 { fill: #20c838 } 	</style><path class="shp04" d="M0.01 5.9L8.1 0.01L13.99 8.1L5.9 13.98L0.01 5.9Z"></path></svg>			</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7b14bb92 bg-icon-moving-style-two elementor-widget__width-auto elementor-absolute elementor-view-default elementor-widget elementor-widget-icon" data-id="7b14bb92" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 16" width="15" height="16"><style>		tspan { white-space:pre }		.shp02 { fill: #6eb6ff } 	</style><path class="shp02" d="M15 16L0 10.85L11.81 0L15 16Z"></path></svg>			</div>
                                        </div>
                                    </div>
                                </div>
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-52ad82c7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="52ad82c7" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-5535123f" data-id="5535123f" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-68f4e322 elementor-widget elementor-widget-image" data-id="68f4e322" data-element_type="widget" data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <img width="314" height="60" src="{{url("/images/logo-r.png")}}" class="attachment-full size-full wp-image-38260" alt="" loading="lazy" />															</div>
                                                </div>

                                                <div class="elementor-element elementor-element-7ed52c54 elementor-shape-circle e-grid-align-left e-transform elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="7ed52c54" data-element_type="widget" data-settings="{&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}" data-widget_type="social-icons.default">
                                                    <div class="elementor-widget-container">
                                                        <style>/*! elementor - v3.10.2 - 29-01-2023 */
                                                            .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container{line-height:1;font-size:0}.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid{display:inline-grid}.elementor-widget-social-icons .elementor-grid{grid-column-gap:var(--grid-column-gap,5px);grid-row-gap:var(--grid-row-gap,5px);grid-template-columns:var(--grid-template-columns);justify-content:var(--justify-content,center);justify-items:var(--justify-content,center)}.elementor-icon.elementor-social-icon{font-size:var(--icon-size,25px);line-height:var(--icon-size,25px);width:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));height:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))}.elementor-social-icon{--e-social-icon-icon-color:#fff;display:inline-flex;background-color:#818a91;align-items:center;justify-content:center;text-align:center;cursor:pointer}.elementor-social-icon i{color:var(--e-social-icon-icon-color)}.elementor-social-icon svg{fill:var(--e-social-icon-icon-color)}.elementor-social-icon:last-child{margin:0}.elementor-social-icon:hover{opacity:.9;color:#fff}.elementor-social-icon-android{background-color:#a4c639}.elementor-social-icon-apple{background-color:#999}.elementor-social-icon-behance{background-color:#1769ff}.elementor-social-icon-bitbucket{background-color:#205081}.elementor-social-icon-codepen{background-color:#000}.elementor-social-icon-delicious{background-color:#39f}.elementor-social-icon-deviantart{background-color:#05cc47}.elementor-social-icon-digg{background-color:#005be2}.elementor-social-icon-dribbble{background-color:#ea4c89}.elementor-social-icon-elementor{background-color:#d30c5c}.elementor-social-icon-envelope{background-color:#ea4335}.elementor-social-icon-facebook,.elementor-social-icon-facebook-f{background-color:#3b5998}.elementor-social-icon-flickr{background-color:#0063dc}.elementor-social-icon-foursquare{background-color:#2d5be3}.elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp{background-color:#006400}.elementor-social-icon-github{background-color:#333}.elementor-social-icon-gitlab{background-color:#e24329}.elementor-social-icon-globe{background-color:#818a91}.elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g{background-color:#dd4b39}.elementor-social-icon-houzz{background-color:#7ac142}.elementor-social-icon-instagram{background-color:#262626}.elementor-social-icon-jsfiddle{background-color:#487aa2}.elementor-social-icon-link{background-color:#818a91}.elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in{background-color:#0077b5}.elementor-social-icon-medium{background-color:#00ab6b}.elementor-social-icon-meetup{background-color:#ec1c40}.elementor-social-icon-mixcloud{background-color:#273a4b}.elementor-social-icon-odnoklassniki{background-color:#f4731c}.elementor-social-icon-pinterest{background-color:#bd081c}.elementor-social-icon-product-hunt{background-color:#da552f}.elementor-social-icon-reddit{background-color:#ff4500}.elementor-social-icon-rss{background-color:#f26522}.elementor-social-icon-shopping-cart{background-color:#4caf50}.elementor-social-icon-skype{background-color:#00aff0}.elementor-social-icon-slideshare{background-color:#0077b5}.elementor-social-icon-snapchat{background-color:#fffc00}.elementor-social-icon-soundcloud{background-color:#f80}.elementor-social-icon-spotify{background-color:#2ebd59}.elementor-social-icon-stack-overflow{background-color:#fe7a15}.elementor-social-icon-steam{background-color:#00adee}.elementor-social-icon-stumbleupon{background-color:#eb4924}.elementor-social-icon-telegram{background-color:#2ca5e0}.elementor-social-icon-thumb-tack{background-color:#1aa1d8}.elementor-social-icon-tripadvisor{background-color:#589442}.elementor-social-icon-tumblr{background-color:#35465c}.elementor-social-icon-twitch{background-color:#6441a5}.elementor-social-icon-twitter{background-color:#1da1f2}.elementor-social-icon-viber{background-color:#665cac}.elementor-social-icon-vimeo{background-color:#1ab7ea}.elementor-social-icon-vk{background-color:#45668e}.elementor-social-icon-weibo{background-color:#dd2430}.elementor-social-icon-weixin{background-color:#31a918}.elementor-social-icon-whatsapp{background-color:#25d366}.elementor-social-icon-wordpress{background-color:#21759b}.elementor-social-icon-xing{background-color:#026466}.elementor-social-icon-yelp{background-color:#af0606}.elementor-social-icon-youtube{background-color:#cd201f}.elementor-social-icon-500px{background-color:#0099e5}.elementor-shape-rounded .elementor-icon.elementor-social-icon{border-radius:10%}.elementor-shape-circle .elementor-icon.elementor-social-icon{border-radius:50%}</style>		<div class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-adb8c25" href="#" target="_blank">
						<span class="elementor-screen-only"></span>
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path d="M16.2063 7.05C15.4 7.19687 14.6813 7.60625 14.2219 8.17812C13.9875 8.47188 13.7219 9 13.6094 9.39375C13.4625 9.90938 13.4375 10.2406 13.4375 11.6781V13H12.2656H11.0938V14.4219V15.8438H12.2656H13.4375V19.4219V23H14.875H16.3125V19.4219V15.8438L17.4281 15.8375L18.5469 15.8281L18.7063 14.5312C18.7969 13.8187 18.875 13.1812 18.8844 13.1156L18.9 13H17.6063H16.3125V11.8812C16.3125 10.6562 16.3344 10.4719 16.4906 10.1812C16.5906 9.99375 16.7875 9.84062 17.0156 9.76562C17.2406 9.69063 17.6688 9.65938 18.4625 9.65625H19.1562V8.37813V7.1L18.9781 7.08125C18.1281 6.99063 16.6312 6.97187 16.2063 7.05Z"></path></svg>					</a>
				</span>
                                                            <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-e105f2c" href="#" target="_blank">
						<span class="elementor-screen-only"></span>
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path d="M17.7246 7.74381C16.6031 7.99342 15.7137 8.66139 15.1828 9.65631C14.8172 10.3383 14.6766 11.263 14.8102 12.054L14.8348 12.1876H14.6977C14.6203 12.1876 14.3602 12.163 14.1211 12.1348C11.8359 11.8536 9.74414 10.8481 8.09883 9.23795C7.87031 9.01647 7.59609 8.72467 7.48711 8.59459C7.37461 8.46452 7.27266 8.35553 7.25859 8.35553C7.16719 8.35553 6.87187 9.13952 6.79453 9.58249C6.55547 10.9747 7.09336 12.3317 8.22891 13.2001L8.33086 13.2774L8.15859 13.2563C7.71211 13.2071 7.21992 13.063 6.87891 12.8907C6.80156 12.852 6.73125 12.8204 6.71719 12.8204C6.70312 12.8204 6.70312 12.961 6.71367 13.1298C6.79102 14.2266 7.32539 15.204 8.19727 15.8544C8.53477 16.1075 8.87227 16.2798 9.26602 16.4098L9.56133 16.5048L9.35742 16.5469C9.11836 16.5962 8.4082 16.6102 8.17266 16.5715C8.05312 16.5505 8.00391 16.554 8.00391 16.5821C8.00391 16.684 8.24297 17.1833 8.43281 17.468C9.03398 18.3856 10.0605 19.0149 11.1398 19.1309L11.3789 19.1555L11.2207 19.2786C10.5352 19.7989 9.47695 20.2805 8.51367 20.502C7.89141 20.6462 6.86484 20.7235 6.30937 20.6708C6.13711 20.6532 6 20.6497 6 20.6637C6 20.6778 6.1793 20.7903 6.39727 20.9169C7.73672 21.6903 9.05156 22.1122 10.6687 22.2809C11.168 22.3337 12.7395 22.302 13.207 22.2317C15.2285 21.9188 16.8281 21.2333 18.273 20.0555C20.6707 18.1044 22.1684 14.9579 22.1719 11.8641V11.3508L22.4848 11.1012C22.882 10.7813 23.5078 10.1309 23.7891 9.7442C23.9086 9.57897 24 9.43483 23.9895 9.42428C23.9824 9.41374 23.8559 9.45241 23.7152 9.50866C23.427 9.62467 22.9523 9.77233 22.6816 9.83209C22.3758 9.90241 21.9891 9.96569 22.0207 9.94108C22.0348 9.92702 22.1402 9.84967 22.2492 9.7653C22.5059 9.57194 22.8891 9.16764 23.0613 8.90749C23.209 8.68952 23.4516 8.1903 23.4902 8.03209C23.5148 7.93717 23.5043 7.94069 23.0437 8.17272C22.5797 8.40827 21.9434 8.64381 21.4266 8.77038L21.1594 8.84069L21.0047 8.68249C20.6602 8.33092 19.9605 7.94069 19.4121 7.79303C19.0289 7.69108 18.0902 7.66295 17.7246 7.74381Z"></path></svg>					</a>
				</span>
                                                            <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-127012b" href="#" target="_blank">
						<span class="elementor-screen-only"></span>
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path d="M9.23316 7.04377C8.68902 7.18869 8.18316 7.69729 8.04097 8.2469C7.98902 8.45198 7.98629 8.90862 8.04097 9.11369C8.2734 10.0106 9.20035 10.5629 10.089 10.336C10.6878 10.1828 11.1664 9.70705 11.3195 9.11369C11.3742 8.90315 11.3769 8.45744 11.3222 8.25784C11.1691 7.68088 10.6824 7.18869 10.1164 7.04377C9.90582 6.98909 9.4355 6.98909 9.23316 7.04377Z"></path><path d="M18.0516 11.4324C17.1301 11.5527 16.3234 12.0422 15.8504 12.7695L15.752 12.9199L15.7438 12.2828L15.7383 11.6484H14.3438H12.9492V16.3242V21H14.4121H15.875V18.427C15.875 15.6379 15.8805 15.5312 16.0254 15.0691C16.2524 14.3582 16.7692 14 17.5676 14C18.0488 14 18.3278 14.0984 18.5903 14.3609C18.7817 14.5496 18.9184 14.823 19.0004 15.1867C19.0578 15.4301 19.0578 15.5121 19.066 18.2164L19.077 21H20.5399H22.0028L21.9918 17.8609C21.9836 15.143 21.9782 14.6863 21.9399 14.4375C21.8688 13.9891 21.8114 13.7348 21.7129 13.434C21.3 12.1898 20.4797 11.5719 19.0496 11.4297C18.7215 11.3969 18.3195 11.3996 18.0516 11.4324Z"></path><path d="M8.21875 16.3242V21H9.68164H11.1445V16.3242V11.6484H9.68164H8.21875V16.3242Z"></path></svg>					</a>
				</span>
                                                            <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-b6f16ff" href="#" target="_blank">
						<span class="elementor-screen-only"></span>
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path d="M13.0039 8.02047C11.5902 8.0861 11.2648 8.12711 10.7727 8.28571C9.39453 8.73961 8.45664 9.80875 8.15313 11.2771C8.00273 12.0017 8 12.0701 8 15.0041C8 17.938 8.00273 18.0064 8.15313 18.731C8.45664 20.1994 9.39453 21.2685 10.7727 21.7224C11.4262 21.9357 11.9813 21.9767 14.4641 21.9959C16.8648 22.015 18.1336 21.9685 18.7543 21.84C19.766 21.6295 20.6684 21.0361 21.2016 20.2377C21.598 19.6416 21.8004 19.0345 21.9234 18.0884C21.9672 17.7658 21.9727 17.4267 21.9727 15.0041C21.9727 12.0701 21.9699 12.0017 21.8195 11.2771C21.557 10.0138 20.8461 9.06227 19.7469 8.50992C19.2082 8.23922 18.6641 8.11344 17.8164 8.05602C17.3926 8.02867 13.4578 7.9986 13.0039 8.02047ZM17.1055 9.15524C17.543 9.16891 18.0133 9.19625 18.1555 9.20992C18.8637 9.28649 19.4352 9.54078 19.9055 9.98649C20.4961 10.547 20.7641 11.258 20.8379 12.4802C20.8734 13.0763 20.8734 16.9318 20.8379 17.5279C20.7641 18.7392 20.4988 19.4529 19.9191 20.0107C19.4406 20.4673 18.8527 20.7271 18.1254 20.7982C16.9715 20.9158 13.0148 20.9158 11.8473 20.7982C11.1199 20.7271 10.532 20.4673 10.0535 20.0107C9.47656 19.4556 9.21133 18.7502 9.1375 17.5443C9.09922 16.9619 9.09922 13.0463 9.1375 12.4638C9.18398 11.6927 9.30156 11.1705 9.52031 10.7275C9.94961 9.86344 10.7836 9.31383 11.8281 9.20992C12.7687 9.11422 15.2461 9.08961 17.1055 9.15524Z"></path><path d="M18.3824 10.5771C18.0871 10.722 17.9395 10.9708 17.9395 11.3126C17.9395 11.6544 18.0871 11.9032 18.3824 12.0482C18.5246 12.122 18.5793 12.1329 18.7598 12.1329C18.9402 12.1329 18.9949 12.122 19.1371 12.0482C19.4324 11.9032 19.5801 11.6572 19.5801 11.3099C19.5801 10.8259 19.2437 10.4923 18.757 10.4923C18.5793 10.4923 18.5246 10.5032 18.3824 10.5771Z"></path><path d="M14.3308 11.6298C12.9417 11.8814 11.8261 13.0079 11.58 14.4025C11.528 14.7033 11.528 15.3048 11.58 15.6056C11.796 16.8251 12.6929 17.8669 13.8659 18.2579C14.3472 18.4193 15.069 18.4712 15.564 18.381C16.6386 18.1814 17.5437 17.506 18.0194 16.5517C18.2792 16.0294 18.3776 15.6029 18.3776 15.004C18.3776 14.4052 18.2792 13.9786 18.0194 13.4564C17.5437 12.5021 16.6386 11.8267 15.564 11.6271C15.2823 11.5751 14.6206 11.5779 14.3308 11.6298ZM15.3835 12.7372C16.1272 12.8685 16.8245 13.4427 17.0979 14.1454C17.2347 14.4982 17.262 14.6759 17.2511 15.0861C17.2401 15.4142 17.2292 15.4853 17.1499 15.715C16.9968 16.1689 16.7288 16.549 16.3788 16.8115C16.0999 17.022 15.9714 17.0931 15.6761 17.1915C14.8558 17.465 13.9562 17.249 13.3354 16.6283C13.0702 16.3658 12.8925 16.0759 12.7667 15.715C12.6792 15.4634 12.6765 15.4443 12.6765 15.004C12.6765 14.5638 12.6792 14.5447 12.7667 14.2931C12.8925 13.9322 13.0702 13.6423 13.3354 13.3798C13.8796 12.8329 14.6179 12.6033 15.3835 12.7372Z"></path></svg>					</a>
				</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-48219773" data-id="48219773" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6bfa5b32 elementor-widget elementor-widget-heading" data-id="6bfa5b32" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">منو</h6>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-c21e961 elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="c21e961" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="https://rosetheme.us/consultino/">

                                                                    <span class="elementor-icon-list-text">صفحه اصلی</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-57d01c71 elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="57d01c71" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="https://rosetheme.us/consultino/about-simple/">

                                                                    <span class="elementor-icon-list-text">درباره ما</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1a291bcd elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1a291bcd" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="https://rosetheme.us/consultino/service-creative/">

                                                                    <span class="elementor-icon-list-text">خدمات</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-6f205c5d elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="6f205c5d" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="https://rosetheme.us/consultino/contact-company/">

                                                                    <span class="elementor-icon-list-text">تماس با ما</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-16970963" data-id="16970963" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-3ae9e592 elementor-widget elementor-widget-heading" data-id="3ae9e592" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">آخرین مطالب</h6>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-519a758b elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="519a758b" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="https://rosetheme.us/consultino/service-company/">

                                                                    <span class="elementor-icon-list-text">برندها</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-28c5eb0b elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="28c5eb0b" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="https://rosetheme.us/consultino/service-simple/">

                                                                    <span class="elementor-icon-list-text">پلت فرم ها</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2622ef2f elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="2622ef2f" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="https://rosetheme.us/consultino/service-modern/">

                                                                    <span class="elementor-icon-list-text">خدمات مدرن</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-4de316ab elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4de316ab" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="https://rosetheme.us/consultino/blog/">

                                                                    <span class="elementor-icon-list-text">وبلاگ</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7b71ef30" data-id="7b71ef30" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-17167e8d elementor-widget elementor-widget-heading" data-id="17167e8d" data-element_type="widget" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h6 class="elementor-heading-title elementor-size-default">تماس با ما</h6>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-532be6a4 elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="532be6a4" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="http://ایران%20،%20تهران%20،%20خیابان%20ولیعصر">

												<span class="elementor-icon-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><path d="M18.763 1.075c-0.147-0.091-0.331-0.099-0.486-0.022l-5.776 2.888-5.776-2.888c-0.141-0.070-0.306-0.070-0.447 0l-6 3c-0.169 0.085-0.276 0.258-0.276 0.447v15c0 0.173 0.090 0.334 0.237 0.425 0.080 0.050 0.171 0.075 0.263 0.075 0.076 0 0.153-0.018 0.224-0.053l5.776-2.888 5.776 2.888c0.141 0.070 0.307 0.070 0.447 0l6-3c0.169-0.085 0.276-0.258 0.276-0.447v-15c-0-0.173-0.090-0.334-0.237-0.425zM6 16.191l-5 2.5v-13.882l5-2.5v13.882zM7 2.309l5 2.5v13.882l-5-2.5v-13.882zM18 16.191l-5 2.5v-13.882l5-2.5v13.882z"></path></svg>						</span>
                                                                    <span class="elementor-icon-list-text">ایران ، تهران ، خیابان ولیعصر</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-61640f61 elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="61640f61" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="">

												<span class="elementor-icon-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20" height="20" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">    <g>        <g>            <path d="M480,85H10C4.478,85,0,89.478,0,95v300c0,5.522,4.478,10,10,10h470c5.522,0,10-4.478,10-10V95   C490,89.478,485.522,85,480,85z M443.676,105L245,223.36L46.324,105H443.676z M470,385H20V112.597l150.807,89.842l-107.014,84.72   l12.414,15.682l112.986-89.447l50.688,30.197C241.459,244.53,243.229,245,245,245s3.541-0.47,5.118-1.409l50.688-30.197   l112.986,89.447l12.414-15.682L319.193,202.44L470,112.597V385z"></path>        </g>    </g></svg>						</span>
                                                                    <span class="elementor-icon-list-text">info@example.com</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-23a5ce3c elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="23a5ce3c" data-element_type="widget" data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                                <a href="">

												<span class="elementor-icon-list-icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><path fill="" d="M16 20c-1.771 0-3.655-0.502-5.6-1.492-1.793-0.913-3.564-2.22-5.122-3.78s-2.863-3.333-3.775-5.127c-0.988-1.946-1.49-3.83-1.49-5.601 0-1.148 1.070-2.257 1.529-2.68 0.661-0.609 1.701-1.32 2.457-1.32 0.376 0 0.816 0.246 1.387 0.774 0.425 0.394 0.904 0.928 1.383 1.544 0.289 0.372 1.73 2.271 1.73 3.182 0 0.747-0.845 1.267-1.739 1.816-0.346 0.212-0.703 0.432-0.961 0.639-0.276 0.221-0.325 0.338-0.333 0.364 0.949 2.366 3.85 5.267 6.215 6.215 0.021-0.007 0.138-0.053 0.363-0.333 0.207-0.258 0.427-0.616 0.639-0.961 0.55-0.894 1.069-1.739 1.816-1.739 0.911 0 2.81 1.441 3.182 1.73 0.616 0.479 1.15 0.958 1.544 1.383 0.528 0.57 0.774 1.011 0.774 1.387 0 0.756-0.711 1.799-1.319 2.463-0.424 0.462-1.533 1.537-2.681 1.537zM3.994 1c-0.268 0.005-0.989 0.333-1.773 1.055-0.744 0.686-1.207 1.431-1.207 1.945 0 6.729 8.264 15 14.986 15 0.513 0 1.258-0.465 1.944-1.213 0.723-0.788 1.051-1.512 1.056-1.781-0.032-0.19-0.558-0.929-1.997-2.037-1.237-0.952-2.24-1.463-2.498-1.469-0.018 0.005-0.13 0.048-0.357 0.336-0.197 0.251-0.408 0.594-0.613 0.926-0.56 0.911-1.089 1.772-1.858 1.772-0.124 0-0.246-0.024-0.363-0.071-2.625-1.050-5.729-4.154-6.779-6.779-0.126-0.315-0.146-0.809 0.474-1.371 0.33-0.299 0.786-0.579 1.228-0.851 0.332-0.204 0.676-0.415 0.926-0.613 0.288-0.227 0.331-0.339 0.336-0.357-0.007-0.258-0.517-1.261-1.469-2.498-1.108-1.439-1.847-1.964-2.037-1.997z"></path></svg>						</span>
                                                                    <span class="elementor-icon-list-text">09121234567</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-3b6ad727 elementor-widget elementor-widget-text-editor" data-id="3b6ad727" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        ساعات کاری: شنبه تا پنجشنبه  9-17						</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-52cef832 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="52cef832" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-594359f7" data-id="594359f7" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-791a7ff4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="791a7ff4" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-681f8baa" data-id="681f8baa" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-4eb6d1af elementor-widget elementor-widget-text-editor" data-id="4eb6d1af" data-element_type="widget" data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        کلیه حقوق این قالب متعلق به
                                                        <a href="https://apchish.ir">آپاچی</a>
                                                        میباشد.						</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </footer>	</div>
    </body>
    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <script>
        jQuery(document).ready(function($){
            $(document).on('click', '.plus', function(e) { // replace '.quantity' with document (without single quote)
                $input = $(this).prev('input.qty');
                var val = parseInt($input.val());
                var step = $input.attr('step');
                step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
                $input.val( val + step ).change();
            });
            $(document).on('click', '.minus',  // replace '.quantity' with document (without single quote)
                function(e) {
                    $input = $(this).next('input.qty');
                    var val = parseInt($input.val());
                    var step = $input.attr('step');
                    step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
                    if (val > 0) {
                        $input.val( val - step ).change();
                    }
                });
        });
    </script>
    <script type="text/javascript">
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <style id='consultino-customizer-css-inline-css'>
        h1 {font-family:'Estedad-Bold';font-weight:600 !important;text-transform:capitalize;font-size:50px;line-height:58px !important;color:#30353b;}h2 {font-family:'Estedad-Bold';font-weight:600 !important;text-transform:capitalize;font-size:40px;line-height:50px !important;color:#30353b;}h3 {font-family:'Estedad-Bold';font-weight:600 !important;text-transform:capitalize;font-size:32px;line-height:42px !important;color:#30353b;}h4 {font-family:'Estedad-Bold';font-weight:600 !important;text-transform:capitalize;font-size:30px;line-height:40px !important;color:#30353b;}h5 {font-family:'Estedad-Bold';font-weight:600 !important;text-transform:capitalize;font-size:21px;line-height:30px !important;color:#30353b;}h6 {font-family:'Estedad-Bold';font-weight:600 !important;text-transform:capitalize;font-size:18px;line-height:28px !important;color:#30353b;}body, p {font-family:'IranYekan';font-weight:normal !important;text-transform:none;font-size:16px;line-height:28px !important;color:#696e79;}.consultino-button > .consultino-button-main, .consultino-custom-button > .consultino-custom-button-main, .gdpr-notice .btn, .widget-area > .widget.widget_price_filter .button, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn, .comments-area .comment-form > p button[type=submit], .comments-area .comment-form > p button[type=reset], .wraper_error_main.style-one .error_main .btn, .wraper_error_main.style-two .error_main .btn, .wraper_error_main.style-three .error_main_item .btn, .wraper_error_main.style-four .error_main .btn {font-family:'Sora',sans-serif;font-weight:600 !important;text-transform:none;font-size:16px;line-height:28px !important;letter-spacing:0.02px;background-color:#0A46E2;color:#ffffff;padding-top:14px;padding-right:44px;padding-bottom:14px;padding-left:44px;}.consultino-button > .consultino-button-main:hover, .consultino-custom-button > .consultino-custom-button-main:hover, .gdpr-notice .btn:hover,  .widget-area > .widget.widget_price_filter .button:hover, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .page.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .tribe_events.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .testimonial.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .team.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .portfolio.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .case-studies.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .client.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .product.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:before, .comments-area .comment-form > p button[type=reset]:hover, .wraper_error_main.style-one .error_main .btn:hover, .wraper_error_main.style-two .error_main .btn:hover, .wraper_error_main.style-three .error_main_item .btn:hover, .wraper_error_main.style-four .error_main .btn:hover, .post.style-default .entry-main .entry-extra .entry-extra-item .post-read-more .btn:hover span,.widget-area > .widget.widget_search .search-form input[type="submit"]:hover {background-color:#0A46E2;color:#ffffff;}.wraper_comingsoon_main {background-color: #feefd8;background-image:url( 'https://rosetheme.us/consultino/wp-content/uploads/2022/08/coming-soon-1.jpg ');}.right-sidebar .widget-area .widget_tag_cloud .tagcloud a, .post-tags a[rel="tag"] {background-color: #ffffff;color: #696969;}.single-post .wraper_blog_main.style-default .blog_single .single-post .entry-extra-item{ background: rgba(0,0,0,0.83)};body > .scrollup {background-color: #ffffff;}body > .scrollup svg {color: #1e4ec4;}.rt-cursor-dot-outline,.rt-cursor-dot-outline-2 {}.rt-cursor-dot,.rt-cursor-dot-2 {background-color: #dc5656;}@media screen and (max-width: 767px) {body {font-family:'IranYekan',sans-serif;font-weight:normal !important;text-transform:none;font-size:16px;line-height:28px !important;}h1 {font-family:'IranYekan',sans-serif;font-weight:600 !important;text-transform:capitalize;font-size:40px;line-height:48px !important;}h2 {font-family:'IranYekan',sans-serif;font-weight:600 !important;text-transform:capitalize;font-size:35px;line-height:44px !important;}h3 {font-family:'Sora',sans-serif;font-weight:600 !important;text-transform:capitalize;font-size:32px;line-height:42px !important;}h4 {font-family:'Sora',sans-serif;font-weight:600 !important;text-transform:capitalize;font-size:28px;line-height:38px !important;}h5 {font-family:'Sora',sans-serif;font-weight:600 !important;text-transform:capitalize;font-size:19px;line-height:29px !important;}h6 {font-family:'Sora',sans-serif;font-weight:600 !important;text-transform:capitalize;font-size:17px;line-height:27px !important;}}
    </style>
    <link rel='stylesheet' id='elementor-post-38261-css' href='{{url("/css/post-38261.css")}}' media='all' />
    <link rel='stylesheet' id='elementor-post-38261-css' href='{{url("/css/post-38261.css")}}' media='all' />
    <link rel='stylesheet' id='rt-menu-style-three-css' href='{{url("/css/header-menu-style-three.css")}}' media='all' />
    <link rel='stylesheet' id='elementor-post-41825-css' href='{{url("/css/post-41825.css")}}' media='all' />
    <link rel='stylesheet' id='elementor-post-8381-css' href='{{url("/css/post-8381.css")}}' media='all' />
    <link rel='stylesheet' id='elementor-post-9311-css' href='{{url("/css/post-9311.css")}}' media='all' />
    <link rel='stylesheet' id='elementor-post-35341-css' href='{{url("/css/post-35341.css")}}' media='all' />
    <link rel='stylesheet' id='rt-button-style-four-css' href='{{url("/css/button-style-four.css")}}' media='all' />
    <link rel='stylesheet' id='rt-testimonial-css' href='{{url("/css/rt-testimonial.css")}}' media='all' />
    <link rel='stylesheet' id='rt-image-scroll-style-css' href='{{url("/css/rt-img-scroll.css")}}' media='all' />
    <link rel='stylesheet' id='rt-accordion-css' href='{{url("/css/rt-accordion.css")}}' media='all' />
    <link rel='stylesheet' id='elementor-post-38275-css' href='{{url("/css/post-38275.css")}}' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='{{url("/css/rs6.css")}}' media='all' />
    <style id='rs-plugin-settings-inline-css'>
        #rs-demo-id {}
    </style>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.9.8" id="swv-js"></script>
    <script id="contact-form-7-js-extra">
        var wpcf7 = {"api":{"root":"https:\/\/rosetheme.us\/consultino\/wp-json\/","namespace":"contact-form-7\/v1"}};
    </script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.9.8" id="contact-form-7-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.7.17" defer async id="tp-tools-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.7.17" defer async id="revmin-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.7.3.0" id="jquery-blockui-js"></script>
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {"ajax_url":"\/consultino\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/consultino\/?wc-ajax=%%endpoint%%&elementor_page_id=38217","i18n_view_cart":"\u0645\u0634\u0627\u0647\u062f\u0647 \u0633\u0628\u062f \u062e\u0631\u06cc\u062f","cart_url":"https:\/\/rosetheme.us\/consultino\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
    </script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=7.3.0" id="wc-add-to-cart-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.7.3.0" id="js-cookie-js"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {"ajax_url":"\/consultino\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/consultino\/?wc-ajax=%%endpoint%%&elementor_page_id=38217"};
    </script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=7.3.0" id="woocommerce-js"></script>
    <script id="wc-cart-fragments-js-extra">
        var wc_cart_fragments_params = {"ajax_url":"\/consultino\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/consultino\/?wc-ajax=%%endpoint%%&elementor_page_id=38217","cart_hash_key":"wc_cart_hash_d4e489e9a05797c4b70359f56aafd2dc","fragment_name":"wc_fragments_d4e489e9a05797c4b70359f56aafd2dc","request_timeout":"5000"};
    </script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=7.3.0" id="wc-cart-fragments-js"></script>
    <script src="https://rosetheme.us/consultino/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
    <script id="wp-util-js-extra">
        var _wpUtilSettings = {"ajax":{"url":"\/consultino\/wp-admin\/admin-ajax.php"}};
    </script>
    <script src="https://rosetheme.us/consultino/wp-includes/js/wp-util.min.js?ver=6.6.2" id="wp-util-js"></script>
    <script id="wp-api-request-js-extra">
        var wpApiSettings = {"root":"https:\/\/rosetheme.us\/consultino\/wp-json\/","nonce":"479292afd2","versionString":"wp\/v2\/"};
    </script>
    <script src="https://rosetheme.us/consultino/wp-includes/js/api-request.min.js?ver=6.6.2" id="wp-api-request-js"></script>
    <script src="https://rosetheme.us/consultino/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
    <script src="https://rosetheme.us/consultino/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'rtl' ] } );
    </script>
    <script src="https://rosetheme.us/consultino/wp-includes/js/dist/url.min.js?ver=36ae0e4dd9043bb8749b" id="wp-url-js"></script>
    <script id="wp-api-fetch-js-translations">
        ( function( domain, translations ) {
            var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
            localeData[""].domain = domain;
            wp.i18n.setLocaleData( localeData, domain );
        } )( "default", {"translation-revision-date":"2024-11-04 10:43:11+0000","generator":"GlotPress\/4.0.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=1; plural=0;","lang":"fa"},"An unknown error occurred.":["\u062e\u0637\u0627\u06cc\u06cc \u0646\u0627\u0634\u0646\u0627\u062e\u062a\u0647 \u0631\u062e \u062f\u0627\u062f."],"The response is not a valid JSON response.":["\u067e\u0627\u0633\u062e\u060c \u06cc\u06a9 \u067e\u0627\u0633\u062e JSON \u0645\u0639\u062a\u0628\u0631 \u0646\u06cc\u0633\u062a."],"Media upload failed. If this is a photo or a large image, please scale it down and try again.":["\u0628\u0627\u0631\u06af\u0630\u0627\u0631\u06cc \u0631\u0633\u0627\u0646\u0647 \u0646\u0627\u0645\u0648\u0641\u0642 \u0628\u0648\u062f. \u0627\u06af\u0631 \u0627\u0646\u062f\u0627\u0632\u0647 \u0627\u06cc\u0646 \u0639\u06a9\u0633 \u06cc\u0627 \u062a\u0635\u0648\u06cc\u0631 \u0628\u0632\u0631\u06af \u0627\u0633\u062a\u060c \u0644\u0637\u0641\u0627 \u0645\u0642\u06cc\u0627\u0633 \u0622\u0646\u200c\u0631\u0627 \u067e\u0627\u06cc\u06cc\u0646 \u0628\u06cc\u0627\u0648\u0631\u06cc\u062f \u0648 \u062f\u0648\u0628\u0627\u0631\u0647 \u062a\u0644\u0627\u0634 \u0646\u0645\u0627\u06cc\u06cc\u062f."],"You are probably offline.":["\u0634\u0645\u0627 \u0627\u062d\u062a\u0645\u0627\u0644\u0627\u064b \u0622\u0641\u0644\u0627\u06cc\u0646 \u0647\u0633\u062a\u06cc\u062f."]}},"comment":{"reference":"wp-includes\/js\/dist\/api-fetch.js"}} );
    </script>
    <script src="https://rosetheme.us/consultino/wp-includes/js/dist/api-fetch.min.js?ver=4c185334c5ec26e149cc" id="wp-api-fetch-js"></script>
    <script id="wp-api-fetch-js-after">
        wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "https://rosetheme.us/consultino/wp-json/" ) );
        wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware( "479292afd2" );
        wp.apiFetch.use( wp.apiFetch.nonceMiddleware );
        wp.apiFetch.use( wp.apiFetch.mediaUploadMiddleware );
        wp.apiFetch.nonceEndpoint = "https://rosetheme.us/consultino/wp-admin/admin-ajax.php?action=rest-nonce";
    </script>
    <script src="https://rosetheme.us/consultino/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
    <script id="woo-variation-swatches-js-extra">
        var woo_variation_swatches_options = {"show_variation_label":"1","clear_on_reselect":"","variation_label_separator":":","is_mobile":"","show_variation_stock":"","stock_label_threshold":"5","cart_redirect_after_add":"no","enable_ajax_add_to_cart":"yes","cart_url":"https:\/\/rosetheme.us\/consultino\/cart\/","is_cart":""};
    </script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/woo-variation-swatches/assets/js/frontend.min.js?ver=1675257469" id="woo-variation-swatches-js"></script>
    <script id="mailchimp-woocommerce-js-extra">
        var mailchimp_public_data = {"site_url":"https:\/\/rosetheme.us\/consultino","ajax_url":"https:\/\/rosetheme.us\/consultino\/wp-admin\/admin-ajax.php","disable_carts":"","subscribers_only":"","language":"fa","allowed_to_set_cookies":"1"};
    </script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/mailchimp-for-woocommerce/public/js/mailchimp-woocommerce-public.min.js?ver=2.7.6.01" id="mailchimp-woocommerce-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/themes/consultino/assets/js/consultino-custom.js?ver=1731229253" id="consultino-custom-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/themes/consultino/assets/js/bootstrap.min.js?ver=1731229253" id="bootstrap-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/themes/consultino/assets/js/swiper.min.js?ver=1731229253" id="swiper-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/themes/consultino/assets/js/menu-vendor.js?ver=1731229253" id="menu-vendor-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/themes/consultino/assets/js/consultino-app.js?ver=1731229253" id="consultino-new-left-menu-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/themes/consultino/assets/js/consultino-vertical-menu.js?ver=1731229253" id="consultino-vertical-menu-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/themes/consultino/assets/js/jquery.sidr.min.js?ver=1731229253" id="sidr-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/themes/consultino/assets/js/fancy-box.js?ver=1731229253" id="fancy-box-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/themes/consultino/assets/js/sweetalert.min.js?ver=1731229253" id="sweetalert-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/themes/consultino/assets/js/ajax_add_to_cart.js?ver=1731229253" id="ajax_add_to_cart-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1" id="jquery-numerator-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/radiantthemes-addons/assets/js/testimonial.js?ver=1731229253" id="radiantthemes-testimonial-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/radiantthemes-addons/assets/js/carousel.min.js?ver=1731229253" id="rt-carousel-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/radiantthemes-addons/assets/js/rt-data-move.js?ver=1731229253" id="rt-data-move-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.24.2%20%20" id="elementor-pro-webpack-runtime-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.24.4" id="elementor-webpack-runtime-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.24.4" id="elementor-frontend-modules-js"></script>
    <script id="elementor-pro-frontend-js-before">
        var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/rosetheme.us\/consultino\/wp-admin\/admin-ajax.php","nonce":"d28b6401ab","urls":{"assets":"https:\/\/rosetheme.us\/consultino\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/rosetheme.us\/consultino\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"woocommerce":{"menu_cart":{"cart_page_url":"https:\/\/rosetheme.us\/consultino\/cart\/","checkout_page_url":"https:\/\/rosetheme.us\/consultino\/checkout\/"}},"facebook_sdk":{"lang":"fa_IR","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/rosetheme.us\/consultino\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
    </script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.24.2%20%20" id="elementor-pro-frontend-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2" id="elementor-waypoints-js"></script>
    <script src="https://rosetheme.us/consultino/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"\u0627\u0634\u062a\u0631\u0627\u06a9 \u06af\u0630\u0627\u0631\u06cc \u062f\u0631 Facebook","shareOnTwitter":"\u0627\u0634\u062a\u0631\u0627\u06a9 \u06af\u0630\u0627\u0631\u06cc \u062f\u0631 Twitter","pinIt":"\u067e\u06cc\u0646 \u06a9\u0646\u06cc\u062f","download":"\u062f\u0627\u0646\u0644\u0648\u062f","downloadImage":"\u062f\u0627\u0646\u0644\u0648\u062f \u062a\u0635\u0648\u06cc\u0631","fullscreen":"\u062a\u0645\u0627\u0645\u200c\u0635\u0641\u062d\u0647","zoom":"\u0628\u0632\u0631\u06af\u0646\u0645\u0627\u06cc\u06cc","share":"\u0627\u0634\u062a\u0631\u0627\u06a9 \u06af\u0630\u0627\u0631\u06cc","playVideo":"\u067e\u062e\u0634 \u0648\u06cc\u062f\u06cc\u0648","previous":"\u0642\u0628\u0644\u06cc","next":"\u0628\u0639\u062f\u06cc","close":"\u0628\u0633\u062a\u0646"},"is_rtl":true,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"\u0645\u0648\u0628\u0627\u06cc\u0644","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"\u062a\u0628\u0644\u062a","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"\u0644\u067e \u062a\u0627\u067e","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"\u0635\u0641\u062d\u0647 \u0639\u0631\u06cc\u0636 (Widescreen)","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.24.4","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"a11y_improvements":true,"additional_custom_breakpoints":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"kit-elements-defaults":true,"page-transitions":true,"notes":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/rosetheme.us\/consultino\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","woocommerce_notices_elements":[]},"post":{"id":38217,"title":"%D8%AF%D9%85%D9%88%DB%8C%20%D9%85%D8%B4%D8%A7%D9%88%D8%B1%D9%87%20%D8%B2%D9%86%D8%AF%DA%AF%DB%8C%20%E2%80%93%20Consultino","excerpt":"","featuredImage":false}};
    </script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.24.4" id="elementor-frontend-js"></script>
    <script src="https://rosetheme.us/consultino/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.24.2%20%20" id="pro-elements-handlers-js"></script>

</html>
