<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HocSinhs;
use App\Models\Lops;
use App\Models\GiaoViens;

class GiaoVienController extends Controller
{
    private $lops;
    private $hocsinh;
    private $giaovien;
    public function __construct() {
        $this->lops = new Lops();
        $this->hocsinh = new HocSinhs();
        $this->giaovien = new GiaoVienS();
    }
    //get all giao vien
    public function index(){
        $giaoVienList = $this->giaovien->getAllGiaoVien();
        return view('giaoviens.index',compact('giaoVienList'));
    }
    //get allhocsinh by giao vien
    public function getAllHocSinhByIdGiaoVien(Request $request){
        $id = $request->id;
        $hocSinhList = $this->giaovien->getAllHocSinhByIDGiaoVien($id);
        return view('giaoviens.listhocsinh',compact('hocSinhList'));
    }
    //get update diem
    public function updateDiem(Request $request){
        $data = [
            $request->id_hs,
            $request->id_cb
        ];
        $ketqua = $this->giaovien->getChiTietDiem($data);
        return view('giaoviens.updatediem',compact('ketqua'));
    }
    //post update diem HS
    public function postUpdateDiem(Request $request){
        $request->validate([
            'diemmieng' => ['required', 'numeric', 'between:0,10'],
            'diem15phut' => ['required', 'numeric', 'between:0,10'],
            'diem1tiet' => ['required', 'numeric', 'between:0,10'],
            'diemhocky' => ['required', 'numeric', 'between:0,10'],
        ]);
        $id_cb = $request->id_cb;
        $data=[
            $request->diemmieng,
            $request->diem15phut,
            $request->diem1tiet,
            $request->diemhocky,
            $request->id,

        ];
        $ketqua = $this->giaovien->updateKetQua($data);
        //session()->put('id', 1);
        return redirect()->route('giaoviens.listhocsinh',['id'=>$id_cb])->with('msg', 'Cập nhật điểm thành công.');
        
    }
}
