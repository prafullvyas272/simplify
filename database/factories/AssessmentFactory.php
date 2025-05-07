<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assessment>
 */
class AssessmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "type" => "DI",
            "self->disc"=>fake()->text(100),
            "self->intro"=>fake()->text(100),
            "self->desc"=>fake()->text(100),
            "self->strength"=>fake()->text(100),
            "self->trait"=>fake()->text(100),
            "self->graph"=>fake()->text(100),
            "team->me"=>fake()->text(100),
            "team->working"=>fake()->text(100),
            "team->other"=>fake()->text(100),
            "team->reading"=>fake()->text(100),
            "communication->basic"=>fake()->text(100),
            "communication->com"=>fake()->text(100),
            "communication->priorities"=>fake()->text(100),
            "communication->emphasize"=>fake()->text(100),
            "communication->tips"=>fake()->text(100),
            "communication->perception"=>fake()->text(100),
            "growth->excel"=>fake()->text(100),
            "growth->insights"=>fake()->text(100),
            "growth->leadership"=>fake()->text(100),
            "growth->success"=>fake()->text(100),
            "growth->tips"=>fake()->text(100),
            "user_id" => fake()->numberBetween(1, 100)
        ];
    }
}
