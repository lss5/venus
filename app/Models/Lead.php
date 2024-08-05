<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;

class Lead extends Model
{
    use HasFactory;
    use Notifiable;

    protected $guarded = [];

    public function routeNotificationForMail(Notification $notification): array|string
    {
        return env('MAIL_RECIPIENT_LEAD');
    }
}
