<?php

use App\Models\Articles;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\masterController;
use App\Http\Controllers\accueilController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreerCommandeController;
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

Route::get('/liste des articles', function () {
    return Articles::paginate(5);
});
Route::get('/liste des commandes', function () {
    return view('commande');
});
Route::get('/dashboard', function () {
    return view('dashboard');})->middleware(['auth'])->name('dashboard');
Route::get('/', [accueilController::class, 'accueil'])->name('accueil'); 
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact/create', [ContactController::class, 'store'])->name('contact.store');
Route::get('/master', [masterController::class, 'showpage']); 
 Route::get('/register/create', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/bar', [TestController::class, 'bar']);  
Route::get('/liste-commandes', [CreerCommandeController::class, 'create'])->name('commande');
Route::get('/creercommande', [CreerCommandeController::class, 'index'])->name('commande'); 
Route::post('/creercommande', [CreerCommandeController::class, 'store'])->name('commande.store'); 

require __DIR__.'/auth.php';
