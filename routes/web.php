<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

 
Route::get('/blank', function(){
    return view('structure');
});
Route::get('/', function(){
    return view('user-list');
})->name('userlist');

Auth::routes();

Route::get('/admin/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/get/user/data', [App\Http\Controllers\HomeController::class, 'get_user_data'])->name('get.user.data');

Route::get('/user/details',[UserController::class, 'index']); 
Route::post('user/register',[UserController::class, 'user_register'])->name('user.register');
// Route::get('get/user/data', [UserController::class, 'get_user_data'])->name('get.user.data');