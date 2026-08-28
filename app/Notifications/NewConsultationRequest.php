<?php

namespace App\Notifications;

use App\Models\Consultation;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewConsultationRequest extends Notification
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
            ->subject('New Consultation Request – '.$this->consultation->reference)
            ->line('A new consultation request has been submitted.')
            ->line('Name: '.$this->consultation->name)
            ->line('Company: '.($this->consultation->company ?: '—'))
            ->line('Email: '.$this->consultation->email)
            ->line('Phone: '.$this->consultation->phone)
            ->line('Solution: '.$this->consultation->solution?->title)
            ->line('Preferred date: '.$this->consultation->preferred_date->format('l, F j, Y'))
            ->line('Preferred slot: '.$this->consultation->preferred_slot)
            ->line('Notes: '.($this->consultation->notes ?: '—'))
            ->line('Reference: '.$this->consultation->reference)
            ->action('Review request', url('/admin'))
            ->line('Confirm or reschedule within one business day.');
    }
}
