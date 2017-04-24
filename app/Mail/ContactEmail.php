<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $company;
    public $email;
    public $subjects;
    public $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$company, $email,$subjects,$subject )
    {
            $this->name = $name;
            $this->company = $company;
            $this->email = $email;
            $this->subjects = $subjects;
            $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('email.contactTemplate');
    }
}
