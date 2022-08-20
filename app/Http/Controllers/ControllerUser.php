<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Test1;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PHPUnit\Util\Test;

class ControllerUser extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v =[];
    }
    public function index(Request $request)
    {
        $this->v['tieude']="Quản lý nhân viên";
        $objTest = new Test1();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $objTest->loadListWithPager($this->v['extParams']);
        return view('user.index', $this->v);           
    }
    public function addUser(UserRequest $request){
        $this->v['_title']= 'Thêm nhân viên';
        $method_route = 'route_BackEnd_Users_Add';
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
            $modelUsers = new Test1();
            $res = $modelUsers->saveNew($params);
            if($res == null){
                redirect()->route($method_route);
            }elseif($res>0){
                Session::flash('success','Thêm mới thành công');
            }else{
                Session::flash('error','Lỗi thêm mới');
                redirect()->route($method_route);
            }
        }
        return view('user.add',$this->v);
    }
    public function detail($id,Request $request){
        $this->v['_title'] = 'Chi tiết thành viên';
        $users = new Test1();
        $objItem = $users->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('user.detail',$this->v);
    }
    public function update($id, Request $request){
        $method_route = "route_BackEnd_Users_Detail";
        $params=[];
        $params['cols'] = array_map(function ($item) {
            if ($item == '') {
                $item = null;
            }
            if (is_string($item)) {
                $item = trim($item);
            }
            return $item;
        }, $request->post());
        unset($params['cols']['_token']);
        $params['cols']['id'] =$id;
        $params['cols']['password'] = Hash::make($params['cols']['password']);
        $test=new Test1();
        $res = $test->saveUpdate($params);
        if($res==null){
            return redirect()->route($method_route,['id'=>$id]);
        }elseif($res==1){
            Session::flash('success','Cập nhật bản ghi'.$id.'thành công');
            return redirect()->route($method_route,['id'=>$id]);
        }else{
            Session::flash('error','Lỗi ccập nhật bản ghi'.$id);
            return redirect()->route($method_route,['id'=>$id]);
        }
    }
}
