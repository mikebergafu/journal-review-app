<?php

namespace App\Notifications;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SubscribeUser extends Notification
{
    use Queueable;
    protected $contact;

    /**
     * Create a new notification instance.
     *
     * @param  Contact  $contact
     */
    public function __construct(Contact $contact)
    {
       $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $contact = $this->contact;

        $data = array(
            'name'=>$contact->name,
            'email'=>$contact->email,
            'message'=>$contact->message,
            'subject'=>$contact->subject
        );
        return (new MailMessage)
            ->subject('PPSG Newsletter Subscription')
            ->view('mails.subscription-email', compact('contact'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return $this->contact->toArray();
    }
}
