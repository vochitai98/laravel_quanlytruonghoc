<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HocSinhs;
use App\Models\Lops;

class HomeContrller extends Controller
{
    private $lops;
    private $hocsinh;
    public function __construct() {
        $this->lops = new Lops();
        $this->hocsinh = new HocSinhs();
    }
    public function index(){
        $hocSinhList = $this->hocsinh->getAllHocSinh();
        return view('hocsinhs.index',compact('hocSinhList'));
    }
    public function addHocSinh(){
        $lopList = $this->lops->getAllLop();
        return view('hocsinhs.addhocsinh',compact('lopList'));
    }
    
    public function hocsinhdetail($id){
        return view('hocsinhs.hocsinhdetail');
    }
    
    public function postAddHocSinh(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=>'required|email',
            'sdt' => 'required',
            // Các trường dữ liệu khác
        ]);
        $dataList= [
            $request->name,
            $request->email,
            $request->sdt,
            $request->id_lop
        ];
        // Lưu đối tượng HocSinhs vào cơ sở dữ liệu
        $this->hocsinh->addHocSinh($dataList);

        // Redirect hoặc thông báo thành công
        return redirect()->route('hocsinhs.home')->with('msg', 'Thêm học sinh thành công.');        
    }
    //get update
    public function updateHocSinh(Request $request){
        $id = $request->id;
        $hocsinh = $this->hocsinh->getHocSinhByID($id);       
        $lopList = $this->lops->getAllLop();
        // Redirect hoặc thông báo thành công
        return view('hocsinhs.updatehocsinh',compact('hocsinh','lopList'));      
    }
    //post update hocsinhs
    public function postUpdateHocSinh(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=>'required|email',
            'sdt' => 'required',
            // Các trường dữ liệu khác
        ]);
        $dataList= [
            $request->name,
            $request->email,
            $request->sdt,
            $request->id_lop,
            $request->id
        ];
        // Lưu đối tượng HocSinhs vào cơ sở dữ liệu
        $this->hocsinh->updateHocSinh($dataList);

        // Redirect hoặc thông báo thành công
        return redirect()->route('hocsinhs.home')->with('msg', 'Cập nhật học sinh thành công.');        
    }
    public function deleteHocSinh(Request $request){
        $id = $request->id;
        $this->hocsinh->deleteHocSinh($id);
        return redirect()->route('hocsinhs.home')->with('msg', 'Xóa học sinh thành công');
    }
    
}
