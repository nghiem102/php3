<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules=[];
        $currentAction = $this->route()->getActionMethod();
        switch($this->method()):
            case 'POST':
                switch($currentAction){
                    case 'add':
                        $rules =[
                            'email'=>"required|unique:users",
                            'ten_nhan_vien'=>'required',
                            'password'=>'required',
                        ];
                    break;
                    default:
                        break;
                }
                break;
            default:
                break;
            endswitch;
                return $rules;  
    }
    public function messages()
    {
        return [
            'email.required'=>'Bắt buộc phải nhập email',
            'email.unique'=>'Email đã tồn tại',
            'ten_nhan_vien.required'=>'Chưa nhập tên',
            'password.required'=>'Chưa nhập mật khẩu'
        ];
    }
}
