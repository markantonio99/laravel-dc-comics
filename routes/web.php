<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home');

// Route::get('/index', function() {
//     return view('videos.index');
//  })->name('index');

route::get('/videos',[VideoController::class, 'index'])->name('video.index');
Route::get('/videos/create', [VideoController::class,'create'])->name('video.create');
Route::get('/videos/{video}', [VideoController::class,'show'])->name('video.show');
Route::post('/videos', [VideoController::class, 'store'])->name('video.store');
