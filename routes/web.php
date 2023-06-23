<?php

use App\Http\Controllers\Admin\{AuthController, ProfileController, UserController, ProductController};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\User;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/introduce', [HomeController::class, 'introduce'])->name('introduce');
Route::get('/agent-system', [HomeController::class, 'agentSystem'])->name('agentSystem');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/return-policy', [HomeController::class, 'returnPolicy'])->name('returnPolicy');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('/term', [HomeController::class, 'term'])->name('term');
Route::get('/why-choose-us', [HomeController::class, 'whyChooseUs'])->name('whyChooseUs');
Route::get('/order-process', [HomeController::class, 'orderProcess'])->name('orderProcess');
Route::get('/leading-quality-and-prestige-garment-company', [HomeController::class, 'leadingQualityAndPrestigeGarmentCompany'])->name('leadingCompany');
Route::get('/manufacturing-on-demand-premium-bags-nationwide', [HomeController::class, 'manufacturingOnDemandPremiumBagsNationwide'])->name('manufacturingBags');
//Product
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/laptop-bag', [HomeController::class, 'laptopBag']);
Route::get('/crossbody-bag', [HomeController::class, 'crossbodyBag']);
Route::get('/travel-bag', [HomeController::class, 'travelBag']);
Route::get('/product', [HomeController::class, 'product']);
//End Product


//Auth
Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/register', [AuthController::class, 'getRegister']);
//End Auth

Route::get('/admin/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');

Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');

Route::get('/logout', [ProfileController::class, 'getlogout'])->name('getlogout');

//Product
Route::get('/admin/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/admin/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/admin/product/del{id}', [ProductController::class, 'del'])->name('product.del');

Route::get('/admin/product/add', [ProductController::class, 'add'])->name('product.add');

Route::post('/admin/product/save', [ProductController::class, 'save'])->name('product.save');
Route::post('/admin/product/save-update/{id}', [ProductController::class, 'save_update'])->name('product.save_update');

Route::get('/admin/product/active{id}', [ProductController::class, 'active'])->name('product.active');
Route::get('/admin/product/unactive{id}', [ProductController::class, 'unactive'])->name('product.unactive');

//EndProduct
