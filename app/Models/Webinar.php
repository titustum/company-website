<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Webinar extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'subtitle',
        'short_description',
        'description',

        'starts_at',
        'ends_at',
        'timezone',

        'registration_url',
        'join_url',

        'platform',
        'meeting_id',

        'speaker_name',
        'speaker_role',
        'speaker_photo',

        'image',

        'topics',
        'faqs',

        'meta_title',
        'meta_description',

        'is_published',
        'is_featured',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',

            'topics' => 'array',
            'faqs' => 'array',

            'is_published' => 'boolean',
            'is_featured' => 'boolean',

            'sort_order' => 'integer',
        ];
    }

    /**
     * Automatically generate a slug when one isn't supplied.
     */
    protected static function booted(): void
    {
        static::creating(function (Webinar $webinar) {
            if (empty($webinar->slug)) {
                $webinar->slug = Str::slug($webinar->title);
            }
        });
    }

    /**
     * Scope to published webinars.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope to featured webinars.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Upcoming webinars.
     */
    public function scopeUpcoming($query)
    {
        return $query
            ->where('starts_at', '>=', now())
            ->orderBy('starts_at');
    }

    /**
     * Past webinars.
     */
    public function scopePast($query)
    {
        return $query
            ->where('starts_at', '<', now())
            ->orderByDesc('starts_at');
    }

    /**
     * Determine whether the webinar is upcoming.
     */
    public function getIsUpcomingAttribute(): bool
    {
        return $this->starts_at?->isFuture() ?? false;
    }

    /**
     * Determine whether the webinar has already started/ended.
     */
    public function getIsPastAttribute(): bool
    {
        return $this->starts_at?->isPast() ?? false;
    }


    public function registrations(): HasMany
    {
        return $this->hasMany(WebinarRegistration::class);
    }


    /**
     * Determine whether the webinar is currently live.
     */
    public function getIsLiveAttribute(): bool
    {
        if (!$this->starts_at) {
            return false;
        }

        if (!$this->ends_at) {
            return $this->starts_at->isPast();
        }

        return now()->between($this->starts_at, $this->ends_at);
    }
}
