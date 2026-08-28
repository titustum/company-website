<?php

namespace App\Notifications;

use App\Models\Consultation;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConsultationRequestReceived extends Notification
{
    use Queueable;

    public function __construct(public Consultation $consultation) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Consultation Request Received – South-End Tech')
            ->greeting('Hello '.$this->consultation->name.',')
            ->line('Thank you for requesting a consultation with South-End Tech.')
            ->line('Your request has been received and is pending review by our team.')
            ->line('Requested solution: '.$this->consultation->solution?->title)
            ->line('Preferred date: '.$this->consultation->preferred_date->format('l, F j, Y'))
            ->line('Preferred time: '.$this->consultation->preferred_slot)
            ->line('Reference: '.$this->consultation->reference)
            ->line('We will confirm your preferred date and time by email or phone within one business day.')
            ->line('If you need to reach us sooner, email info@southendtech.co.ke or call +254 728 223 333.');
    }
}
