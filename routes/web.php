<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\pdf\GerarPdfController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categoria/index/', [CategoriaController::class, 'index'])->name('categoria-index');
Route::get('/pdf/gerar/', [GerarPdfController::class, '__invoke'])->name('pdf');
Route::get('/excel/gerar', [CategoriaController::class, 'export'])->name('excel');

Route::get('/website/categoria/index', [CategoriaController::class, 'index'])->name('categoria-index');
Route::get('/website/categoria/create', [CategoriaController::class, 'create'])->name('categoria-create');
Route::post('/website/categoria/store', [CategoriaController::class, 'store'])->name('categoria-store');
Route::delete('/website/categoria/destroy/{id}', [CategoriaController::class, 'destroy'])->name('categoria-destroy');
Route::get('/website/categoria/edit/{id}', [CategoriaController::class, 'edit'])->name('categoria-edit');
Route::put('/website/categoria/update/{id}', [CategoriaController::class, 'update'])->name('categoria-update');
