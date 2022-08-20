<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Dichvu;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\Util\Test;

class ControllerDichvu extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v =[];
    }
    public function dichvu(Request $request)
    {
        $this->v['tieude']="Quản lý dịch vụ";
        $objTest = new Dichvu();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $objTest->loadListWithPager($this->v['extParams']);
        return view('dichvu.index', $this->v);           
    }
    public function addDichvu(Request $request){
        $this->v['_title']= 'Thêm dịch vụ';
        $method_route = 'route_BackEnd_Dichvu_Add';
        if($request->isMethod('post')){
            $params=[];
            $params['cols'] = array_map(function($item){
                if($item == '')
                    $item=null;
                if(is_string($item))
                    $item = trim($item);
                    return $item;
            },
            $request->post());
            unset($params['cols']['_token']);
            $modelPhong = new Dichvu();
            $res = $modelPhong->saveNew($params);
            if($res == null){
                redirect()->route($method_route);
            }elseif($res>0){
                Session::flash('success','Thêm mới thành công');
            }else{
                Session::flash('error','Lỗi thêm mới');
                redirect()->route($method_route);
            }
        }
        return view('dichvu.add',$this->v);
    }
    public function delete($id, Request $request)
    {
        $method_route = "route_BackEnd_Dichvu_Index";
        $this->v['tieude'] = 'Chi tiết phòng';
        $objDichvu = new Dichvu();
        $objItem = $objDichvu->dlt($id);
        if ($objItem == 1) {
            Session::flash('success', 'Xóa bảng ghi '. $id. ' thành công');;
            return redirect()->route($method_route);
        } else {
            Session::flash('error', 'Lỗi cập nhật bảng ghi');
        }
    }
}
