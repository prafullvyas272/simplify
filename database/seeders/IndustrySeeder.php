<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industries = [
        "Information Technology (IT)",
        "Healthcare",
        "Education",
        "Finance",
        "Marketing",
        "Sales",
        "Engineering",
        "Human Resources (HR)",
        "Customer Service",
        "Operations",
        "Design",
        "Legal",
        "Research and Development (R&D)",
        "Manufacturing",
        "Media and Communications",
        "Hospitality",
        "Real Estate",
        "Retail",
        "Transportation and Logistics",
        "Environmental Services",
        ];


        foreach ($industries as $industry)
            Industry::updateOrCreate([
                "name" => $industry,
            ]);

    }
}
