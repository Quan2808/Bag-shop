<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/introduce', function () {
    return view('pages.introduce');
});

Route::get('/agent-system', function () {
    return view('pages.agent-system');
});
Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

//FAQ
Route::get('/faq', function () {
    return view('pages.faq.faq');
});

Route::get('/return-policy', function () {
    return view('pages.faq.return-policy');
});

Route::get('/privacy-policy', function () {
    return view('pages.faq.privacy-policy');
});

Route::get('/term', function () {
    return view('pages.faq.term');
});

Route::get('/why-choose-us', function () {
    return view('pages.faq.why-choose-us');
});

Route::get('/order-process', function () {
    return view('pages.faq.order-process');
});


Route::get('/leading-quality-and-prestige-garment-company', function () {
    return view('pages.faq.leading-quality-and-prestige-garment-company');
});
Route::get('/manufacturing-on-demand-premium-bags-nationwide', function () {
    return view('pages.faq.manufacturing-on-demand-premium-bags-nationwide');
});
//End FAQ

//Product
Route::get('/cart', function () {
    return view('pages.product.collection.cart');
});

Route::get('/laptop-bag', function () {
    return view('pages.product.collection.laptop-bag');
});

Route::get('/crossbody-bag', function () {
    return view('pages.product.collection.crossbody-bag');
});

Route::get('/travel-bag', function () {
    return view('pages.product.collection.travel-bag');
});

Route::get('/product', function () {
    return view('pages.product.collection.product');
});
//End Product