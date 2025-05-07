<?php

namespace App\Mail;

use App\Models\WhiteListedUser;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WhiteListedUserCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $data;

    /**
     * Create a new message instance.
     *
     * @param  WhiteListedUser  $user
     * @return void
     */
    public function __construct(WhiteListedUser $user, $data)
    {
        $this->user = $user;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome to the White List')
                    ->view('emailTemplate.whitelisted-user-created');
    }
}
