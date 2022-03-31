<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return redirect('home');
});

Route::get('input', [ PostController::class, 'create' ])->name('store');
Route::post('home', [ PostController::class, 'store' ])->name('post.store');
Route::get('home', [ PostController::class, 'index' ])->name('home');

Route::get('home/{post:id}/detail', [ PostController::class, 'show' ])->name('detail');

Route::get('input/{post:id}', [ PostController::class, 'edit' ])->name('edit');
Route::post('input/{post:id}/update', [ PostController::class, 'update' ])->name('post.edit');

Route::delete('home/{post:id}/delete', [ PostController::class, 'destroy' ])->name('delete');
