<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        "client_name",
        "client_role",
        "organization",
        "organization_logo",
        "client_photo",
        "quote",
        "service",
        "industry",
        "is_featured",
        "is_published",
        "sort_order",
    ];
    protected $casts = [
        "is_featured" => "boolean",
        "is_published" => "boolean",
        "sort_order" => "integer",
    ];
    /** * Scope to published testimonials. */ public function scopePublished(
        $query
    ) {
        return $query->where("is_published", true);
    }
    /** * Scope to featured testimonials. */ public function scopeFeatured(
        $query
    ) {
        return $query->where("is_featured", true);
    }
}

