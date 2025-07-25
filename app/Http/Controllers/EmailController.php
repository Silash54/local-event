<?php

namespace App\Http\Controllers;

use App\Mail\notificationMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function NotificationMail()
    {
        Mail::to("silasdumirai9696@gmail.com")->send(new notificationMail());
        return "Success";
    }
}
