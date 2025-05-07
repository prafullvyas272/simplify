<?php

namespace Database\Factories;

use App\Enums\GoalStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goal>
 */
class GoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "description" => $this->faker->text(),
            "due_date" => $this->faker->dateTime(),
            "user_id"=>fake()->numberBetween(200, 302),
            "status"=> fake()->randomElement(GoalStatusEnum::values()),
            "coach_user_id"=>1
        ];
    }
}
