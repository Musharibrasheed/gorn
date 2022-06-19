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
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Editor',
                'last_name' => 'Account',
                'email' => 'editor@gmail.com',
                'phone_number' => NULL,
                'image' => NULL,
                'password' => '$2y$10$tiGcwCKf75P4DECKlzeJ2.T5plg3iDsz3/mx.p06/EePFGECUDu4u',
                'last_login' => NULL,
                'permissions' => NULL,
                'account_type' => 'Editor',
                'created_at' => '2022-06-12 20:04:23',
                'updated_at' => '2022-06-12 20:04:23',
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
                'password' => '$2y$10$pjEnV5p0E3gtrjqlDB3cEOJHPODrHz7D8Vaev2lAhUVGRV7Nigs02',
                'last_login' => NULL,
                'permissions' => NULL,
                'account_type' => 'Viewer',
                'created_at' => '2022-06-12 20:04:23',
                'updated_at' => '2022-06-12 20:04:23',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}