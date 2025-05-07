<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Exception;

class PakagesTableSeeder extends Seeder
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
                        'title' => "Kids",
                        'slug' => "kids-one-time",
                        'strip_price_key' => "price_1QMOs6FT6ls29pru3h40FtJI",
                        'price' => 479,
                        'default_active'=> '0',
                        'type'=> "one_time",
                        'status'=> "1",
                        'using_type'=> "kids",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'title' => "Teen",
                        'slug' => "teen-one-time",
                        'strip_price_key' => "price_1QMOs6FT6ls29pru3h40FtJI",
                        'price' => 479,
                        'default_active'=> '0',
                        'type'=> "one_time",
                        'status'=> "1",
                        'using_type'=> "teen",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'title' => "Simplify",
                        'slug' => "simplify-one-time",
                        'strip_price_key' => "price_1QVSRlFT6ls29pruGBlXEPps",
                        'price' => 99,
                        'default_active'=> '0',
                        'type'=> "one_time",
                        'status'=> "0",
                        'using_type'=> null,
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'title' => "Kids",
                        'slug' => "kids-assessments",
                        'strip_price_key' => "price_1QVSSfFT6ls29pru7M4mxkAx",
                        'price' => 999,
                        'default_active'=> '0',
                        'type'=> "assessments",
                        'status'=> "1",
                        'using_type'=> "kids",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                    [
                        'title' => "Teen",
                        'slug' => "teen-assessments",
                        'strip_price_key' => "price_1QVSTQFT6ls29prui8c2tRBc",
                        'price' => 999,
                        'default_active'=> '0',
                        'type'=> "assessments",
                        'status'=> "1",
                        'using_type'=> "teen",
                        'created_at'=>Carbon::now(),
                        'updated_at'=>Carbon::now(),
                    ],
                ];
            DB::table('pakages')->insert($data);
            DB::commit();
        } catch (Exception $e) {
            Log::error('Error to run seeder -> '.$e->getMessage());
        }
    }

}
