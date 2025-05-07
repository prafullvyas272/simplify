<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\WhiteListedUserCreated;
use Carbon\Carbon;
use Spatie\CalendarLinks\Link;

class WhiteListedUser extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $casts = [
        'kids' => 'array',
    ];


    // protected static function booted()
    // {
    //     static::created(function ($whiteListedUser) {
    //         User::create([
    //             'name' => $whiteListedUser->first_name . ' ' . $whiteListedUser->last_name,
    //             'first_name' => $whiteListedUser->first_name,
    //             'last_name' => $whiteListedUser->last_name,
    //             'email' => $whiteListedUser->email,
    //             'password' => bcrypt('Testing@123'),
    //             'role_id' => 1,
    //             'is_whitelisted_for_simplify' => true,
    //         ]);
    //     });
    // }

    // protected static function booted()
    // {
    //     static::saved(function ($user) {
    //         $fromDate = Carbon::now()->addDays(5)->setHour(14)->setMinute(0);
    //         $toDate = $fromDate->copy()->addHours(2);

    //         // Pass Carbon instances directly
    //         $link = Link::create('Remind me', $fromDate, $toDate)
    //             ->description('Remind me for an appointment!');


    //         // Generate a link to create an event on Google calendar
    //         $data = $link->google();
    //         $simplifyEmail = env('SIMPLIFY_EMAIL') ?? "simplify@useunify.com";
    //         Mail::to($simplifyEmail)->send(new WhiteListedUserCreated($user, $data));
    //     });
    // }
}
