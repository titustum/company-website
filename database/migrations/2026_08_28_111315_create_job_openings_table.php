<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('job_openings', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('department');
            $table->string('employment_type')->default('Full-time');
            $table->string('location')->nullable();

            $table->string('work_arrangement')->nullable();
            // Hybrid, Remote, On-site

            $table->text('summary')->nullable();

            $table->longText('description')->nullable();

            $table->json('responsibilities')->nullable();
            $table->json('requirements')->nullable();
            $table->json('qualifications')->nullable();
            $table->json('benefits')->nullable();

            $table->string('application_email')->nullable();
            $table->string('application_url')->nullable();

            $table->date('application_deadline')->nullable();

            $table->boolean('is_published')->default(true);
            $table->boolean('is_featured')->default(false);

            $table->unsignedInteger('sort_order')->default(0);

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->timestamps();

            $table->index(['department', 'is_published']);
            $table->index(['is_published', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('job_openings');
    }
};
