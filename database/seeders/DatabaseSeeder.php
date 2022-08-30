<?php

namespace Database\Seeders;

use App\Models\Perfiles;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Con esto creamos 1 usuario aleatorios
        //User::factory(1)->create();

        $this->call([
            PerfilesSeeder::class,
            UsuariosSeeder::class,
        ]);

        //Perfiles::factory(5)->create();
    }
}
