<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiaoVienController;
use App\Http\Controllers\HomeContrller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//get danh sach hoc sinh gioi thỏa mãn 3 điều kiện điểm trung bình >= 8, Ngữ văn, Toán, tiếng Anh có ít nhất một môn >=8.0 và không có môn nào dưới 6

 Route::get('/hocsinhgioi',[GiaoVienController::class,'getAllHocSinhGioi']);
 //API get chi tiết toàn bộ điểm của 1 hoc sinh
 Route::get('/hocsinh/{id}',[HomeContrller::class,'ketqua']);
