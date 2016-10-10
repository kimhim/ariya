<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Province;

class TestRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        $req_province = Province::find($this->route('admin.localization.save'));
//        return $req_province && $this->user()->can('update', $req_province);
	return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
		return [
				'province_name_kh' => 'required',
        		'province_name_en' => 'required'
        ];
    }
}
