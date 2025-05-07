<?php

namespace Database\Factories;

use App\Enums\GenderEnum;
use App\Enums\JobLevelEnum;
use App\Enums\UserCurrentStatusEnum;
use App\Enums\UserQualificationEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'role_id' => fake()->numberBetween(2,3),
            'gender'=> fake()->randomElement(GenderEnum::values()),
            'country_id' => fake()->numberBetween(1,250),
            "birthday" => fake()->date(),
            "avatar" => fake()->imageUrl(),
            "image"=> 'users-avatar/placeholder.png',
            "data" => [
                "rate"=>fake()->numberBetween(1,2000),
                "work_experiences"=>[
                    [
                        "title"=>fake()->jobTitle,
                        "description"=>fake()->paragraph,
                        "from"=>fake()->date(),
                        "to"=>fake()->date(),
                        "company_name"=>fake()->company,
                    ],
                    [
                        "title"=>fake()->jobTitle,
                        "description"=>fake()->paragraph,
                        "from"=>fake()->date(),
                        "to"=>fake()->date(),
                        "company_name"=>fake()->company,
                    ],
                    [
                        "title"=>fake()->jobTitle,
                        "description"=>fake()->paragraph,
                        "from"=>fake()->date(),
                        "to"=>fake()->date(),
                        "company_name"=>fake()->company,
                    ],
                    [
                        "title"=>fake()->jobTitle,
                        "description"=>fake()->paragraph,
                        "from"=>fake()->date(),
                        "to"=>fake()->date(),
                        "company_name"=>fake()->company,
                    ],
                    [
                        "title"=>fake()->jobTitle,
                        "description"=>fake()->paragraph,
                        "from"=>fake()->date(),
                        "to"=>fake()->date(),
                        "company_name"=>fake()->company,
                    ],
                    [
                        "title"=>fake()->jobTitle,
                        "description"=>fake()->paragraph,
                        "from"=>fake()->date(),
                        "to"=>fake()->date(),
                        "company_name"=>fake()->company,
                    ],
                    [
                        "title"=>fake()->jobTitle,
                        "description"=>fake()->paragraph,
                        "from"=>fake()->date(),
                        "to"=>fake()->date(),
                        "company_name"=>fake()->company,
                    ],
                    [
                        "title"=>fake()->jobTitle,
                        "description"=>fake()->paragraph,
                        "from"=>fake()->date(),
                        "to"=>fake()->date(),
                        "company_name"=>fake()->company,
                    ],
                    [
                        "title"=>fake()->jobTitle,
                        "description"=>fake()->paragraph,
                        "from"=>fake()->date(),
                        "to"=>fake()->date(),
                        "company_name"=>fake()->company,
                    ],

                ],
                "education"=>[
                    [

                        "from"=>fake()->date(),
                        "to"=>fake()->date(),
                        "school"=>fake()->company,
                        "qualification_type"=>fake()->randomElements(UserQualificationEnum::values()),
                        "description"=>fake()->paragraph,
                        "field_of_study"=>fake()->text,
                    ],

                ],
                "about"=>fake()->text(1000),
                "current_status"=>fake()->randomElements(UserCurrentStatusEnum::values()),
                "current_job_level"=>fake()->randomElements(JobLevelEnum::values()),
                "graduating_date"=>fake()->date(),
                ]
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
