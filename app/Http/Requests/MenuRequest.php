<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Languages;

class MenuRequest extends FormRequest
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
        $validate_rules['type']         =   'required';
        $validate_rules['title']        =   'required';
        $validate_rules['menu_type']    =   'required';
        $validate_rules['status']       =   'required';

        if( $this->type == 'Custom' )
            $validate_rules['url']   =   'required|url';

        if( $this->type == 'Page' )
            $validate_rules['page_id']   =   'required';

        return $validate_rules;

    }

    public function messages()
    {
        return [
            'menu_type.required' => 'Section field is required',
            'page_id.required' => 'Page field is required',
        ];
    }
      
}
