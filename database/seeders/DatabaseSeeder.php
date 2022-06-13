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
            EmailTemplateSeeder::class,
            LanguagesSeeder::class,
            MenuSeeder::class,
            SiteSettingsSeeder::class,
            CountriesTableSeeder::class,
            CitiesTableSeeder::class,
            StatesTableSeeder::class,
        ]);
        $this->command->info('Admin User created with username admin@admin.com and password admin0101');
    }
}
