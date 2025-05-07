<?php

namespace App\Helpers;


use App\Models\Country;
use Illuminate\Support\Facades\Cache;

class CountriesHelper
{
    public static function get_countries()
    {
        return Cache::remember("countries" , 86400, function (){
            return Country::all();
        });
    }
}
