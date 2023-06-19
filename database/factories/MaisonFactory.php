<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class MaisonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => Str::random(8),
            'description' => Str::random(40),
            'nb_chambre' => 3,
            'nb_douche'=> 1,
            'prix_vende'=> 3000,
            'prix_louer_moin'=> 0,
            'prix_louer_jour'=> 0,
            'owner'=> 1,
            'status' => 'DESPONIBLE',
            'surface_maison' => random_int(50, 300),
            'surface_terre' =>random_int(50, 200),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
