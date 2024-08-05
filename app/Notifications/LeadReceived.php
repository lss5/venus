<?php

namespace App\Notifications;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LeadReceived extends Notification implements ShouldQueue
{
    use Queueable;

    public Lead $lead;

    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Заявка с сайта')
                    ->line('Имя: '.$this->lead->name)
                    ->line('Телефон: '.$this->lead->phone)
                    ->action('Открыть заявку', url(route('lead.show', $this->lead->id)));
    }

    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
