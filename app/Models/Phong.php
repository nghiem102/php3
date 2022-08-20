<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Phong extends Model
{
    use HasFactory;
    protected $table = 'phong';
    protected $fillable = ['id','ten_phong','gia_phong','hinh_anh_phong','mo_ta','ma_loai_phong','ma_dich_vu','trang_thai'];

    public function loadList($params=[]){
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->get();
        return $lists;
    }
    public function loadOne($id,$params=null){
        $query = DB::table($this->table)
            ->where('id','=',$id);
        $obj = $query->first();
        return $obj;
    }
    public function loadListWithPager($params=[]){
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->paginate(10);
        return $lists;
    }
    public function dlt($id, $params=null){
        $res = DB::table($this->table)->where('id', $id)->update(['trang_thai'=>0]);
        return $res;
    }
    public function saveNew($params){
        $data = array_merge($params['cols'],[
            // 'password'=>Hash::make($params['cols']['password'])
        ]);
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }
}
