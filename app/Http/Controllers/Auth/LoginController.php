<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function getLogin(){
        return view('auth/login');
    }
    public function postLogin(Request $request){
        //thực hiện subimt dữ liệu
        // dd($request->all());
        //kiểm tra dữ liệu đầu vào
        $rules = [
            'email'=>'required|email',
            'password'=>'required'
        ];
        $messages = [
            'email.required'=>'Bạn phải nhập Email!',
            'email.email'=>'Bạn phải nhập đúng định dạng Email!',
            'password.required'=>'Bạn phải nhập Password'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect('login')->withErrors($validator)->withInput();
        }else{
            //đón dữ liệu từ trang login gửi sang
            $email = $request->input('email');
            $password = $request->input('password');
            //kiểm tra đăng nhập
            if(Auth::attempt(['email'=>$email,'password'=>$password])){
                return redirect('index');
            }else{
                Session::flash('error','Email hoặc password không đúng!');
                return redirect('login');
            }
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect('login');
    }
}
