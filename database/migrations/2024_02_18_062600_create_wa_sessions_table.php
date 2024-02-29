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
        Schema::create('session', function (Blueprint $table) {
            $table->id('pkId'); // Auto-incrementing primary key
            $table->string('sessionId', 128); // Session ID
            $table->string('id', 255); // ID
            $table->text('data'); // Data

            // Unique constraint for sessionId and id
            $table->unique(['sessionId', 'id'], 'unique_id_per_session_id');

            // Index for sessionId
            $table->index('sessionId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session');
    }
};
