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
        Schema::create('delegate_sport_event', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delegate_id')->constrained('delegates');
            $table->foreignId('sport_event_id')->constrained('sport_events');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delegate_sport_event');
    }
};
