<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Languages;

class PageRequest extends FormRequest
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
        $validate_rules                 =   array();
        $validate_rules['title']        =   'required';
        $validate_rules['short_title']  =   'required';
        $validate_rules['template']     =   'required';
        $validate_rules['status']       =   'required';

        return $validate_rules;
    }
}
