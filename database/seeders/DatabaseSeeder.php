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
        $this->call(CountryStateCityTableSeeder::class);
        $this->call(RoleAndPermissionSeeder::class);
        // $this->call(SettingsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
    }
}
