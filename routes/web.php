<?php
 use App\Http\Controllers\TonjiruController;
use App\Http\Controllers\ProfileController;
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
Route::get('/niku',function(){
    return view('niku');
});

Route::get('tonjiru16', [TonjiruController::class, 'index'])->name('tonjiru.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/omuraisu20', function () {
    return view('welcome');
});

Route::get('/gyoza01', function () {
    return view('welcome');
});


Route::get('/karage', function(){
    return view('karage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
