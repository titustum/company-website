<?php

namespace App\Models;

use App\Enums\ConsultationStatus;
use Database\Factories\ConsultationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Consultation extends Model
{
    /** @use HasFactory<ConsultationFactory> */
    use HasFactory;

    use Notifiable, SoftDeletes;

    protected $fillable = [
        'solution_id',
        'name',
        'email',
        'phone',
        'company',
        'preferred_date',
        'preferred_slot',
        'notes',
        'status',
        'reference',
    ];

    protected function casts(): array
    {
        return [
            'preferred_date' => 'date',
            'status' => ConsultationStatus::class,
        ];
    }

    public function solution(): BelongsTo
    {
        return $this->belongsTo(Solution::class);
    }

    protected static function booted(): void
    {
        static::created(function (Consultation $consultation) {
            if ($consultation->reference === null) {
                $consultation->reference = 'CST-'.now()->year.'-'.str_pad((string) $consultation->id, 4, '0', STR_PAD_LEFT);
                $consultation->saveQuietly();
            }
        });
    }
}
