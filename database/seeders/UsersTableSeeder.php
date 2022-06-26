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
                'password' => '$2y$10$72RuixwlK1qLl20dqK3gUuSMrS6Yx/a25STQx/VpUcJhcbThbzvXC',
                'last_login' => '2022-06-26 08:58:52',
                'permissions' => NULL,
                'account_type' => 'Admin',
                'created_at' => '2022-06-25 20:33:25',
                'updated_at' => '2022-06-26 08:58:52',
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
                'password' => '$2y$10$WAyaD1RsxLI5awO9oQijFO/APFWi3mtS4t0Cgf2XCXxXrNZMYTCgi',
                'last_login' => NULL,
                'permissions' => NULL,
                'account_type' => 'Editor',
                'created_at' => '2022-06-25 20:33:25',
                'updated_at' => '2022-06-25 20:33:25',
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
                'password' => '$2y$10$lPNEcbcsLGhPQrfcSnFlC.p9uMYXYAdrg/mFyGN3iDIIYfMi.uGMO',
                'last_login' => NULL,
                'permissions' => NULL,
                'account_type' => 'Viewer',
                'created_at' => '2022-06-25 20:33:26',
                'updated_at' => '2022-06-25 20:33:26',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}