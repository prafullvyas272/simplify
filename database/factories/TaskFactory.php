<?php

namespace Database\Factories;

use App\Enums\GoalStatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            "due_date" => $this->faker->dateTimeInInterval('now', '+20 days'),
            "user_id"=>fake()->numberBetween(200, 302),
            "assigned_by"=>fake()->numberBetween(200, 302),
            "status"=> fake()->randomElement(GoalStatusEnum::values()),
            "goal_id"=>fake()->numberBetween(1, 1000),
        ];
    }
}
