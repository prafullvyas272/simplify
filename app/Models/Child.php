<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', // Add this to allow mass assignment
        'child_name',
        'school_id',
        'grade',
        'other_school_name',
        'birth_date',
        'gender',
        'payment_status',
        'style_type',
        'child_type',
        'relationship_to_child',
        'key_interests',
        'learning_goals',
        'dominant_percentage',
        'influential_percentage',
        'supportive_percentage',
        'cautious_percentage',
        'disc_assessment_link',
        'learn_assessment_link',
        'age',
    ];

    public  function userReport()
    {
        return $this->hasOne(UserReport::class, 'child_id');
    }
}
