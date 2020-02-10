<?php

namespace App\Http\Controllers\Researcher;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Mail\MailQueue;
use Illuminate\Contracts\Queue\Queue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{


    public function sendSubscriptionEmail($data)
    {

        Mail::queue('mails.subscription-email', function ($m) use ($data) {
            $m->from(env('MAIL_FROM_ADDRESS'), 'PPSG Official Site');

            $m->to($data->email, $data->name)->subject('PPSG Newsletter Subscription!');
        });
    }


}
