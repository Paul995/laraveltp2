<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\VillesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SharedDocumentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SetLocaleController;
use App\Http\Controllers\ForumPostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/users', [UsersController::class, 'index'])->name('users.index');

//READ
Route::get('/user/{user}', [UsersController::class, 'show'])->name('users.show');


//UPDATE
Route::get('/edit/user/{user}', [UsersController::class, 'edit'])->name('user.edit'); 
Route::put('/edit/user/{user}', [UsersController::class, 'update'])->name('user.update');
 //meme route/page  mais avec post


//CREATE
//inverse pour que ce soit pas confondu avec id (donc show)
Route::get('/create/user', [UsersController::class, 'create'])->name('user.create');
Route::post('/create/user', [UsersController::class, 'store'])->name('user.store'); //meme route/page  mais avec post


//DELETE
Route::delete('/user/{user}', [UsersController::class, 'destroy'])->name('user.delete'); 


// AUTH
Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');

// lang
Route::get('/lang/{locale}', [SetLocaleController::class, 'index'])->name('lang');

Route::middleware(['auth'])->group(function () {
    //forum
    Route::get('/forum', [ForumPostController::class, 'index'])->name('forum.index');
    //Route::get('/forum/create', [ForumPostController::class, 'create'])->name('forum.create');
    Route::post('/forum', [ForumPostController::class, 'store'])->name('forum.store');
    Route::get('/forum/{post}/edit', [ForumPostController::class, 'edit'])->name('forum.edit');
    Route::put('/forum/{post}', [ForumPostController::class, 'update'])->name('forum.update');
    Route::delete('/forum/{post}', [ForumPostController::class, 'destroy'])->name('forum.destroy');

    //documents
    Route::get('/document', [SharedDocumentController::class, 'index'])->name('documents.index');
    Route::get('/document/create', [SharedDocumentController::class, 'create'])->name('documents.create');
    Route::post('/document', [SharedDocumentController::class, 'store'])->name('documents.store');
    Route::delete('/document/{document}', [SharedDocumentController::class, 'destroy'])->name('documents.destroy');
    Route::get('/document/{post}/edit', [SharedDocumentController::class, 'edit'])->name('documents.edit');
    Route::put('/document/{post}', [SharedDocumentController::class, 'update'])->name('documents.update');


});