<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->name('/');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
});

Route::resource('/menu', MenuController::class);
Route::controller(MenuController::class)->group(function(){
    Route::post('get_ajax_list', 'get_ajax_list')->name('get_ajax_list');
});