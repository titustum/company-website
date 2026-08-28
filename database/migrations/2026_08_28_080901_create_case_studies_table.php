<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();

            // Basic information
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('subtitle')->nullable();

            // Client information
            $table->string('client_name');
            $table->string('client_logo')->nullable();
            $table->string('industry')->nullable();

            // Classification
            $table->string('category')->nullable();
            $table->string('service')->nullable();

            // Main content
            $table->text('short_description');
            $table->longText('description')->nullable();

            // Case study sections
            $table->longText('challenge')->nullable();
            $table->longText('approach')->nullable();
            $table->longText('solution')->nullable();
            $table->longText('implementation')->nullable();
            $table->longText('outcome')->nullable();

            // Repeatable structured content
            $table->json('objectives')->nullable();
            $table->json('key_challenges')->nullable();
            $table->json('services')->nullable();
            $table->json('technologies')->nullable();
            $table->json('results')->nullable();
            $table->json('highlights')->nullable();

            // Client quote
            $table->text('testimonial')->nullable();
            $table->string('testimonial_author')->nullable();
            $table->string('testimonial_role')->nullable();

            // Media
            $table->string('hero_image')->nullable();
            $table->json('images')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Publishing / ordering
            $table->boolean('is_published')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamp('published_at')->nullable();

            $table->timestamps();

            $table->index(['is_published', 'sort_order']);
            $table->index('industry');
            $table->index('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
