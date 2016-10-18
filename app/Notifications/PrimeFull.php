<?php

namespace App\Notifications;

use App\Prime;
use App\Primesilo;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PrimeFull extends Notification
{
    use Queueable;
    protected $prime;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Primesilo $prime)
    {
        $this->prime = $prime;
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
        return (new MailMessage)
                    ->line('Prime silo ' . $this->prime->prime_silo_number . ' is voor ' . $this->prime->prime_full_percentage . '% vol.')
                    ->action('Ga naar het dashboard', 'https://laravel.com');
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
