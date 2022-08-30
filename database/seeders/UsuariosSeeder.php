<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        //$data = ['anyelser'];

        DB::table('users')->insert([
            // ..
            "nombre"=> 'admin',
            "username"=>'admin',
            "email"=> 'admin@gmail.com',
            'email_verified_at' => now(),
            'perfil_id'=>1,
            'remember_token' => Str::random(10),
            'password' => Hash::make('admin')
        ]);
        
        DB::table('users')->insert([
            // ..
            "nombre"=> 'anyelser',
            "username"=>'anyelser',
            "email"=> 'anyelser@gmail.com',
            'email_verified_at' => now(),
            'perfil_id'=>2,
            'remember_token' => Str::random(10),
            'password' => Hash::make('laravel')
        ]);

        DB::table('users')->insert([
            // ..
            "nombre"=> 'usuario1',
            "username"=>'usuario1',
            "email"=> 'usuario1@gmail.com',
            'email_verified_at' => now(),
            'perfil_id'=>3,
            'remember_token' => Str::random(10),
            'password' => Hash::make('usuario')
        ]);


        //ser::factory(3)->create();
            
    }

        //unset($data);
        

        //Perfiles::factory(3)->create();

        
        
        //Perfiles::factory()->count(10)->create();
        //
        /*
        DB::table('user')->insert([
            'nombre' => Str::random(10),
        ]);



        User::factory()->create([
                "nombre"=> 'anyelser',
                "password"=> bcrypt(123),

            ]); 

        */
    
}//fin de la clase