<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;

class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $descricao = $this->faker->unique()->sentence();
        return [
            'nome' => $this->faker->word,
            'descricao' => $descricao,
        ];
    }
}
