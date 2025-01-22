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
            $table->string('allergy')->nullable();
            $table->string('current_medication')->nullable();
            $table->string('past_medical_history')->nullable();
            $table->string('vaccine_received')->nullable();
            $table->string('physical_limitation')->nullable();
            $table->string('recent_illness')->nullable();
            $table->string('family_medication_history')->nullable();
            $table->string('special_medical_need')->nullable();
            $table->string('remark')->nullable();
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
