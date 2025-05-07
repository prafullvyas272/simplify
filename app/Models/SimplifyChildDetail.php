<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimplifyChildDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', // Add this to allow mass assignment
        'simplify_parent_id',
        'child_first_name',
        'child_last_name',
        'relationship_to_child',
        'date_of_birth',
        'school_name',
        'other_school',
        'grade',
        'gender',
        'key_interests',
        'learning_goals',
        // Add other attributes as necessary
    ];
}
