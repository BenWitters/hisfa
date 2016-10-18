<?php

namespace App\Notifications;
use App\Waste;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class WasteFull extends Notification
{
    use Queueable;
    protected $waste;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Waste $waste)
    {
        $this->waste = $waste;
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
            ->line('Waste silo ' . $this->waste->waste_silo_number . ' is voor ' . $this->waste->waste_full_percentage . '% vol.')
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
