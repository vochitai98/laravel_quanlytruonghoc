<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class HocSinhs extends Model
{
    public $table = 'hocsinhs';
    //use HasFactory;
    public function getAllHocSinh(){
        $hocSinhList= DB::select('SELECT * FROM hocsinhs');
        return $hocSinhList;
    }
    public function addHocSinh($data){
        $hocSinhList= DB::insert('INSERT INTO  hocsinhs (name,email,sdt,id_lop) VALUE(?,?,?,?)',$data);
        return 'ok';
    }
    //delete hocsinh
    public function deleteHocSinh($id){
        $deleted = DB::table('hocsinhs')->where('id','=',$id)->delete();
        return 'ok';
    }

    public function updateHocSinh($data){
        $affected = DB::update('UPDATE hocsinhs SET name = ?,email = ?, sdt = ?,id_lop = ? WHERE id=?',$data);
        return 'ok';
    }
    public function getHocSinhByID($id){
        $hocsinh=DB::table('hocsinhs')->where('id','=',$id)->get();
        return $hocsinh;
    }
    public function searchHocSinh($search){
        $hocsinh=DB::table('hocsinhs')->where('name','like','%'.$search.'%')->OrWhere('id','=',$search)->get();
        return $hocsinh;
    }
    public function ketquaHocSinh($id){
        $ketquas=DB::table('ketquas')->select('*',DB::raw('(diemmieng+diem15phut+diem1tiet*2+diemhocky*3)/7 AS diemtrungbinh'))->where('id_hocsinh','=',$id)->get();
        return $ketquas;
    }
}
