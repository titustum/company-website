<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CaseStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'subtitle',

        'client_name',
        'client_logo',
        'industry',

        'category',
        'service',

        'short_description',
        'description',

        'challenge',
        'approach',
        'solution',
        'implementation',
        'outcome',

        'objectives',
        'key_challenges',
        'services',
        'technologies',
        'results',
        'highlights',

        'testimonial',
        'testimonial_author',
        'testimonial_role',

        'hero_image',
        'images',

        'meta_title',
        'meta_description',

        'is_published',
        'is_featured',
        'sort_order',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'objectives' => 'array',
            'key_challenges' => 'array',
            'services' => 'array',
            'technologies' => 'array',
            'results' => 'array',
            'highlights' => 'array',
            'images' => 'array',

            'is_published' => 'boolean',
            'is_featured' => 'boolean',

            'published_at' => 'datetime',
        ];
    }

    /**
     * Scope published case studies.
     */
    public function scopePublished($query)
    {
        return $query
            ->where('is_published', true)
            ->where(function ($query) {
                $query->whereNull('published_at')
                    ->orWhere('published_at', '<=', now());
            });
    }

    /**
     * Scope featured case studies.
     */
    public function scopeFeatured($query)
    {
        return $query
            ->where('is_featured', true)
            ->where('is_published', true);
    }

    /**
     * Get the case study URL.
     */
    public function getUrlAttribute(): string
    {
        return route('case-study.show', $this->slug);
    }
}
