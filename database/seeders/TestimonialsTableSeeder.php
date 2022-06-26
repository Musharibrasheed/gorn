<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonials')->delete();
        
        \DB::table('testimonials')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Great Quality!',
                'client_name' => 'James',
                'client_profession' => 'Consultant',
                'client_comments' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>',
                'image' => 'storage/photos/14.png',
                'status' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-06-25 18:31:49',
                'updated_at' => '2022-06-26 14:30:14',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Great Quality!',
                'client_name' => 'James',
                'client_profession' => 'Consultant',
                'client_comments' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>',
                'image' => 'storage/photos/14.png',
                'status' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-06-25 18:31:49',
                'updated_at' => '2022-06-26 14:30:19',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Great Quality!',
                'client_name' => 'James',
                'client_profession' => 'Consultant',
                'client_comments' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>',
                'image' => 'storage/photos/14.png',
                'status' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2022-06-25 18:31:49',
                'updated_at' => '2022-06-26 14:30:25',
            ),
        ));
        
        
    }
}