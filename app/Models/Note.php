<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable=[
        "coach_user_id",
        "note",
        "user_id"
    ];

    public function coach_user()
    {
        return $this->belongsTo(CoachUser::class);
    }
}
