<?php

use Illuminate\Support\Facades\Route;

Route::get('/demo', function () {
    return view('template.home');
});

Route::get('/test', function () {
    return view('welcome');
});




Route::get('/', function () {
    return view('test');
});


Route::get('/', \App\Livewire\Home::class)->name("home");
Route::get('/contact-us', \App\Livewire\ContactUs::class)->name("contact-us");
Route::get('/about-us', \App\Livewire\AboutUs::class)->name("about-us");



Route::prefix("template")->group(function () {
    Route::get('/about-us', function () {
        return view('template.about-us');
    });
    Route::get('/home', function () {
        return view('template.home');
    });

    Route::get('/index-textslider', function () {
        return view('template.index-textslider');
    });

    Route::get('/index-videobg', function () {
        return view('template.index-videobg');
    });
    Route::get('/index-ripplebg', function () {
        return view('template.index-ripplebg');
    });
    Route::get('/index-textslider', function () {
        return view('template.index-textslider');
    });
    Route::get('/index-videobg', function () {
        return view('template.index-videobg');
    });
    Route::get('/index-ripplebg', function () {
        return view('template.index-ripplebg');
    });

    Route::get('/contact-us', function () {
        return view('template.contact-us');
    });

    Route::get('/portfolio', function () {
        return view('template.portfolio');
    });

    Route::get('/portfolio-details', function () {
        return view('template.portfolio-details');
    });
    Route::get('/portfolio-details-gallery', function () {
        return view('template.portfolio-details-gallery');
    });
    Route::get('/portfolio-details-video', function () {
        return view('template.portfolio-details-video');
    });
    Route::get('/shop', function () {
        return view('template.shop');
    });

    Route::get('/shop-left-sidebar', function () {
        return view('template.shop-left-sidebar');
    });
    Route::get('/shop-4-column', function () {
        return view('template.shop-4-column');
    });

    Route::get('/shop-without-sidebar', function () {
        return view('template.shop-without-sidebar');
    });

    Route::get('/product-details', function () {
        return view('template.product-details');
    });

    Route::get('/product-details-left-sidebar', function () {
        return view('template.product-details-left-sidebar');
    });
    Route::get('/product-details-variable', function () {
        return view('template.product-details-variable');
    });
    Route::get('/product-details-without-sidebar', function () {
        return view('template.product-details-without-sidebar');
    });

    Route::get('/blog', function () {
        return view('template.blog');
    });

    Route::get('/blog-left-sidebar', function () {
        return view('template.blog-left-sidebar');
    });
    Route::get('/blog-3-column', function () {
        return view('template.blog-3-column');
    });
    Route::get('/blog-details', function () {
        return view('template.blog-details');
    });

    Route::get('/blog-details-left-sidebar', function () {
        return view('template.blog-details-left-sidebar');
    });
    Route::get('/blog-details-without-sidebar', function () {
        return view('template.blog-details-without-sidebar');
    });

    Route::get('/blog-details-audio', function () {
        return view('template.blog-details-audio');
    });
    Route::get('/blog-details-video', function () {
        return view('template.blog-details-video');
    });

    Route::get('/blog-details-gallery', function () {
        return view('template.blog-details-gallery');
    });

    Route::get('/services', function () {
        return view('template.services');
    });

    Route::get('/service-details', function () {
        return view('template.service-details');
    });
    Route::get('/service-details-left-sidebar', function () {
        return view('template.service-details-left-sidebar');
    });

    Route::get('/cart', function () {
        return view('template.cart');
    });

    Route::get('/checkout', function () {
        return view('template.checkout');
    });

    Route::get('/my-account', function () {
        return view('template.my-account');
    });
    Route::get('/faq', function () {
        return view('template.faq');
    });

});
