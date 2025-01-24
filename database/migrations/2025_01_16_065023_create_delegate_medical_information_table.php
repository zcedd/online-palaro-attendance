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
        Schema::create('delegate_medical_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delegate_id')->constrained('delegates');
            $table->string('blood_type')->nullable();
            $table->longText('allergy')->nullable();
            $table->longText('chronic_illness')->nullable();
            $table->longText('current_medication')->nullable();
            $table->longText('past_medical_history')->nullable();
            $table->longText('vaccine_received')->nullable();
            $table->longText('physical_limitation')->nullable();
            $table->longText('recent_illness')->nullable();
            $table->longText('family_medical_history')->nullable();
            $table->longText('special_medical_need')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delegate_medical_information');
    }
};
