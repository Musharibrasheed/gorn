<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('pages')->truncate();
    	DB::table('pages_description')->truncate();

        DB::table('pages')->insert([
            'id'             => '1',
			'slug'        	 => 'home',
			'order'        	 => '1',
            'image'          => '/',
            'status'         => 'Active',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '2',
			'slug'        	 => 'locations',
			'order'        	 => '2',
            'image'          => '/',
            'status'         => 'Active',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '3',
			'slug'        	 => 'forum',
			'order'        	 => '3',
            'image'          => '/',
            'status'         => 'Active',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '4',
			'slug'        	 => 'community',
			'order'        	 => '4',
            'image'          => '/',
            'status'         => 'Active',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '5',
			'slug'        	 => 'market',
			'order'        	 => '5',
            'image'          => '/',
            'status'         => 'Active',
            'created_by'     => '1',
        ]);

        DB::table('pages')->insert([
            'id'             => '6',
			'slug'        	 => 'about',
			'order'        	 => '6',
            'image'          => '/images/about-img.png',
            'status'         => 'Active',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '7',
			'slug'        	 => 'contact',
			'order'        	 => '7',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '8',
			'slug'        	 => 'login',
			'order'        	 => '8',
            'image'          => '/',
            'status'         => 'Active',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '9',
			'slug'        	 => 'sign-up',
			'order'        	 => '9',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '10',
			'slug'        	 => 'privacy-policy',
			'order'        	 => '10',
            'image'          => '/',
            'status'         => 'Active',
            'created_by'     => '1',
        ]);
        DB::table('pages')->insert([
            'id'             => '11',
			'slug'        	 => 'terms-conditions',
			'order'        	 => '11',
            'image'          => '/',
            'status'         => 'Active',
            'created_by'     => '1',
        ]);

        DB::table('pages_description')->insert([
            'id'             	=> '1',
			'page_id'        	=> '1',
			'language_id'    	=> '1',
            'template'    	 	=> 'home',
            'title'          	=> 'Home',
			'short_title'    	=> 'Home',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',            
			'page_video'        => '',
			'template_content'  => '',
        ]);
        
        DB::table('pages_description')->insert([
            'id'             	=> '2',
			'page_id'        	=> '2',
			'language_id'    	=> '1',
            'template'    	 	=> 'default',
            'title'          	=> 'Locations',
			'short_title'    	=> 'Locations',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '3',
			'page_id'        	=> '3',
			'language_id'    	=> '1',
            'template'    	 	=> 'default',
            'title'          	=> 'Forum',
			'short_title'    	=> 'Forum',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '4',
			'page_id'        	=> '4',
			'language_id'    	=> '1',
            'template'    	 	=> 'default',
            'title'          	=> 'Community',
			'short_title'    	=> 'Community',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '5',
			'page_id'        	=> '5',
			'language_id'    	=> '1',
            'template'    	 	=> 'default',
            'title'          	=> 'Market',
			'short_title'    	=> 'Market',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '6',
			'page_id'        	=> '6',
			'language_id'    	=> '1',
            'template'    	 	=> 'about',
            'title'          	=> 'About',
			'short_title'    	=> 'Our History',
			'content'        	=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu mauris augue. Nullam rutrum, purus eget pulvinar porttitor, libero orci rutrum ipsum, viverra laoreet nulla arcu eu leo. Aliquam erat volutpat. Donec molestie eget<br /><br />Etiam blandit lacinia purus, a iaculis nisl mollis vel. In id placerat lectus, non ultrices lacus. Curabitur non lobortis nibh. Praesent nulla velit, accumsan id ornare vitae, facilisis sed est. Suspendisse maximus mollis nulla, sit amet sodales est sollicitudin ut. Aliquam maximus vitae orci at eleifend. Fusce at velit augue. Vivamus luctus nulla sit amet risus ultricies rutrum.<br /><br />Vivamus luctus nulla sit amet risus ultricies rutrum. Cras bibendum scelerisque lacus ac sodales. Proin lacinia hendrerit ligula sed rhoncus. Pellentesque vel interdum purus.</p>',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '7',
			'page_id'        	=> '7',
			'language_id'    	=> '1',
            'template'    	 	=> 'default',
            'title'          	=> 'Contact',
			'short_title'    	=> 'Contact',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '8',
			'page_id'        	=> '8',
			'language_id'    	=> '1',
            'template'    	 	=> 'login',
            'title'          	=> 'Login',
			'short_title'    	=> 'Login',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
          DB::table('pages_description')->insert([
            'id'             	=> '9',
			'page_id'        	=> '9',
			'language_id'    	=> '1',
            'template'    	 	=> 'login',
            'title'          	=> 'Sign Up',
			'short_title'    	=> 'Sign Up',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '10',
			'page_id'        	=> '10',
			'language_id'    	=> '1',
            'template'    	 	=> 'default',
            'title'          	=> 'Privacy Policy',
			'short_title'    	=> 'Privacy Policy',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        DB::table('pages_description')->insert([
            'id'             	=> '11',
			'page_id'        	=> '11',
			'language_id'    	=> '1',
            'template'    	 	=> 'default',
            'title'          	=> 'Terms & Conditions',
			'short_title'    	=> 'Terms & Conditions',
			'content'        	=> '',
            'short_content'  	=> '',
            'meta_title'     	=> '',
			'meta_keywords'     => '',
			'meta_description'  => '',
			'page_video'        => '',
			'template_content'  => 'a:0:{}',
        ]);
        
    }
}
