<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    public function handle(UserRegistered $event)
    {
        Mail::to($event->user->email)->send(new RegistrationMail($event->user));
    }
}
