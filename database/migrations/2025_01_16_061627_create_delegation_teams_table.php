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
        Schema::create('delegation_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delegation_id')->constrained('delegations');
            $table->foreignId('user_id')->constrained('users');
            $table->string('contact_person');
            $table->string('contact_number');
            $table->string('contact_email');
            $table->string('alternative_contact_person')->nullable();
            $table->string('alternative_contact_number')->nullable();
            $table->string('alternative_contact_email')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delegation_teams');
    }
};
