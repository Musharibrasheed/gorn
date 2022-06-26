<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Languages;

class TestimonialRequest extends FormRequest
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
        $validate_rules = array();
        $validate_rules['client_name']          =   'required';
        $validate_rules['client_profession']    =   'required';
        $validate_rules['client_comments']      =   'required';
        // $validate_rules['status']               =   'required';

        return $validate_rules;

    }

    public function messages()
    {
        return [
            'client_name.required'          =>  'Name field is required',
            'client_profession.required'    =>  'Profession field is required',
            'client_comments.required'      =>  'Comments field is required',
        ];
    }
      
}
