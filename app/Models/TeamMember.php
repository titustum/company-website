<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'role',
        'bio',
        'photo',
        'is_published',
        'sort_order',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Scope to published team members.
     */
    public function scopePublished($query)
    {
        return $query
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->orderBy('name');
    }
}
