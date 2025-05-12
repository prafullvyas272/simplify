<?php

namespace App\Console\Commands;

use App\Http\Controllers\BrevoAPIController;
use App\Models\SimplifyWhatsappSignup;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\WhatsappSignupRequest;

class SendSimplifySignupUserDataToBrevo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'brevo:sync-signups';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The command will be used to send the whatsapp signup users data to brevo.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $simplifyWhatsappSignupUsers = SimplifyWhatsappSignup::all();
            $brevoApiController = new BrevoAPIController();

            foreach ($simplifyWhatsappSignupUsers as $user) {
                $data = [
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'email' => $user['email'],
                    'phone' => $user['phone'],
                ];
                $request = new WhatsappSignupRequest($data);
                $brevoApiController->sendSimplifyWhatsappSignupDataToBrevo($request);
            }
            $this->info('Data sent to brevo...');

        } catch (\Throwable $exception) {
            Log::error('Something went wrong when sending data to brevo.' . $exception);
            return response()->json([
                'status' => 'error',
                'message' => $exception->getMessage(),
            ], 500);
        }
    }
}
