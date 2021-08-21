<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\UserDetailController;

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
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



#Route::get('/user-detail/create', 'App\Http\Controllers\UserDetailController@create')->name('user-detail.create');

Route::get('/user-detail/create', [UserDetailController::class, 'create'])->middleware('auth')->name('user-detail.create');;
Route::post('/user-detail', [UserDetailController::class , 'store'])->middleware('auth');


//Route::get('eduction/create', [EducationController::class, 'create'])->middleware('auth')->name('education.create');
//Route::post('education', [EducationController::class, 'store'])->middleware('auth');

Route::resource('education', 'EducationController')->middleware('auth');


