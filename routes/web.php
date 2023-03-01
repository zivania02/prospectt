<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\AddprospectController;
use App\Http\Controllers\SalesController;

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

// utama
Route::get('/', function(){
    return redirect()->route('login');
});


Route::get('/welcome', function () {
    return view('welcome');
});
// prospect
Route::get('/prospect', [AddprospectController::class, 'index'])->name('prospect')->middleware('auth');
// profile
Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [ProfileController::class, 'update'])->name('update');
Route::put('/updateimg/{id}', [ProfileController::class, '
updateImg'])->name('update.img');

// Route::get('/prospect', [AddprospectController::class, 'index'])->name('prospect')->middleware('auth');
// // add prospect
// Route::get('/tambahprospect', [AddprospectController::class, 'tambahprospect'])->name('tambahprospect');
// Route::post('/insertpros', [AddprospectController::class, 'insertpros'])->name('insertpros');
// // edit prospect
// Route::get('/tampilpros/{id}', [AddprospectController::class, 'tampilpros'])->name('tampilpros');
// Route::post('/updatepros/{id}', [AddprospectController::class, 'updatepros'])->name('updatepros');
// // delete rospectp
// Route::get('/delete/{id}', [AddprospectController::class, 'delete'])->name('delete');
// login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
// register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// presensi
Route::get('history', [PresensiController::class, 'history'])->name('history')->middleware('auth');
Route::get('masuk', [PresensiController::class, 'index'])->name('masuk');
Route::post('simpan-masuk', [PresensiController::class, 'store'])->name('simpan-masuk');
Route::get('ubah-presensi', [PresensiController::class, 'presensipulang'])->name('ubah-presensi');
Route::get('filter-data', [PresensiController::class, 'history'])->name('filter-data');
Route::get('filter-data/{tglawal}/{tglakhir}', [PresensiController::class, 'tampildatakeseluruhan'])->name('filter-data-keseluruhan');
// export pdf
Route::get('pdf', [PresensiController::class, 'pdf'])->name('pdf');
Route::get('expdf', [AddprospectController::class, 'expdf'])->name('expdf');

// middleware
Route::group(['middleware' => ['auth', 'hakakses:admin']], function () {
    // add prospect
    Route::get('/tambahprospect', [AddprospectController::class, 'tambahprospect'])->name('tambahprospect');
    Route::post('/insertpros', [AddprospectController::class, 'insertpros'])->name('insertpros');
    // edit prospect
    Route::get('/tampilpros/{id}', [AddprospectController::class, 'tampilpros'])->name('tampilpros');
    Route::post('/updatepros/{id}', [AddprospectController::class, 'updatepros'])->name('updatepros');
    // delete rospectp
    Route::get('/delete/{id}', [AddprospectController::class, 'delete'])->name('delete');
});


//menu
Route::get('/menu', [ProfileController::class, 'menu'])->name('menu');
// Route::get('/settings', [ProfileController::class, 'settings'])->name('settings');

// sales
Route::get('/sales', [SalesController::class, 'sales'])->name('sales');
Route::get('/tambahsales', [SalesController::class, 'tambahsales'])->name('tambahsales');
Route::post('/insertdata', [SalesController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilsales/{id}', [SalesController::class, 'tampilsales'])->name('tampilsales');
Route::get('/deletesales/{id}', [SalesController::class, 'delete'])->name('deletesales');
Route::get('/detail/{id}', [SalesController::class, 'detail'])->name('detail');
Route::delete('/deleteuser/{id}', [ProfileController::class, 'hapusdata'])->name('deleteuser');




// settings page
Route::get('/tambahset', [ProfileController::class, 'settings'])->name('settings');
Route::post('/insertset', [ProfileController::class, 'insertset'])->name('insertset');
Route::get('/tampilset/{id}', [ProfileController::class, 'tampilset'])->name('tampilset');
Route::put('/updatedata/{id}', [ProfileController::class, 'updatedata'])->name('updatedata');
// Route::delete('/hapusdata/{id}', [ProfileController::class, 'hapusdata'])->name('hapusdata');

// Route::get('/tampilpros/{id}', [AddprospectController::class, 'tampilpros'])->name('tampilpros');
// Route::post('/updatepros/{id}', [AddprospectController::class, 'updatepros'])->name('updatepros');
// Route::get('/delete/{id}', [AddprospectController::class, 'delete'])->name('delete');

// role
Route::get('/role', [ProfileController::class, 'roles'])->name('roles');
Route::get('/tambahrole', [ProfileController::class, 'roles'])->name('roles');
Route::post('/insertrole', [ProfileController::class, 'insertrole'])->name('insertrole');
