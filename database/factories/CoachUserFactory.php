<?php

namespace Database\Factories;

use App\Enums\PaymentsStatusEnum;
use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CoachUser>
 */
class CoachUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "created_at" => fake()->dateTime(),
            "coach_id" => 220,
            "student_id" => 301,
            "status" => fake()->randomElement(StatusEnum::values()),
            "from_date"=>fake()->dateTimeBetween('-1 days', '200 days'),
            "to_date"=>fake()->dateTimeBetween('-1 days', '200 days'),
        ];
    }
}
