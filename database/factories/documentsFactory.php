<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use app\Models\documents;

class documentsFactory extends Factory
{
    protected $model=documents::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         $max =count(\App\Models\tipoDocument::all());
        return [
            'titulo' => $this->faker->title(),
            'nome_arquivo'=> $this->faker->word().'_'.$this->faker->word().'.txt' ,
            'tipo_id'=>rand( 1, $max)
        ];
    }
}
