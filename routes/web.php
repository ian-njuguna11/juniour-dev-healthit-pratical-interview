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

Route::resource('tasks',TaskController::class);
Route::resource('url',UrlShortenerController::class);

Route::get('delete-task/{task}', [TaskController::class, 'destroy'])->name('delete.task');
Route::get('task-reports', [TaskController::class, 'reports'])->name('tasks.reports');
Route::get('task-orderByDate', [TaskController::class, 'orderByDate'])->name('tasks.orderByDate');


Route::get('/question-three', function () {
    return view('question-three', ['tasks' => App\Models\Task::all()]);
})->name('question-three');

Route::get('/question-five', function () {
    return view('question-five');
})->name('question-five');

Route::get('urlShortener', [UrlShortenerController::class, 'short'])->name('url.shortener');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
