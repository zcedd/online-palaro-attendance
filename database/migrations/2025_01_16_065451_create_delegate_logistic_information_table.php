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
        Schema::create('delegate_logistic_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delegate_id')->constrained('delegates');
            $table->foreignId('venue_id')->nullable()->constrained('venues');
            $table->string('meal_preference')->nullable();
            $table->string('special_request')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delegate_logistic_information');
    }
};
