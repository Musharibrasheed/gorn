<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_settings')->truncate();

        DB::table('site_settings')->insert([
            'id'                            => '1',
            'site_title'                    => serialize( array('site_title' => 'Safina Bay')),
            'site_email'                    => 'info@safinabay.com',
            'site_phone'                    => '(888)123-4587',
            'address'                       => '10500 Northwest Freeway, Suite 206 Houston, Texas 77092',
            'logo'                          => '/images/logo.png',
            'footer_logo'                   => '/images/logo-w.png',
            'subscription_status'           => 'Active',
            'subscription_title'            => 'Subscribe To Our Newsletter',
            'subscription_description'      => 'Phasellus fringilla et magna non efficitur. Morbi nec aliquet odio. <br /> Etiam eget porta erat, non rutrum sapien.',
            'socialmedia_status'            => 'Active',
            'facebook'     		            => 'https://facebook.com',
            'twitter'                       => 'https://twitter.com',
            'linkedin'       	            => 'https://linkedin.com',
            'youtube'      		            => 'https://youtube.com',
            'instagram'   		            => '',
            'googleplus'                    => '',
            'pinterest'  		            => '',
            'popup_status'                  => 'Active',
            'popup_logo'  		            => 'images/logo-lg.png',
            'popup_text'  		            => 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim',
            'popup_button_status'           => 'Active',
            'popup_button_text'             => 'Map',
            'popup_button_link'             => '',
            'popup_button2_status'          => 'Active',
            'popup_button2_text'            => 'Community',
            'popup_button2_link'            => '',
            'popup_button3_status'          => 'Active',
            'popup_button3_text'            => 'Market',
            'popup_button3_link'            => '',
            'popup_button4_status'          => 'Active',
            'popup_button4_text'            => 'Registration',
            'popup_button4_link'            => route('login'),
            'contact_from_email'            => 'no-reply@safinabay.com',
            'contact_to_email'              => 'info@safinabay.com',
            'about_company'                 => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'google_analytics'              => "",
            'designed_by'  		            => '<p>Designed &amp; Developed by <a href="http://www.perfecent.com" target="_blank">Perfecent</a></p>',
            'copyright'     	            => '© '.date('Y').' Copyright Safina Bay.',
        ]);
    }
}
