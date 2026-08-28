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
        Schema::create('webinar_registrations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('webinar_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('organization')->nullable();
            $table->string('job_title')->nullable();

            $table->text('message')->nullable();

            $table->timestamp('registered_at')->nullable();
            $table->timestamp('attended_at')->nullable();

            $table->boolean('reminder_sent')->default(false);
            $table->boolean('is_confirmed')->default(true);

            $table->timestamps();

            $table->unique(['webinar_id', 'email']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webinar_registrations');
    }
};
