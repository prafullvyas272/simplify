<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timezones extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Add this to allow mass assignment
        'identifier',
        'offset',
    ];
}
