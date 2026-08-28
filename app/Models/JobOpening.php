<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class JobOpening extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'department',
        'employment_type',
        'location',
        'work_arrangement',
        'summary',
        'description',
        'responsibilities',
        'requirements',
        'qualifications',
        'benefits',
        'application_email',
        'application_url',
        'application_deadline',
        'is_published',
        'is_featured',
        'sort_order',
        'meta_title',
        'meta_description',
    ];

    protected function casts(): array
    {
        return [
            'responsibilities' => 'array',
            'requirements' => 'array',
            'qualifications' => 'array',
            'benefits' => 'array',
            'application_deadline' => 'date',
            'is_published' => 'boolean',
            'is_featured' => 'boolean',
        ];
    }
}
