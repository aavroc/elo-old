<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Password;

class EigenResetWachtwoord extends Notification
{
    use Queueable;

    protected $token;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)->view(
            'auth.emails.resetwachtwoord', ['token' => $this->token]
        );
        
        // return (new MailMessage)
        //             ->greeting('Hallo ', $notifiable->firstname)
        //             ->line('Je wilt je wachtwoord dus resetten. Dat kan...')
        //             ->action('Reset Wachtwoord', url('/password/reset/'.$this->token ))
        //             ->line('Deze link zal verlopen over 60 minuten')
        //             ->line('Als je geen wachtwoord reset hebt aangevraagd dan hoef je niks te doen');
                    
        
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
