<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    /** @use HasFactory<\Database\Factories\SolutionFactory> */
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'subtitle',
        'short_description',
        'description',
        'features',
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
            'features' => 'array',
            'benefits' => 'array',
            'faqs' => 'array',
            'is_published' => 'boolean',
        ];
    }
    
}
