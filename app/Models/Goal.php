<?php

namespace App\Models;

use App\Enums\GoalStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable=[
        "name",
        "status",
        "description",
        "due_at",
        "user_id",
        "assigned_by",
    ];

    protected $casts=[
        "status" => GoalStatusEnum::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function assigned_by(){
        return $this->belongsTo(User::class,"assigned_by");
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

}
