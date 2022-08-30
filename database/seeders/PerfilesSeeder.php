<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perfiles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Foreach_;

class PerfilesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $data = ['SuperAdministrador', 'Administrador', 'Usuario'];

        foreach ($data as $valor){
            $out->writeln($valor);
            Perfiles::factory()->create([
                "nombre"=> $valor,
            ]); 
        }

        unset($data);

        //Perfiles::factory(3)->create();

        
        
        //Perfiles::factory()->count(10)->create();
        //
        /*
        DB::table('perfiles')->insert([
            'nombre' => Str::random(10),
        ]);

        */
    }
}
