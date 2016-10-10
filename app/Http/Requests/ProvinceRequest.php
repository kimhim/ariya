<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProvinceRequest extends Request
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
     * @return array
     */
    public function rules()
    {
    	return [
    			'pro_name_kh' => 'required',
    			'pro_name_en' => 'required'
    	];
    }

    public function messages()
    {
    	return [
    			'pro_name_kh.required' => 'Province Name in Khmer is reguired!',
    			'pro_name_en.required' => 'Province Name in English is required!',
    			//'icon_marker.required' => 'Image icon marker is required!',
    			//'lng.required' => 'Province Longtitude is required!',
    			//'lat.required' => 'Province Latitude is required!'
    	];
    }
}
