<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteSettingsRequest extends FormRequest
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
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

        $validate_rules = array(
            'site_email'                => 'required|email',
            'site_title'                => 'required|max:255',
            'contact_to_email'          => 'email',
            'contact_from_email'          => 'email',
        );

        if($this->popup_button_link)
            $validate_rules['popup_button_link'] = 'url';
        if($this->popup_button2_link)
            $validate_rules['popup_button2_link'] = 'url';
        if($this->popup_button3_link)
            $validate_rules['popup_button3_link'] = 'url';
        if($this->popup_button4_link)
            $validate_rules['popup_button4_link'] = 'url';


        if($this->destination_banner_url)
            $validate_rules['destination_banner_url'] = 'url';

        if($this->home_main_banner_url)
            $validate_rules['home_main_banner_url'] = 'url';

        if($this->home_sub_banner_url)
            $validate_rules['home_sub_banner_url'] = 'url';

        if($this->facebook)
            $validate_rules['facebook'] = 'url';

        if($this->twitter)
            $validate_rules['twitter'] = 'url';

        if($this->linkedin)
            $validate_rules['linkedin'] = 'url';

        if($this->youtube)
            $validate_rules['youtube'] = 'url';

        if($this->instagram)
            $validate_rules['instagram'] = 'url';

        if($this->googleplus)
            $validate_rules['googleplus'] = 'url';

        if($this->pinterest)
            $validate_rules['pinterest'] = 'url';

        return $validate_rules;
    }
}
