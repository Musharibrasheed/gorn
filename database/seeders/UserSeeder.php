<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Sentinel;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules_list = array(
            'admin_pages'       => true,
            'admin_pages_data'       => true,
            'admin_page_add'       => true,
            'admin_page_add_post'       => true,
            'admin_page_update'       => true,
            'admin_page_update_post'       => true,
            'admin_page_delete'       => true,
            'admin_dashboard'       => true,
            'site_settings'         => true,
            'site_settings_update'  => true,
            //filemanager
            'unisharp.lfm.*'        => true,
        );

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
        DB::table('roles')->truncate();
        DB::table('role_users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $admin = Sentinel::registerAndActivate(array(
            'email'         => 'admin@admin.com',
            'password'      => "admin0101",
            'first_name'    => 'Super',
            'last_name'     => 'Admin',
            'account_type'  => 'Admin',
        ));
        $adminRole = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => $modules_list,
        ]);
        $admin->roles()->attach($adminRole);

        //editor account
        $editor_module_list    =   array(
            'edit_profile'      =>      true,
            'update_profile'    =>      true,
        );

        $editor = Sentinel::registerAndActivate(array(
            'email'         => 'editor@gmail.com',
            'password'      => "editor0101",
            'first_name'    => 'Editor',
            'last_name'     => 'Account',
            'account_type'  => 'editor',
        ));

        $editorRole = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Editor',
            'slug' => 'editor',
            'permissions' => $editor_module_list,
        ]);
        $editor->roles()->attach($editorRole);

        //viewer account
        $viewer_module_list    =   array(
            'viewer_edit_profile'      =>      true,
            'viewer_update_profile'    =>      true,
        );

        $viewer = Sentinel::registerAndActivate(array(
            'email'         => 'viewer@gmail.com',
            'password'      => "viewer0101",
            'first_name'    => 'Viewer',
            'last_name'     => 'Account',
            'account_type'  => 'viewer',
        ));

        $viewerRole = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Viewer',
            'slug' => 'viewer',
            'permissions' => $viewer_module_list,
        ]);
        $viewer->roles()->attach($viewerRole);


    }
}
