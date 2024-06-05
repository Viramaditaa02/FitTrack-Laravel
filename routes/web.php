<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\Controller;

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
//Route::get('/pdf-Jadwal', [JadwalController::class, 'exportpdf'])->name('pdfJadwal');
