<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimezoneSeeder extends Seeder
{
    public function run()
    {
        $timezones = [];
        $date = new \DateTime();  // Use the global DateTime class without 'use' statement

        // Loop through all timezones
        foreach (\DateTimeZone::listIdentifiers() as $timezone) {  // Use the global DateTimeZone class
            $zone = new \DateTimeZone($timezone);  // Use the fully qualified name for DateTimeZone
            $offset = $date->setTimezone($zone)->getOffset(); // Get offset in seconds
            $offset = $this->formatOffset($offset); // Format the offset to GMT format

            $timezones[] = [
                'name' => $this->getTimezoneName($timezone), // You can customize this if needed
                'identifier' => $timezone,
                'offset' => $offset,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert into the database
        DB::table('timezones')->insert($timezones);
    }

    // Function to format offset to GMT format (e.g., GMT+2, GMT-3)
    private function formatOffset($offsetInSeconds)
    {
        $hours = floor(abs($offsetInSeconds) / 3600);
        $minutes = floor((abs($offsetInSeconds) % 3600) / 60);
        $sign = ($offsetInSeconds < 0) ? '-' : '+';
        return 'GMT' . $sign . str_pad($hours, 2, '0', STR_PAD_LEFT) . ':' . str_pad($minutes, 2, '0', STR_PAD_LEFT);
    }

    // Function to extract a simple name for the timezone
    private function getTimezoneName($timezone)
    {
        // Split the timezone string by "/"
        $parts = explode('/', $timezone);

        // Check if the array has at least two parts (e.g., "Europe/London")
        if (isset($parts[1])) {
            // If so, replace underscores with spaces for a more readable format
            return str_replace('_', ' ', $parts[1]);
        }

        // If not, return the original timezone string (e.g., "UTC")
        return $timezone;
    }
}
