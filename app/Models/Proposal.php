<?php

namespace App\Models;

use App\Enums\ProposalStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable=[
        "coach_id",
        "student_id",
        "cover_letter",
        "hours",
        "status",
    ];

    protected $casts=[
        "status" => ProposalStatusEnum::class
    ];


    public function student ()
    {
        return $this->belongsTo(User::class , "student_id");
    }

    public function coach()
    {
        return $this->belongsTo(User::class , "coach_id");
    }
}
