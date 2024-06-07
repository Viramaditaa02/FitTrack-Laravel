<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\JenisController;

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
});

Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

Route::get('/Jadwal', [JadwalController::class, 'index'])->name('Jadwal');
Route::get('/Jadwal/addform', [JadwalController::class, 'add'])->name('addJadwal');
Route::post('/Jadwal/addform', [JadwalController::class, 'insertdata'])->name('insertJadwal');
Route::get('/Jadwal/updateform/{id}', [JadwalController::class, 'readdata'])->name('readJadwal');
Route::post('/Jadwal/updateform/{id}', [JadwalController::class, 'updatedata'])->name('updateJadwal');
Route::get('/Jadwal/{id}', [JadwalController::class, 'deletedata'])->name('deleteJadwal');
Route::get('/pdf-Jadwal', [JadwalController::class, 'exportpdf'])->name('pdfJadwal');

Route::get('/Jenis', [JenisController::class, 'index'])->name('Jenis');
Route::get('/Jenis/addform', [JenisController::class, 'add'])->name('addJenis');
Route::post('/Jenis/addform', [JenisController::class, 'insertdata'])->name('insertJenis');
Route::get('/Jenis/updateform/{id}', [JenisController::class, 'readdata'])->name('readJenis');
Route::post('/Jenis/updateform/{id}', [JenisController::class, 'updatedata'])->name('updateJenis');
Route::get('/Jenis/{id}', [JenisController::class, 'deletedata'])->name('deleteJenis');
Route::get('/pdf-Jenis', [JenisController::class, 'exportpdf'])->name('pdfJenis');