<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WebinarRegistration extends Model
{
    protected $fillable = [
        'webinar_id',
        'name',
        'email',
        'phone',
        'organization',
        'job_title',
        'message',
        'registered_at',
        'attended_at',
        'reminder_sent',
        'is_confirmed',
    ];

    protected $casts = [
        'registered_at' => 'datetime',
        'attended_at' => 'datetime',
        'reminder_sent' => 'boolean',
        'is_confirmed' => 'boolean',
    ];

    public function webinar(): BelongsTo
    {
        return $this->belongsTo(Webinar::class);
    }
}
