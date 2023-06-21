<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lops extends Model
{
    public function getAllLop(){
        $lops = DB::table('lophocs')
            ->select()
            ->get();
        return $lops;
    }

}
