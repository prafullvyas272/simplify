<?php

namespace Database\Seeders;

use App\Models\Schools;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schools::truncate();
  
        $csvFile = fopen(base_path("database/data/List_of_schools.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Schools::create([
                    "name"=> $data['1'],
                    "location"=> $data['2'],
                    "year_groups"=> $data['3'],
                ]);    
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
