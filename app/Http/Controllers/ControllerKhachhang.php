<?php

namespace App\Http\Controllers;

use App\Models\Khachhang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\Util\Test;

class ControllerKhachhang extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v =[];
    }
    public function khachhang(Request $request)
    {
        $this->v['tieude']="Quản lý khách hàng";
        $objTest = new Khachhang();
        $this->v['extParams'] = $request->all();
        $this->v['list'] = $objTest->loadListWithPager($this->v['extParams']);
        return view('khachhang.index', $this->v);           
    }
    public function detail($id,Request $request){
        $this->v['_title'] = 'Chi tiết khách hàng';
        $khach_hang = new Khachhang();
        $objItem = $khach_hang->loadOne($id);
        $this->v['objItem'] = $objItem;
        return view('khachhang.detail',$this->v);
    }
    public function delete($id, Request $request)
    {
        $method_route = "route_BackEnd_Khachhang_Index";
        $this->v['tieude'] = 'Chi tiết khách hàng';
        $objKhachhang = new Khachhang();
        $objItem = $objKhachhang->dlt($id);
        if ($objItem == 1) {
            Session::flash('success', 'Xóa bảng ghi '. $id. ' thành công');;
            return redirect()->route($method_route);
        } else {
            Session::flash('error', 'Lỗi cập nhật bảng ghi');
        }
    }
}
