<?php

use App\Http\Controllers\AccountingController;
use App\Http\Controllers\HutangDagangController;
use App\Http\Controllers\KasBankController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PajakController;
use App\Http\Controllers\PiutangController;
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

Route::controller(PajakController::class)->group(function () {
    Route::get('FakturPenjualan', 'fakturpenjualan')->name('fakturpenjualan');
    Route::get('FakturPembelian', 'fakturpembelian')->name('fakturpembelian');
    Route::get('Diskon', 'diskon')->name('diskon');
    Route::get('LabaRugi', 'labarugi')->name('labarugi');
});

Route::controller(AccountingController::class)->group(function () {
    Route::get('coa', 'coa')->name('coa');
    Route::get('bukubesar', 'bukubesar')->name('bukubesar');
    Route::get('penyesuaian', 'penyesuaian')->name('penyesuaian');
    Route::get('neraca', 'neraca')->name('neraca');
    Route::get('laporanlabarugi', 'laporanlabarugi')->name('laporanlabarugi');
    Route::get('laporanhutang', 'laporanhutang')->name('laporanhutang');
    Route::get('laporanpiutang', 'laporanpiutang')->name('laporanpiutang');
});

Route::controller(KasBankController::class)->group(function () {
    Route::get('kasmasuk', 'kasmasuk')->name('kasmasuk');
    Route::get('laporankasmasuk', 'laporankasmasuk')->name('laporankasmasuk');
    Route::get('bankmasuk', 'bankmasuk')->name('bankmasuk');
    Route::get('laporanbankmasuk', 'laporanbankmasuk')->name('laporanbankmasuk');
    Route::get('kaskeluar', 'kaskeluar')->name('kaskeluar');
    Route::get('laporankaskeluar', 'laporankaskeluar')->name('laporankaskeluar');
    Route::get('bankkeluar', 'bankkeluar')->name('bankkeluar');
    Route::get('laporancashflow', 'laporancashflow')->name('laporancashflow');
    Route::get('laporanbbs', 'laporanbbs')->name('laporanbbs');
    Route::get('bukubankrk', 'bukubankrk')->name('bukubankrk');
});

Route::controller(PiutangController::class)->group(function () {
    Route::get('piutangpenjualan', 'piutangpenjualan')->name('piutangpenjualan');
    Route::get('laporanpiutangpenjualan', 'laporanpiutangpenjualan')->name('laporanpiutangpenjualan');
    Route::get('adjpiutang', 'adjpiutang')->name('adjpiutang');
});

Route::controller(HutangDagangController::class)->group(function () {
    Route::get('hutangpenjualan', 'hutangpenjualan')->name('hutangpenjualan');
    Route::get('laporanhutangpenjualan', 'laporanhutangpenjualan')->name('laporanhutangpenjualan');
    Route::get('adjhutang', 'adjhutang')->name('adjhutang');
});