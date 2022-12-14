<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('mubasharmunir94@gmail.com')->view('emails.useremail');

        // return $this->from('mail@example.com', 'Mailtrap')
        // ->subject('Mailtrap Confirmation')
        // ->markdown('mails.exmpl')
        // ->with([
        //     'name' => 'New Mailtrap User',
        //     'link' => '/inboxes/'
        // ]);
    }
}
