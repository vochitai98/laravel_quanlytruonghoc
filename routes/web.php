<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContrller;
use App\Http\Controllers\GiaoVienController;


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
//Trang chu
Route::get('/',[HomeContrller::class,'home'])->name('home');
Route::prefix('hocsinhs')->group(function(){
    //get all hocsinh
    Route::get('/',[HomeContrller::class,'index'])->name('hocsinhs.home');
    //get view add
    Route::get('/add',[HomeContrller::class,'addHocSinh'])->name('hocsinhs.add');
    //post add
    Route::post('/add',[HomeContrller::class,'postAddHocSinh'])->name('hocsinhs.addpost');
    //get update
    Route::get('/update/{id}',[HomeContrller::class,'updateHocSinh'])->name('hocsinhs.update');
    //post update
    Route::post('/update',[HomeContrller::class,'postUpdateHocSinh'])->name('hocsinhs.updatepost');
    //get delete
    Route::get('/delete/{id}',[HomeContrller::class,'deleteHocSinh'])->name('hocsinhs.delete');
    //Search
    Route::get('/search',[HomeContrller::class,'searchHocSinh'])->name('hocsinhs.search');
    Route::get('/ketqua/{id}',[HomeContrller::class,'ketquaHocSinh'])->name('hocsinhs.ketqua');
});
Route::prefix('giaoviens')->group(function(){
    //get all hocsinh
    Route::get('/',[GiaoVienController::class,'index'])->name('giaoviens.home');
    // //get view add
    // Route::get('/add',[HomeContrller::class,'addHocSinh'])->name('giaoviens.add');
    // //post add
    // Route::post('/add',[HomeContrller::class,'postAddHocSinh'])->name('hocsinhs.addpost');
    // //get update
    // Route::get('/update/{id}',[HomeContrller::class,'updateHocSinh'])->name('hocsinhs.update');
    // //post update
    // Route::post('/update',[HomeContrller::class,'postUpdateHocSinh'])->name('hocsinhs.updatepost');
    // //get delete
    // Route::get('/delete/{id}',[HomeContrller::class,'deleteHocSinh'])->name('hocsinhs.delete');
    // //Search
    // Route::get('/search',[HomeContrller::class,'searchHocSinh'])->name('hocsinhs.search');
    // Route::get('/ketqua/{id}',[HomeContrller::class,'ketquaHocSinh'])->name('hocsinhs.ketqua');
    Route::get('/listhocsinh/{id}',[GiaoVienController::class,'getAllHocSinhByIdGiaoVien'])->name('giaoviens.listhocsinh');
    //get update diem hoc sinh
    Route::get('/update',[GiaoVienController::class,'updateDiem'])->name('giaoviens.update');
    //post update diem hoc sinh
    Route::post('/updatepost',[GiaoVienController::class,'postUpdateDiem'])->name('giaoviens.updatepost');
});
