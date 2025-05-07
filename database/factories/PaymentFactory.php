<?php

namespace Database\Factories;

use App\Enums\PaymentsStatusEnum;
use App\Enums\PaymentTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => fake()->numberBetween(1, 300),
            "paid_to" => fake()->numberBetween(1, 300),
            "total_amount" => fake()->numberBetween(1, 100000),
            "units" => fake()->numberBetween(1, 5),
            "unit_price" => fake()->numberBetween(1, 100),
            "status" => fake()->randomElement(PaymentsStatusEnum::values()),
            "type"=>fake()->randomElement(PaymentTypeEnum::values()),
        ];
    }
}
