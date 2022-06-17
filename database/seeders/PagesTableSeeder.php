<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'home',
                'order' => 13,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-06-15 20:18:33',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'locations',
                'order' => 2,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => '2022-06-15 21:06:58',
                'created_at' => NULL,
                'updated_at' => '2022-06-15 21:06:58',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'forum',
                'order' => 3,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => '2022-06-15 21:07:02',
                'created_at' => NULL,
                'updated_at' => '2022-06-15 21:07:02',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'community',
                'order' => 4,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => '2022-06-15 21:07:07',
                'created_at' => NULL,
                'updated_at' => '2022-06-15 21:07:07',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'market',
                'order' => 5,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => '2022-06-15 21:07:12',
                'created_at' => NULL,
                'updated_at' => '2022-06-15 21:07:12',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'about',
                'order' => 6,
                'image' => '/images/about-img.png',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'contact',
                'order' => 7,
                'image' => NULL,
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'login',
                'order' => 8,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'sign-up',
                'order' => 9,
                'image' => NULL,
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => 'privacy-policy',
                'order' => 10,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'slug' => 'terms-conditions',
                'order' => 11,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'slug' => 'healthcare-professionals',
                'order' => 13,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-15 18:19:13',
                'updated_at' => '2022-06-15 18:24:18',
            ),
            12 => 
            array (
                'id' => 13,
                'slug' => 'facilities',
                'order' => 10,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-15 21:10:09',
                'updated_at' => '2022-06-16 17:23:53',
            ),
            13 => 
            array (
                'id' => 14,
                'slug' => 'staffing',
                'order' => 11,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-16 18:05:35',
                'updated_at' => '2022-06-16 18:10:22',
            ),
            14 => 
            array (
                'id' => 15,
                'slug' => 'request-demo',
                'order' => 12,
                'image' => '/',
                'status' => 'Active',
                'created_by' => 1,
                'social_links' => 0,
                'newsletter' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-17 17:15:45',
                'updated_at' => '2022-06-17 17:16:08',
            ),
        ));
        
        
    }
}