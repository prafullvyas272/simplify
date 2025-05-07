<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CoachUser extends Pivot
{

    use HasFactory;
    protected $casts=[
        "status"=>StatusEnum::class
    ];

    protected $fillable=[
        "from_date",
        "to_date",
        "status",
        "coach_id",
        "student_id",
        "rate"
    ];


    public function coach(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class , "coach_id");
    }
    public function student(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class , "student_id");
    }

    public function goals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Goal::class, "coach_user_id");
    }

    public function notes()
    {
        return $this->hasMany(Note::class, "coach_user_id");
    }


}
