<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('articles')->delete();
        
        \DB::table('articles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Attract Sales And Profits',
                'text' => '<p>sdsdfsdf dssdfsdfsdf</p>',
                'image' => 'storage/photos/post1.png',
                'deleted_at' => NULL,
                'created_at' => '2022-06-26 10:07:23',
                'updated_at' => '2022-06-26 14:08:32',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '5 Tips For Job Interviews',
                'text' => '<p>sdsdsdfsdf</p>',
                'image' => 'storage/photos/post2.png',
                'deleted_at' => NULL,
                'created_at' => '2022-06-26 10:23:15',
                'updated_at' => '2022-06-26 14:08:55',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'The Evening of the Holiday',
                'text' => '<div class="col-md-6">
<div class="mini-post">
<h5>The Modern Art of Coffee</h5>
</div>
</div>
<div class="col-md-6">&nbsp;</div>',
                'image' => 'storage/photos/post3.png',
                'deleted_at' => NULL,
                'created_at' => '2022-06-26 14:09:31',
                'updated_at' => '2022-06-26 14:09:31',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'The Modern Art of Coffee',
                'text' => '<div class="col-md-6">
<div class="mini-post">
<h5>The Modern Art of Coffee</h5>
</div>
</div>
<div class="col-md-6">&nbsp;</div>',
                'image' => 'storage/photos/post4.png',
                'deleted_at' => NULL,
                'created_at' => '2022-06-26 14:09:47',
                'updated_at' => '2022-06-26 14:09:47',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'HTML, CSS, JS Developer',
                'text' => '<div class="flx-s7">
<div class="content-bx-2">
<div class="col-md-6 bx-3">
<div class="row">
<div class="col-md-6">
<div class="mini-post">
<h5>HTML, CSS, JS Developer</h5>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="btn-col-2-sec2 s6-btn">&nbsp;</div>',
                'image' => 'storage/photos/post5.png',
                'deleted_at' => NULL,
                'created_at' => '2022-06-26 14:10:09',
                'updated_at' => '2022-06-26 14:10:09',
            ),
        ));
        
        
    }
}