<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountryCodeColumnAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = Country::all();
        $path = storage_path() . "/app/countries.json"; // ie: /var/www/laravel/app/storage/json/filename.json

        $countryCodes = json_decode(file_get_contents($path), true);

        foreach ($countries as $country) {
            $countryName = $country->name;
            $countryDetail = collect($countryCodes['countries'])->where('name', $countryName)->first();
            $countryCode = $countryDetail ? $countryDetail['code'] : null;

            $country->update([
                'country_code' => $countryCode
            ]);

        }
    }
}
