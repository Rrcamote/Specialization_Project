<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\AdminController;


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
});


Route::get('/home', [HomeController::class,'index']);
Route::get('/admin', [AdminController::class,'index']);
Route::post('/admin/create', [AdminController::class,'store']);
Auth::routes();
Route::get('/index',[HomeController::class,'index'])->name('index');
Route::get('/user',[UserController::class, 'index']);
Route::get('/user/create/{massage}',[UserController::class, 'create']);
Route::get('/user/myschedules',[SchedulesController::class,'userSchedules']);
Route::post('/book/{msgg}',[SchedulesController::class, 'store']);
Route::get('/admin/schedules', [SchedulesController::class, 'index']);
Route::post('/admin/confirm/{schedule}', [SchedulesController::class, 'update']);
Route::get('/admin/edit/{massage}', [AdminController::class, 'edit']);