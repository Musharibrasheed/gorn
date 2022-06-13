<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('menu')->truncate();
    	DB::table('menu_description')->truncate();

        //menu item
    	$menu_id        = 1;
        $sort           = 0;
        $created_by     = 0;


    	$page_id        = 2;
    	$menu_type      = 'Primary';
    	$menu_status    = 'Active';
    	$link_type      = 'Page';
    	$link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
			'menu_type'             => $menu_type,
			'status'                => $menu_status,
			'type'                  => $link_type,
			'page_id'               => $page_id,
			'url'                   => $link_url,
			'hide_customer'         => '0',
			'sort'                  => $sort,
            'created_by'            => $created_by,
		]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Locations';

		DB::table('menu_description')->insert([
			'menu_id'        => $menu_id,
            'language_id'    => $language_id,
			'title'          => $title_en,
		]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        = 3;
        $menu_type      = 'Primary';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Forum';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        = 4;
        $menu_type      = 'Primary';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Community';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        = 5;
        $menu_type      = 'Primary';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Market';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        =  6;
        $menu_type      = 'Primary';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'About';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        = 7;
        $menu_type      = 'Primary';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Contact';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort = 0;
        $page_id        = 1;
        $menu_type      = 'Footer';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Home';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        = 2;
        $menu_type      = 'Footer';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Locations';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        = 4;
        $menu_type      = 'Footer';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Community';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        = 5;
        $menu_type      = 'Footer';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Market';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        = 6;
        $menu_type      = 'Footer';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'About';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        = 12;
        $menu_type      = 'Footer';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Cart';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'About';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);


		//menu item
        $menu_id++;
        $sort++;
        $page_id        = 11;
        $menu_type      = 'Footer';
        $menu_status    = 'Active';
        $link_type      = 'Page';
        $link_url       = '#';


        DB::table('menu')->insert([
            'id'                    => $menu_id,
            'menu_type'             => $menu_type,
            'status'                => $menu_status,
            'type'                  => $link_type,
            'page_id'               => $page_id,
            'url'                   => $link_url,
            'hide_customer'         => '0',
            'sort'                  => $sort,
            'created_by'            => $created_by,
        ]);

        //menu description

        $language_id    = 1;
        $title_en       = 'Terms & Condtions';

        DB::table('menu_description')->insert([
            'menu_id'        => $menu_id,
            'language_id'    => $language_id,
            'title'          => $title_en,
        ]);

    }
}
