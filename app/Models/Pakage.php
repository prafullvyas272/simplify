<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakage extends Model
{
    use HasFactory;

    public function pakageDetail()
    {
        return $this->hasMany(Pakages_detail::class);
    }
}
