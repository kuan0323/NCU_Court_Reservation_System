<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

use App\Models\Court;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Court>
 */
class CourtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'court_Name' => $this->faker->word(),
            'court_Price' => $this->faker->randomNumber(3, false),
            'court_Image' => $this->faker->randomHtml(4, 4),
            'court_Status' => $this->faker->boolean(),
            'court_Type' => $this->faker->word(),

        ];
    }
}
