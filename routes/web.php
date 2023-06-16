<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/introduce', [HomeController::class, 'introduce']);
Route::get('/agent-system', [HomeController::class, 'agentSystem']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/return-policy', [HomeController::class, 'returnPolicy']);
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);
Route::get('/term', [HomeController::class, 'term']);
Route::get('/why-choose-us', [HomeController::class, 'whyChooseUs']);
Route::get('/order-process', [HomeController::class, 'orderProcess']);
Route::get('/leading-quality-and-prestige-garment-company', [HomeController::class, 'leadingQualityAndPrestigeGarmentCompany']);
Route::get('/manufacturing-on-demand-premium-bags-nationwide', [HomeController::class, 'manufacturingOnDemandPremiumBagsNationwide']);
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