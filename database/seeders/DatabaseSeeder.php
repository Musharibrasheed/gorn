<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            PagesSeeder::class,
            UserSeeder::class,
            MenuSeeder::class
        ]);
        $this->command->info('Admin User created with username admin@admin.com and password admin0101');
        $this->call(PagesTableSeeder::class);
        $this->call(PagesDescriptionTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
    }
}
