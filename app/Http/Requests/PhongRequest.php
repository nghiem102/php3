<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhongRequest extends FormRequest
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
                            'ten_phong'=>"required|unique:users",
                            'gia_phong'=>'required',
                            'hinh_anh_phong'=>'required',
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
            'ten_phong.required'=>'Bắt buộc phải nhập tên phòng',
            'ten_phong.unique'=>'Tên phòng đã tồn tại',
            'gia_phong.required'=>'Chưa nhập giá phòng',
            'hinh_anh_phong.required'=>'Chưa nhập hình ảnh'
        ];
    }
}
