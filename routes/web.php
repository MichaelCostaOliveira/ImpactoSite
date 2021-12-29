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
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
});

//Leads
Route::group(['middleware' => ['auth', 'PermissaoLeads']], function () {
    Route::get('/leads',[\App\Http\Controllers\LeadController::class, 'listagem'])->name('leads-lista');
    Route::get('/leads-form/{id}',[\App\Http\Controllers\LeadController::class, 'formulario'])->name('leads-form');

});

//Perfil
Route::group(['middleware' => ['auth', 'PermissaoAdministrativo']], function () {
    Route::get('/perfil/listagem',[\App\Http\Controllers\PerfilController::class,'index'])->name('perfil-listagem');
    Route::get('/perfil/formulario/{id}',[\App\Http\Controllers\PerfilController::class,'form'])->name('perfil-form');
    Route::post('/perfil/formulario/{id}',[\App\Http\Controllers\PerfilController::class,'formPost'])->name('perfil-form-post');
    Route::get('/perfil/deletar/{id}', [\App\Http\Controllers\PerfilController::class,'deletar'])->name('perfil-deletar');
});
//Usuario
Route::group(['middleware' => ['auth']], function () {
    Route::get('/minha-conta',[\App\Http\Controllers\UsuarioController::class, 'minhaconta'])->name('minhaconta-form');
    Route::post('/minha-conta',[\App\Http\Controllers\UsuarioController::class, 'minhacontaPost'])->name('minhaconta-post');

    Route::group(['middleware' => 'PermissaoAdministrativo'], function () {
        Route::get('/usuario/listagem',[\App\Http\Controllers\UsuarioController::class, 'index'])
            ->name('usuario-listagem');
        Route::get('/usuario/formulario/{id}', [\App\Http\Controllers\UsuarioController::class, 'form'])
            ->name('usuario-form');
        Route::post('/usuario/formulario/{id}',[\App\Http\Controllers\UsuarioController::class, 'formPost'])
            ->name('usuario-form-post');
        Route::get('/usuario/deletar/{id}',[\App\Http\Controllers\UsuarioController::class, 'deletar'])
            ->name('usuario-deletar');
    });

});

