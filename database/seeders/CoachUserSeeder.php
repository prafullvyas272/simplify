<?php

namespace Database\Seeders;

use App\Models\CoachUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CoachUser::factory(1000)->create();
    }
}
