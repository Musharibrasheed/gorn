<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\duplication;
use Validator;
// use App\Models\Languages;

class UserRegistrationRequest extends FormRequest
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
        $rules = [
            'first_name'        =>  'required|max:50',
            'email'             =>  'required|email|unique:users',
        ];

        if( !$this->id ) {
            $rules['password']          =   'required';
            $rules['confirm_password']  =   'required|min:8|same:password';
            $rules['email']             =   'required|email|unique:users';
        } else {
            $rules['email']             =   'required|unique:users,email,'.$this->id;
        }

        
        return $rules;
    }

}
