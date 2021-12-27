<?php

use App\Mail\newSendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/',[\App\Http\Controllers\SiteController::class, 'index'])
    ->name('site');

//Route::get('/gallery', [\App\Http\Controllers\GalleryController::class, 'index'])
//    ->name('galeria');

Route::post('envio-email', [App\Http\Controllers\LeadController::class, 'index'])->name('envio-email');


Auth::routes(['register' => false]);
Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
