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
        Schema::create('solutions', function (Blueprint $table) {
             $table->id();

            // Basic information
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('subtitle')->nullable();

            // Page content
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();

            // Solution content
            $table->json('features')->nullable();
            $table->json('benefits')->nullable();
            $table->json('faqs')->nullable();

            // Visual identity
            $table->string('icon')->nullable();
            $table->string('hero_image')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Publishing / ordering
            $table->boolean('is_published')->default(true);
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solutions');
    }
};
