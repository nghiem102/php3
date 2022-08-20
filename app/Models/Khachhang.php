<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Khachhang extends Model
{
    use HasFactory;
    protected $table = 'khach_hang';
    protected $fillable = ['id','ten_khach_hang','tuoi','dia_chi','scmt','sdt','ngay_thue','ngay_tra','trang_thai'];

    public function loadList($params=[]){
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->get();
        return $lists;
    }
    public function loadListWithPager($params=[]){
        $query = DB::table($this->table)
            ->select($this->fillable);
        $lists = $query->paginate(10);
        return $lists;
    }
    public function loadOne($id,$params=null){
        $query = DB::table($this->table)
            ->where('id','=',$id);
        $obj = $query->first();
        return $obj;
    }
    public function saveNew($params){
        $data = array_merge($params['cols'],[
        ]);
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }
    public function dlt($id, $params=null){
        $res = DB::table($this->table)->where('id', $id)->update(['trang_thai'=>0]);
        return $res;
    }
}
