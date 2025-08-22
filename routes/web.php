<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;


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

Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');
Route::get('/resume/preview', [ResumeController::class, 'preview'])->name('resume.preview');


Route::get('/resume1/download', [ResumeController::class, 'download1'])->name('resume1.download');
Route::get('/resume1/preview', [ResumeController::class, 'preview1'])->name('resume1.preview');
