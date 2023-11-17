<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardsController;
use App\Http\Controllers\UserController;

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

Route::resource('boards', BoardsController::class);
Route::get('/boards/{id}/show', [BoardsController::class, 'show']);		//상세
Route::get('/boards/{id}/viewCnt', [BoardsController::class, 'viewCnt']);	//상세 - 조횟수 증가

//Route::get('/board/{id}/edit', [BoardsController::class, 'edit']);		//수정
//Route::put('/board/{id}/update', [BoardsController::class, 'update']);	//수정 저장

Route::get('/users', [UserController::class, 'index']);
