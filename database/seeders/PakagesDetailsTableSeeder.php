<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Exception;

class PakagesDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();
            $data = [
                    [
                        'pakage_id' => 1,
                        'description' => "<strong>Boost academic success</strong> by understanding how your child learns best.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 1,
                        'description' => "<strong>Improve focus and engagement</strong> with tailored insights into their learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 1,
                        'description' => "<strong>Support their development</strong> by recognizing their unique personality traits and behaviors.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 1,
                        'description' => "<strong>Ask AI</strong> for immediate help in engaging with your child based on their unique personality and learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 1,
                        'description' => "<strong>Priority Support</strong> for faster assistance when you need it most.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 1,
                        'description' => "<strong>Coming Soon:</strong> Homework Help Bot for tailored study strategies aligned with their learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],


                    [
                        'pakage_id' => 2,
                        'description' => "<strong>Empower your teen</strong> with insights into their personality and learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 2,
                        'description' => "<strong>Help them excel</strong> in school and beyond by aligning with their natural strengths.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 2,
                        'description' => "<strong>Encourage confidence and self-awareness</strong> with actionable strategies for success.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 2,
                        'description' => "<strong>Ask AI</strong> for immediate help in engaging with your child based on their unique personality and learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 2,
                        'description' => "<strong>Priority Support</strong> for faster assistance when you need it most.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 2,
                        'description' => "<strong>Coming Soon:</strong> Homework Help Bot for tailored study strategies aligned with their learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],



                    [
                        'pakage_id' => 3,
                        'description' => "<strong>Reclaim your time</strong> by letting us handle school emails, schedules, and reminders.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 3,
                        'description' => "<strong>Stay organized effortlessly</strong> with smart, tailored planning tools.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 3,
                        'description' => "<strong>Make life easier</strong> with recommendations aligned with your child’s personality and learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 3,
                        'description' => "Prefer Simplify on its own? Subscribe for just 99 AED/month and enjoy all these benefits without purchasing additional reports.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],


                    [
                        'pakage_id' => 4,
                        'description' => "<strong>Track their growth</strong> with 3 assessments throughout the year to monitor personality and learning style evolution.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 4,
                        'description' => "<strong>Gain deeper insights</strong> into your child’s development with expert guidance.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 4,
                        'description' => "Includes <strong>Simplify</strong> for seamless organization and added support.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 4,
                        'description' => "<strong>Ask AI</strong> for immediate help in engaging with your child based on their unique personality and learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 4,
                        'description' => "<strong>Priority Support</strong> for faster assistance when you need it most.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 4,
                        'description' => "<strong>Coming Soon:</strong> Homework Help Bot for tailored study strategies aligned with their learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],


                    [
                        'pakage_id' => 5,
                        'description' => "<strong>Empower their journey</strong> with 3 assessments across the year, tracking personality and learning style changes.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 5,
                        'description' => "<strong>Provide tailored strategies</strong> for growth and development at every stage.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 5,
                        'description' => "Includes <strong>Simplify</strong> for streamlined planning and personalized support.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 5,
                        'description' => "<strong>Ask AI</strong> for immediate help in engaging with your child based on their unique personality and learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 5,
                        'description' => "<strong>Priority Support</strong> for faster assistance when you need it most.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'pakage_id' => 5,
                        'description' => "<strong>Coming Soon:</strong> Homework Help Bot for tailored study strategies aligned with their learning style.",
                        'status' => "1",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                ];
            DB::table('pakages_details')->insert($data);
            DB::commit();
        } catch (Exception $e) {
            Log::error('Error to run seeder -> '.$e->getMessage());
        }
    }
}
