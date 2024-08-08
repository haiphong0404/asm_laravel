<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TinController;
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
})->name('welcome');;
Route::get('/tin/{id}', [TinController::class, 'chitiet']);
Route::get('/cat', [TinController::class, 'tintrongloai'])->name('cat');
Route::get('login', [App\Http\Controllers\AuthenController::class, 'showFormLogin'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthenController::class, 'handleLogin']);
Route::get('register', [App\Http\Controllers\AuthenController::class, 'showFormRegister'])->name('register');
Route::post('register', [\App\Http\Controllers\AuthenController::class, 'handleRegister']);
Route::post('logout', [\App\Http\Controllers\AuthenController::class, 'logout'])->name('logout');
Route::get('member', [\App\Http\Controllers\MemberController::class, 'dashboard'])->name('member.dashboard')->middleware(['auth', \App\Http\Middleware\IsMember::class]);
Route::get('admin', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware(['auth', \App\Http\Middleware\IsAdmin::class]);
Route::get('/tins/search', [AdminController::class, 'search'])->name('tins.search');
Route::get('/ltins', [AdminController::class, 'index'])->name('ltins.index');
$cruds = [
    'tins' => AdminController::class,
    'ltins' => \App\Http\Controllers\LoaiTinController::class,
];

foreach ($cruds as $obj => $controller) {
    Route::resource($obj, $controller);
}

