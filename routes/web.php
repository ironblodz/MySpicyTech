<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [App\Http\Controllers\PageController::class, 'index']);

//Rota Pagina inicial Home Page
Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('frontoffice.index');

//Rota Pagina Contacto
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('frontoffice.contact');

//Rota Pagina inicial Home Page
Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('frontoffice.about');
