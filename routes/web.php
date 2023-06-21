<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContrller;

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

//Route::get('/{{$id}}',[HomeContrller::class,'hocsinhdetail'])->name('hocsinhdetail');
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
});
