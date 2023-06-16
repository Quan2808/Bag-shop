<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'isndex']);
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

//Product
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/laptop-bag', [HomeController::class, 'laptopBag']);
Route::get('/crossbody-bag', [HomeController::class, 'crossbodyBag']);
Route::get('/travel-bag', [HomeController::class, 'travelBag']);
Route::get('/product', [HomeController::class, 'product']);
//End Product