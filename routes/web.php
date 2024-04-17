<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UrlShortenerController;
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

Route::get('/', [TaskController::class, 'index'] )->name('dashboard');


// url shortner - question-five
Route::resource('url',UrlShortenerController::class);
Route::get('urlShortener', [UrlShortenerController::class, 'short'])->name('url.shortener');
Route::get('urlShortenerView/{urlShortener}', [UrlShortenerController::class,'urlShortenerView'])->name('url.urlShortenerView');
Route::get('/question-five', function () {return view('question-five');})->name('question-five');

//  task contoller -- question three
Route::get('task-orderByDate', [TaskController::class, 'orderByDate'])->name('tasks.orderByDate');
Route::get('/question-three', [TaskController::class, 'questionThree'])->name('question-three');

// task contoller -- question one
Route::resource('tasks',TaskController::class);
Route::get('delete-task/{task}', [TaskController::class, 'destroy'])->name('delete.task');
Route::get('task-reports', [TaskController::class, 'reports'])->name('tasks.reports');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
