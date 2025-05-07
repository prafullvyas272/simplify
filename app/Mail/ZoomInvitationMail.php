<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ZoomInvitationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $meeting;
    public $formattedStartDate;
    public $userName;

    public function __construct($meeting,$formattedStartDate,$userName)
    {
        $this->meeting = $meeting;
        $this->formattedStartDate = $formattedStartDate;
        $this->userName = $userName;
    }

    public function build()
    {
        return $this->subject('You are invited to a Zoom meeting')
                    ->view('Mails.zoom_invitation')
                    ->with([
                        'meeting' => $this->meeting,
                        'formattedStartDate' => $this->formattedStartDate,
                        'userName'=>$this->userName
                    ]);
    }
}
