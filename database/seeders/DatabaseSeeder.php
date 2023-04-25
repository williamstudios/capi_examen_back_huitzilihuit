<?php

namespace Database\Seeders;

use App\Models\user_domicilio;
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
        user_domicilio::factory(100)->create();
        // \App\Models\User::factory(10)->create();
    }
}
