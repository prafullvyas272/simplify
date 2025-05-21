<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Casts\Money;
use App\Enums\AssessmentTerm;
use App\Enums\CurrentExpEnum;
use App\Enums\GenderEnum;
use App\Enums\UserCurrentStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use App\Models\UserReport;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'name',
        'parent_last_name',
        'last_name',
        'email',
        'password',
        'gender',
        'image',
        'role_id',
        'gender',
        'phone_number',
        'timezone_id',
        'country_id',
        'birthday',
        'school_id',
        'grade',
        'other_school_name',
        'data',
        'data->profile_completed',
        "data->work_experiences",
        "data->position",
        "data->company",
        "data->rate",
        "data->video",
        "data->about",
        "data->education",
        "data->current_status",
        "data->current_job_level",
        "data->current_exp",
        "data->career_roadmap",
        "data->qualifications",
        "data->other_qualification",
        "data->graduating_date",
        "data->subject",
        "data->what_to_do",
        "data->personal_goals",
        "data->professional_certificate",
        // "active_status",

        "is_invited_from_lesson_planner",

        'calendly_access_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
//        'email',
        "email_verified_at",
        "created_at",
        "updated_at",
        "stripe_id",
        "pm_type",
        "pm_last_four",
        "trial_ends_at",
        "active_status",
        "dark_mode",
        "messenger_color",
    ];


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'gender'=>GenderEnum::class,
            "data"=>"array",
            "data->current_status"=>UserCurrentStatusEnum::class,
            "data->current_exp"=>CurrentExpEnum::class,
            "role_id" => "integer"
        ];
    }


    public function is_admin(): int
    {
        return $this->where("role_id", 1)->count();
    }
    public function is_coach(): int
    {
        return $this->where("role_id", 2)->count();
    }
    public function is_student(): int
    {
        return $this->where("role_id", 3)->count();
    }

    public function userReports()
    {
        return $this->hasMany(UserReport::class);
    }

    public function only_coaches()
    {
        return $this->where("role_id", 2)->get();
    }

    public function role(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function languages(): \Illuminate\Database\Eloquent\Relations\BelongsToMany

    {
        return $this->belongsToMany(Language::class);
    }
    public function assessments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Assessment::class);
    }

    //get the latest assessment only
    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
    public function assessment(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Assessment::class)->latestOfMany();

    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class , "coach_user" , 'coach_id' , "student_id" )
            ->using(CoachUser::class)
            ->withPivot([
                    "hours"
                ]);
    }
    public function coaches()
    {
        return $this->belongsToMany(User::class , "coach_user" , 'student_id' , "coach_id" )
            ->using(CoachUser::class)
            ->withPivot([
                    "hours"
                ]);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }



    //relationships

    public function industries()
    {
        return $this->belongsToMany(Industry::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function childrens()
    {
        return $this->hasMany(Child::class, 'user_id');
    }

    public function secondTermAssessment()
    {
        return $this->hasOne(Assessment::class)->where('term', AssessmentTerm::SECOND);
    }

    public function secondTermUserReports()
    {
        return $this->hasMany(UserReport::class)->where('term', AssessmentTerm::SECOND);
    }
}
