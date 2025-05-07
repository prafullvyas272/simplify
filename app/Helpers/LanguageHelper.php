<?php

namespace App\Helpers;

use App\Models\Language;
use Illuminate\Support\Facades\Cache;

class LanguageHelper
{
    public static function get_languages()
    {
        return Cache::remember("languages" , 86400, function (){
            return Language::all();
        });
    }
}
