<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SidojaController;
use App\Http\Controllers\TestDarahController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AmdarController;
use App\Models\StokDarah; 
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\BMIController;




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

Route::get('Sidoja', function () {
    return view('Sidoja');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('dataSidoja',[SidojaController::class,'dataSidoja'])->name("dataSidoja");
Route::get('formSidoja',[SidojaController::class,'formSidoja'])->name("formSidoja");
Route::post('simpanSidoja',[SidojaController::class,'simpanSidoja'])->name("simpanSidoja");
Route::get('editData/{id}',[SidojaController::class,'editData'])->name("editData");
Route::post('updateData/{id}',[SidojaController::class,'updateData'])->name("updateData");
Route::delete('hapusData/{id}',[SidojaController::class,'hapusData'])->name("hapusData");

Route::get('formDarah', [SidojaController::class, 'formDarah'])->name('formDarah');

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('dashboard', [SidojaController::class, 'dashboard'])->name('dashboard');

Route::get('formTestDarah', [TestDarahController::class, 'formTestDarah'])->name('formTestDarah');
Route::post('hitungTestDarah', [TestDarahController::class, 'hitungTestDarah'])->name('hitungTestDarah');



Route::get('/formAmbilDarah', [AmdarController::class, 'create'])->name('formAmbilDarah');
Route::post('/formAmbilDarah', [AmdarController::class, 'store'])->name('amdar.store');

Route::get('formStokDarah', [SidojaController::class, 'formStokDarah'])->name('formStokDarah');

Route::get('Sidoja', [SidojaController::class, 'Sidoja'])->name('Sidoja');


Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::post('/laporan', [LaporanController::class, 'getLaporan'])->name('laporan.get');


Route::get('/bmi', [BMIController::class, 'index'])->name('bmi.index');
Route::post('/bmi/calculate', [BMIController::class, 'calculate'])->name('bmi.calculate');





















