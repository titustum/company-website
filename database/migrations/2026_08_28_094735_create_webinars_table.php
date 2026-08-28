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
        Schema::create('webinars', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();

            $table->string('title');

            $table->string('subtitle')->nullable();

            $table->text('short_description')->nullable();

            $table->longText('description')->nullable();

            // Webinar scheduling
            $table->dateTime('starts_at');
            $table->dateTime('ends_at')->nullable();

            $table->string('timezone')->default('Africa/Nairobi');

            // Webinar access
            $table->string('registration_url')->nullable();
            $table->string('join_url')->nullable();

            // Optional meeting/platform information
            $table->string('platform')->nullable();
            $table->string('meeting_id')->nullable();

            // Presenter information
            $table->string('speaker_name')->nullable();
            $table->string('speaker_role')->nullable();
            $table->string('speaker_photo')->nullable();

            // Visual
            $table->string('image')->nullable();

            // Additional webinar information
            $table->json('topics')->nullable();
            $table->json('faqs')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Publishing/status
            $table->boolean('is_published')->default(false);
            $table->boolean('is_featured')->default(false);

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();

            $table->index('starts_at');
            $table->index('is_published');
            $table->index('is_featured');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinars');
    }
};
