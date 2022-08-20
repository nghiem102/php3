<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Dichvu;
use App\Models\Khachhang;
use App\Models\Phong;
use App\Models\Test1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v =[];
    }
    public function aboutClient(Request $request){
        $this->v['tieude']="GIỚI THIỆU VỀ MARVELLA HOTELS";
        $objPhong = new Phong();
        $this->v['extParams'] = $request->all();
        $this->v['listPhong'] = $objPhong->loadList($this->v['extParams']);
        $objUser = new Test1();
        $this->v['extParams'] = $request->all();
        $this->v['listUsers'] = $objUser->loadList($this->v['extParams']);
        return view('client.about', $this->v);    
    }
    public function addKhachhang(Request $request){
        $this->v['tieude']="GIỚI THIỆU VỀ MARVELLA HOTELS";
        $objUser = new Test1();
        $this->v['extParams'] = $request->all();
        $this->v['listUsers'] = $objUser->loadList($this->v['extParams']);        
        $objPhong = new Phong();
        $this->v['extParams'] = $request->all();
        $this->v['listPhong'] = $objPhong->loadList($this->v['extParams']);        
        $objDichvu = new Dichvu();
        $this->v['extParams'] = $request->all();
        $this->v['listDichvu'] = $objDichvu->loadList($this->v['extParams']);        
        $method_route = 'route_FrontEnd_Client_Elements';
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
            $modelKhachhang = new Khachhang();
            $res = $modelKhachhang->saveNew($params);
            if($res == null){
                redirect()->route($method_route);
            }elseif($res>0){
                Session::flash('success','Đặt lịch thành công.');
            }else{
                Session::flash('error','Lỗ! Xin hãy điền lại.');
                redirect()->route($method_route);
            }
        }
        return view('client.elements',$this->v);
    }
    public function indexClient(Request $request)
    {
        $this->v['tieude']="MARVELLA HOTELS";
        $objPhong = new Phong();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $objPhong->loadList($this->v['extParams']);
        return view('client.index', $this->v);           
    }
    public function contactClient(Request $request)
    {
        $this->v['tieude']="MARVELLA HOTELS";
        return view('client.contact', $this->v);           
    }
}
