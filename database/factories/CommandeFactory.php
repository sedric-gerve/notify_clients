<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
     protected $model = Commande::class;

    public function definition()
    {
        return [
            'Article_commander' => $this->faker->sentence,
            'ModeDePaiement' => $this->faker->sentence,
            'prix' => $this->faker->randomNumber(6),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
