<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\CompanyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [CompanyController::class,'index']);
Route::prefix('/prodi')->group (function () {
    route::get('/Manajemen Informatika', [CompanyController::class,'MI']);
    route::get('/Teknik Informatika', [CompanyController::class,'TI']);
});

route::get('news/{id}', [PageController::class,'news']);

route::prefix('sarana')->groub (function() {
    route::get('/Perkantoran', [CompanyController::class,'Perkantoran']);
    route::get('/Laboratorium', [CompanyController::class,'Laboratorium']);
    route::get('/Kelas', [CompanyController::class,'Kelas']);
    route::get('/Ruang TU', [CompanyController::class,'Ruang tu']);
});
Route::prefix('prodi')->group(function(){
    Route::get('/Manajemen Informatika',[ProdiController::class, 'mi page']);
    Route::get('/Teknik Informatika',[ProdiController::class, 'ti page']);
});
route::get('about', [CompanyController::class,'about']);
route::get('comment/{nama}/comment{id?}', [CommentController::class,'comment']);
    return "User ".$nama. " komentar ke ".$id;