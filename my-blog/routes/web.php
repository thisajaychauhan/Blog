<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{blogPost}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/{blogPost}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{blogPost}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/{blogPost}', [BlogController::class, 'destroy'])->name('blog.destroy');
