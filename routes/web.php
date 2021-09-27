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

Route::get('/',[\App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

//Route::get('/gallery', [\App\Http\Controllers\GalleryController::class, 'index'])
//    ->name('galeria');

Route::post('envio-email', function (Request $request) {
    $user = new stdClass();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->mensagem = $request->message;
    $user->plano = $request->plano;
    $user->titulo = 'Novo Cliente';
    Mail::send(new newSendMail($user));
    return redirect()->route('home');
})->name('envio-email');
