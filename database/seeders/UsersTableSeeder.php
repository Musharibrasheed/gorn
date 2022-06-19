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
                'phone_number' => '',
                'image' => '',
                'password' => '$2y$10$KT4whFdoGlTSdPAQk6d57.u35rIDBLG4sWHUKbsL8bQuCYqK4GMr.',
                'last_login' => '2022-06-19 10:30:20',
                'permissions' => NULL,
                'account_type' => 'Admin',
                'created_at' => '2022-06-19 08:51:11',
                'updated_at' => '2022-06-19 10:30:20',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Editor',
                'last_name' => 'Account',
                'email' => 'editor@gmail.com',
                'phone_number' => NULL,
                'image' => NULL,
                'password' => '$2y$10$IAagnQGTy7VOoEaR801rhuPfRY9HL4O3xjBHsFzhDyAMQODxRDNiS',
                'last_login' => NULL,
                'permissions' => NULL,
                'account_type' => 'Editor',
                'created_at' => '2022-06-19 08:51:11',
                'updated_at' => '2022-06-19 08:51:11',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'first_name' => 'Viewer',
                'last_name' => 'Account',
                'email' => 'viewer@gmail.com',
                'phone_number' => NULL,
                'image' => NULL,
                'password' => '$2y$10$E59SgpnDsYTQCy/dvc4sAOjvvHVOr2KhbFDd4zVCkyFeN6Q8RoZx6',
                'last_login' => NULL,
                'permissions' => NULL,
                'account_type' => 'Viewer',
                'created_at' => '2022-06-19 08:51:11',
                'updated_at' => '2022-06-19 08:51:11',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}