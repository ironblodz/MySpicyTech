<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

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

//Grupo de rotas com o prefix "frontoffice", apartir daí todas as rotas aqui inseridas, levarão o prefix "frontoffice" adicionado no url, antes do nome do ficheiro
Route::prefix('frontoffice')->group(function(){

    //Rota da Blade Master
    Route::get('/', [App\Http\Controllers\PageController::class, 'index']);

    //Rota Pagina inicial Home Page
    Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('frontoffice.index');

    //Rota Pagina inicial Home Page
    Route::get('/services', [App\Http\Controllers\PageController::class, 'services'])->name('frontoffice.services');

    //Rota Pagina para permitir a visualização da vista
    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'create'])->name('create.contact');
    //Rota Página de Contacto para tratar da submissão do formulário
    Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('store.contact');
    //Rota para página do Recaptcha para tratar da submissão do formulário
    Route::post('/recaptcha-v3',[App\Http\Controllers\PageController::class, 'recaptcha'])->name('recaptcha-v3');

    //Rota Pagina inicial Home Page
    Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('frontoffice.about');

    //Rota Pagina inicial Home Page
    Route::get('/login', [App\Http\Controllers\PageController::class, 'login'])->name('frontoffice.login');


    //Rota Pagina inicial Home Page
    Route::get('/teste', [App\Http\Controllers\PageController::class, 'teste'])->name('frontoffice.teste');

    //Rota Pagina inicial Home Page
    Route::get('/faqs', [App\Http\Controllers\PageController::class, 'faqs'])->name('frontoffice.faqs');

});
