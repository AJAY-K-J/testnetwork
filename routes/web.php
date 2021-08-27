<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPagesController;
use App\Http\Controllers\AdminPagesController;


use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\preventBackHistory;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[UserPagesController::class,'index']);
Route::get('/about',[UserPagesController::class,'about']);
Route::get('/courses',[UserPagesController::class,'course']);
Route::get('/gallery',[UserPagesController::class,'gallery']);
Route::get('/placements',[UserPagesController::class,'placements']);
Route::get('/contact',[UserPagesController::class,'contact']);
Route::get('/verifyCertificate',[UserPagesController::class,'verifyCertificate']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth','preventBackHistory']],function(){

Route::get('dashboard',[AdminPagesController::class,'dashboard'])->name('admin.dashboard');

});


Route::group(['prefix'=>'user','middleware'=>['isUser','auth','preventBackHistory']],function(){

    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');

    });
