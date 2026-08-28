<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'subtitle',
        'short_description',
        'description',
        'challenges',
        'solutions',
        'benefits',
        'faqs',
        'icon',
        'hero_image',
        'meta_title',
        'meta_description',
        'is_published',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'challenges' => 'array',
            'solutions' => 'array',
            'benefits' => 'array',
            'faqs' => 'array',
            'is_published' => 'boolean',
        ];
    }
}
