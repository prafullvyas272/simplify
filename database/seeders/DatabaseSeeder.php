<?php

namespace Database\Seeders;

use App\Enums\StatusEnum;
use App\Models\Assessment;
use App\Models\CoachUser;
use App\Models\Language;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CountrySeeder::class,
            RoleSeeder::class,
            IndustrySeeder::class,
            LanguageSeeder::class,
            SchoolsSeeder::class,
            PakagesTableSeeder::class,
            PakagesDetailsTableSeeder::class,
        ]);


        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@test.com',
            'password'=>"password",
            'gender' => 'male',
            'role_id' => 1,
            'country_id' => 1,
        ]);


        User::factory()->create([
            'first_name' => 'fawzy',
            'last_name' => 'mowakeh',
            'email' => 'newstudent@test.com',
            'password'=>"password",
            'gender' => 'male',
            'role_id' => 3,
            'country_id' => 1,
        ]);


        User::factory()->create([
            'first_name' => 'fawzy',
            'last_name' => 'coach',
            'email' => 'newcoach@test.com',
            'password'=>"password",
            'gender' => 'male',
            'role_id' => 2,
            'country_id' => 1,
        ]);


        CoachUser::create([
            "student_id" => 2,
            "coach_id" => 3,
            "from_date" => now(),
            "to_date" => now(),
            "status" => StatusEnum::Completed
        ]);

//        Assessment::create([
//            "user_id" => 2,
//            "type" => "CS"
//        ]);
//        Assessment::create([
//            "user_id" => 3,
//            "type" => "CS"
//        ]);

    DB::table("report_options")->insert([
        "name"=>"high",
        "score"=>2
    ]);
    DB::table("report_options")->insert([
        "name"=>"low",
        "score"=>-1
    ]);

    DB::table("report_data")->insert([
        "report_type"=>"C",
        "report_file"=>"resources/report/c_style.json"
    ]);


    }
}
