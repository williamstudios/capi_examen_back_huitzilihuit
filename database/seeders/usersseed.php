<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user_domicilio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class usersseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_domicilio::factory()->count(count: 100)->create();
        /*DB::table('user_domicilio')->insert([
            'domicilio' => "Domicilio de prueba",
            'numero_exterior' => "154",
            'colonia' => "Colonia Prueba",
            'cp' => "645",
            'ciudad' => "Monterrey",
            'fecha_nacimento' => "2023-04-05",

        ]);*/
    }
}
