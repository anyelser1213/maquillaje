<?php

namespace Database\Factories;

use App\Models\Perfiles;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerfilesFactory extends Factory
{

    protected $model = Perfiles::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "nombre"=> $this->faker->word(),
            //'created_at' => now(),
            //'updated_at' => now()
        ];
    }
}
