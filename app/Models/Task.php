<?php

namespace App\Models;

use App\Enums\GoalStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable=[
        "name",
        "description",
        "due_at",
        "status",
        "images",
        "documents",
        "user_id",
        "assigned_by",
        "goal_id"
    ];

    protected $casts=[
        "images" => "array",
        "documents" => "array",
        "status" => GoalStatusEnum::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function assigned_by(){
        return $this->belongsTo(User::class,"assigned_by");
    }

    public function goal()
    {
        return $this->belongsto(Goal::class);

    }
}
