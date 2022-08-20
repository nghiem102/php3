<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhongRequest;
use App\Models\Phong;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\Util\Test;

class ControllerPhong extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v =[];
    }
    public function phong(Request $request)
    {
        $this->v['tieude']="Quản lý phòng";
        $objTest = new Phong();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $objTest->loadListWithPager($this->v['extParams']);
        return view('phong.index', $this->v);           
    }
    public function addPhong(PhongRequest $request){
        dd(123);
        $this->v['_title']= 'Thêm phòng';
        $method_route = 'route_BackEnd_Phong_Add';
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
            $modelPhong = new Phong();
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
        return view('phong.add',$this->v);
    }
    public function detail($id,Request $request){
        $this->v['_title'] = 'Chi tiết phòng';
        $phong = new Phong();
        $objItem = $phong->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('phong.detail',$this->v);
    }
    public function delete($id, Request $request)
    {
        $method_route = "route_BackEnd_Phong_Index";
        $this->v['tieude'] = 'Chi tiết phòng';
        $objPhong = new Phong();
        $objItem = $objPhong->dlt($id);
        if ($objItem == 1) {
            Session::flash('success', 'Xóa bảng ghi '. $id. ' thành công');;
            return redirect()->route($method_route);
        } else {
            Session::flash('error', 'Lỗi cập nhật bảng ghi');
        }
    }
}
