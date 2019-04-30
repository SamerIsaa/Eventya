<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\ResetCode;
use App\User;
class VerifyResetPassword extends Mailable
{
    use Queueable, SerializesModels;
    protected $verifycode;
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ResetCode $verifycode,$user)
    {
        $this->verifycode = $verifycode;
        $this->user = $user;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        return $this->view('mails.verificationCode')->with(['user'=>$user->name , 'code'=>$this->verifycode->code]);
    }
}