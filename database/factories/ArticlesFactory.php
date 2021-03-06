<?php

namespace Database\Factories;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticlesFactory extends Factory
{
    protected $model = Articles::class;
    /*
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prix' => $this->faker->randomNumber(3),
            'id_utilisateur'=> $this->faker->numberBetween(1,10),
            'id_type_article'=> $this->faker->numberBetween(1,10),
        ];
    }
}
