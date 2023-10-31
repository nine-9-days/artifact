<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\PestcontrolController;
use App\Http\Controllers\CounterplanController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/plant', [PlantController::class, 'plant'])->middleware('auth');
Route::get('/', [PostController::class, 'index'])->name('index')->middleware('auth');
Route::get('/disease/{plant}', [PlantController::class, 'disease'])->middleware('auth');
Route::get('/diagnosis/{plant}', [PlantController::class, 'diagnosis'])->middleware('auth');
Route::get('/pestcontrol/{plant}', [PestcontrolController::class, 'pestcontrol'])->middleware('auth');
Route::get('/counterplan/{plant}/{disease}', [DiseaseController::class, 'counterplan'])->middleware('auth');


require __DIR__.'/auth.php';
