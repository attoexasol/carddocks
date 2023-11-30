<?php

use App\Models\Branch;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ProfileController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Home Controller
Route::get('test', [HomeController::class, 'test'])->name('test');
Route::get('/demo', [DemoController::class, 'demo'])->name('demo');

//Main Controller
Route::get('/form', [MainController::class, 'form'])->name('form');
Route::get('/meta_data', [MainController::class, 'meta_data'])->name('meta_data');

// branch Route
Route::prefix('branch')->group(function(){
    Route::get('/', [BranchController::class, 'index'])->name('branch.index');
    Route::get('/create', [BranchController::class, 'create'])->name('branch.create');
    Route::post('/store', [BranchController::class, 'store'])->name('branch.store');
    Route::get('/edit/{id}', [BranchController::class, 'edit'])->name('branch.edit');
    Route::post('/update/{id}', [BranchController::class, 'update'])->name('branch.update');
    Route::delete('/destroy/{id}', [BranchController::class, 'destroy'])->name('branch.destroy');

    Route::get('/trashlist', [BranchController::class, 'trashlist'])->name ('branch.trashlist');
    Route::get('/restore/{id}', [BranchController::class, 'restorebranch'])->name('branch.restore');
    Route::delete('/delete/{id}', [BranchController::class, 'forceDelete'])->name ('branch.forcedelete');
    Route::get('/branch-pdf', [PdfController::class, 'branch_pdf'])->name('branch.pdf');



});
