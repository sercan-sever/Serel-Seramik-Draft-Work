<?php

use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\Dashboard\HomeController;
use App\Http\Controllers\Backend\Slider\SliderController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home');
})->name('home');
 */

Route::prefix('admin')->name('admin.')->group(function () {

    Route::controller(AuthController::class)->group(function () {
        Route::get('/', 'login')->name('login.page')->middleware('login.check');
        Route::post('/authenticate', 'auth')->name('auth')->middleware(['login.check', 'throttle:login']);
        Route::get('/logout', 'logout')->name('logout')->middleware('auth');
    });

    Route::group(['middleware' => 'auth'], function () {

        Route::controller(HomeController::class)->group(function () {
            Route::get('/home', 'index')->name('home');
        });

        Route::controller(SliderController::class)->group(function () {
            //GET
            Route::get('/sliders', 'index')->name('sliders');

            // POST
        });
    });
});


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect']
], function () {

    Route::get(session('locale'), function () {
        return view('pages.home');
    })->name('home');
});

// Eğer Prefix Değeri Aktif Olan Dillerin Kısa Gösterimleri İle Eşleşmiyor İse BeforeMiddleware Kısmından Buraya Yönlendirme Yapılıyor....
Route::get('{lang?}', function () {
    abort(404);
})->name('default');
