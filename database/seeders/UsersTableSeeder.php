<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'admin@admin.com',
                'phone_number' => NULL,
                'image' => NULL,
                'password' => '$2y$10$gclg8VX2lLmQ9HV1aLypsuh.ZD2AX2QhHaZxQsK6P3UjLavTRJHIa',
                'last_login' => '2022-06-18 21:37:54',
                'permissions' => NULL,
                'account_type' => 'Admin',
                'created_at' => '2022-06-12 20:04:22',
                'updated_at' => '2022-06-18 21:37:54',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}