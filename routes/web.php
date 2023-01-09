<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontendHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendHomeController::class, 'frontIndexupper']);

Route::middleware('auth')->prefix("admin")->group(function ($router) {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/createarticle', [HomeController::class, 'showHome'])->name('createhome');
    Route::post('/storearticle', [HomeController::class, 'storeHome'])->name('storehome');
    Route::post('/storearticle', [HomeController::class, 'storeHome'])->name('storehome');



    Route::get('/edithome/{home}', [HomeController::class, 'edithome'])->name('edithome');
    Route::get('/destroyhome/{home}', [HomeController::class, 'destroy'])->name('destroyhome');
    Route::post('/updatehome/{home}', [HomeController::class, 'updatehome'])->name('updatehome');

    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/editservice/{service}', [ServiceController::class, 'editservice'])->name('editservice');
    Route::get('/destroyservice/{service}', [ServiceController::class, 'destroy'])->name('destroyservice');
    Route::post('/updateservice/{service}', [ServiceController::class, 'updateservice'])->name('updateservice');
    Route::get('/createservice', [ServiceController::class, 'createservice'])->name('createservice');
    Route::post('/storeservice', [ServiceController::class, 'storeservice'])->name('storeservice');

    Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
    Route::get('/editpricing/{pricing}', [PricingController::class, 'editpricing'])->name('editpricing');
    Route::get('/destroypricing/{pricing}', [PricingController::class, 'destroy'])->name('destroypricing');
    Route::post('/updatepricing/{pricing}', [PricingController::class, 'updatepricing'])->name('updatepricing');
    Route::get('/createpricing', [PricingController::class, 'createpricing'])->name('createpricing');
    Route::post('/storepricing', [PricingController::class, 'storepricing'])->name('storepricing');



    Route::get('/user', [UsersController::class, 'index'])->name('user-management');
    Route::get('/edit/{user}', [UsersController::class, 'edit'])->name('edit');
    Route::post('/update/{user}', [UsersController::class, 'update'])->name('update');
    Route::get('/delete/{user}', [UsersController::class, 'destroy'])->name('destroy');

    Route::get('/footer', [FooterController::class, 'index'])->name('footer');
    // Route::get('/showfooter', [FooterController::class, 'showform'])->name('showform');
    // Route::get('/deletefooter/{footer}', [FooterController::class, 'destroyfooter'])->name('destroyfooter');
    // Route::post('/addfooter', [FooterController::class, 'addfooter'])->name('addfooter');
    Route::get('/editfooter/{footer}', [FooterController::class, 'editfooter'])->name('editfooter');
    Route::post('/updatefooter/{footer}', [FooterController::class, 'updatefooter'])->name('updatefooter');


    Route::get('/reset-password', function () {
        return view('admin.reset_password');
    })->name('reset-password');

    Route::post('/resetpassword', [ResetPassword::class, 'updatePassword'])->name('resetpassword');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
