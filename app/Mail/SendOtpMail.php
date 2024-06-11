<?php

// app/Mail/SendOtpMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    // Property to store the OTP
    public $otp;

    // Constructor to initialize the OTP
    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    // Build method to define the email's content
    public function build()
    {
        // Specify the view to use and pass the OTP to the view
        return $this->view('send-otp')->with('otp', $this->otp);
    }
}
