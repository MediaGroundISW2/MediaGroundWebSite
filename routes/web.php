<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('user')->name('user.')->group(function()
{
    Route::middleware(['guest','PreventBackHistory'])->group(function () 
    {
        Route::view('/login', 'dashboard.user.login')->name('login');
        Route::view('/register', 'dashboard.user.register')->name('register');
        Route::post('/create', [UserController::class,'create'])->name('create');
        Route::post('/check', [UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth','PreventBackHistory'])->group(function () 
    {
        Route::view('/home', 'dashboard.user.home')->name('home');

        Route::view('/recarga', 'dashboard.user.recarga')->name('recarga');

        Route::post('/logout', [UserController::class,'logout'])->name('logout');
    });
});

Route::prefix('admin')->name('admin.')->group(function()
{
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function () 
    {
        Route::view('/login', 'dashboard.admin.login')->name('login');
        //Route::view('/register', 'dashboard.user.register')->name('register');
        //Route::post('/create', [UserController::class,'create'])->name('create');
        
        Route::post('/check', [AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function () 
    {
        Route::view('/home', 'dashboard.admin.home')->name('home');
        Route::view('/', 'dashboard.admin.home');
        //Route::get('/edit', [AdminController::class,'edit']);
        Route::get('{id}/add-admin', [AdminController::class,'edit'])->name('edit');
        //Route::post('/edit', [AdminController::class,'edit'])->name('edit');
        // Route::view('/edit', 'dashboard.admin.edit')->name('edit');
        Route::post('/create', [AdminController::class,'create'])->name('create');
        
        Route::post('/logout', [AdminController::class,'logout'])->name('logout');
        
        //Route::view('/invitacion', 'dashboard.emails.invitacion')->name('invitacion');
    });
});

