<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class simplifyParentDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Add this to allow mass assignment
        'first_name',
        'last_name',
        'email',
        'country_id',
        'timezone_id',
        'phone_number',
        'date_of_birth',
        'partner_first_name',
        'partner_last_name',
        'partner_email',
        'country_code',
        'city',
        // Add other attributes as necessary
    ];
}
