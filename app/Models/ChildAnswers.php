<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildAnswers extends Model
{
    use HasFactory;
    protected $fillable = [
        'child_id', // Add this to allow mass assignment
        'type',
        'answere',
    ];
}
