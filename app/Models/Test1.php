<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Test1 extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['id','ten_nhan_vien','hinh_anh_nv','ngay_sinh','sdt','email','dia_chi','chuc_vu','phan_quyen','scmt'];

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
    public function saveNew($params){
        $data = array_merge($params['cols'],[
            'password'=>Hash::make($params['cols']['password'])
        ]);
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }
    public function saveUpdate($params){
        if(empty($params['cols']['id'])){
            Session::flash('error','Không xác định bản ghi cập nhật');
            return null;
        }
        $dataUpdate = [];
            foreach($params['cols'] as $colName=>$val){
                if($colName == 'id') continue;
                if(in_array($colName,$this->fillable)){
                    $dataUpdate[$colName] = (strlen($val)==0) ? null:$val;
                }
            }
        $res = DB::table($this->table)
            ->where('id',$params['cols']['id'])
            ->update($dataUpdate);
        return $res;
    }
}
