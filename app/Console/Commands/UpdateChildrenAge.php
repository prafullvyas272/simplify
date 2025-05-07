<?php

namespace App\Console\Commands;

use App\Models\Child;
use App\Models\WhiteListedUser;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;


class UpdateChildrenAge extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:children-age';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used to update the age of childrens according to their dob';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            Child::chunk(100, function ($childrens) {
                foreach ($childrens as $children) {
                    $currentDate = Carbon::now();
                    $childrenDob = $children->birth_date ? Carbon::parse($children->birth_date) : null;
                    $currentAge = $childrenDob ? $childrenDob->age : null;
                    if ($currentAge != $children->age) {
                        $children->update([
                            'age' => $currentAge
                        ]);
                        $currentAge = round($currentAge);
                    }
                }
                Log::info("Updated age field for childrens on " . $currentDate->format('Y-m-d'));
            });

            $whiteListedUsers = WhiteListedUser::where('kids', '!=', null)->get();
            if (!empty($whiteListedUsers)) {
                foreach ($whiteListedUsers as $whiteListedUser) {
                    $whiteListedUserKids = $whiteListedUser->kids;
                    $updatedDataForWhiteListedUserKids = [];
                    foreach ($whiteListedUserKids as $whiteListedUserKid) {
                        $currentAge = Carbon::parse($whiteListedUserKid['dob'])->age;
                        $whiteListedUserKid['age'] = $currentAge;
                        $updatedDataForWhiteListedUserKids[] = $whiteListedUserKid;
                    }
                    $whiteListedUser->update([
                        'kids' => $updatedDataForWhiteListedUserKids
                    ]);
                    Log::info("Updated age field for kids ");
                }
            }


        } catch (\Throwable $exception) {
            Log::error('Something went wrong when running the job: ' . $exception->getMessage());
        }
    }
}
