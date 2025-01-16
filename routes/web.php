<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OpenTripController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SuperProductController;
use App\Http\Controllers\UsageController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserDashboardController::class, 'index'])->name('home');

Route::get('/produk/{slug}', [UserProductController::class, 'productsByCategory'])->name('products.byCategory');
Route::get('/produk/detail/{slug}', [UserProductController::class, 'show'])->name('products.show');

Route::get('/open-trip/{id}', [UserDashboardController::class, 'getArticle'])->name('openTrip.detail');


Route::get('/privacy-policy', function () {
    return view('pages.user.rules.term-and-condition');
})->name('policy');

Route::get('/cara-pemesanan', function () {
    return view('pages.user.rules.how-to-order');
})->name('pemesanan');

Route::get('/tentang-kami', function () {
    return view('pages.user.company.company-profile');
})->name('company');

Route::get('/lokasi', function () {
    return view('pages.user.company.location');
})->name('lokasi');

Route::get('unauthorized', function () {
    return view('pages.user.error.error-403', ['type_menu' => 'unauthorized']);
})->name('unauthorized');


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dashboard', function(){
        return view('pages.admin.dashboard', ['type_menu' => 'dashboard']);
    })->name('dashboard');
    Route::resource('product', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('usage', UsageController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('trips', OpenTripController::class);
    Route::resource('promos', PromoController::class);
    Route::resource('super-products', SuperProductController::class);
    Route::post('/super-product/toggle/{id}', [SuperProductController::class, 'toggleSuperProduct'])->name('super-product.toggle');
});
