<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Timezones;

class TimezoneTableCountryCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $timezones = Timezones::all();
        foreach ($timezones as $timezone) {
            $timezone->country_code = timezone_location_get(new \DateTimeZone($timezone->identifier))['country_code'];
            $timezone->save();
        }
    }
}
