<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class GiaoViens extends Model
{
    //get all giao vien
    public function getAllGiaoVien(){
        $giaoVienList= DB::select('SELECT * FROM canbos');
        return $giaoVienList;
    }
    public function getAllHocSinhByIDGiaoVien($id){
        $hocSinhList= DB::select('SELECT kq.*,cb.name as name_canbo,hs.name, hs.id,lh.name as name_lop FROM ketquas as kq INNER JOIN hocsinhs as hs ON kq.id_hocsinh = hs.id INNER JOIN lophocs as lh ON hs.id_lop = lh.id LEFT JOIN canbos as cb ON kq.id_canbo = cb.id WHERE id_canbo = ?',[$id]);
        return $hocSinhList;
    }
    public function getChiTietDiem($data){
        $ketquas= DB::select('SELECT kq.* ,hs.name as name_hocsinh FROM ketquas as kq INNER JOIN hocsinhs as hs ON kq.id_hocsinh = hs.id WHERE id_hocsinh = ? and id_canbo = ?',$data);
        return $ketquas;
    }
    public function updateKetQua($data){
        $ketquas= DB::update('UPDATE ketquas SET diemmieng = ?,diem15phut = ?, diem1tiet = ?,diemhocky = ? WHERE id=?',$data);
        return 'ok';
    }
    public function getAllHocSinhGioi(){
        $hocSinhGioiList = DB::select('SELECT k.*,hs.name
        FROM (
        SELECT  kq.id_hocsinh,AVG(diemtrungbinh) AS diemtrungbinh
        FROM (SELECT *,(diemmieng+diem15phut+diem1tiet*2+diemhocky*3)/7 AS diemtrungbinh FROM ketquas) AS kq 
        GROUP BY id_hocsinh
        HAVING AVG(diemtrungbinh) > 8 AND MIN(diemtrungbinh) >= 6 AND MAX(diemtrungbinh) > 8    
        )AS k
        INNER JOIN hocsinhs AS hs ON k.id_hocsinh = hs.id');
        return $hocSinhGioiList;
    }
}
