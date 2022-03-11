<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\masterController;
use App\Http\Controllers\accueilController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');})->middleware(['auth'])->name('dashboard');
Route::get('/accueil', [accueilController::class, 'accueil']); 
Route::get('/contact', [ContactController::class, 'index']); 
Route::get('/master', [masterController::class, 'showpage']); 
 Route::get('/register/create', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/article', [ArticleController::class, 'index']);
Route::get('/bar', [TestController::class, 'bar']);    

require __DIR__.'/auth.php';
