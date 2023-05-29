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
        Schema::create('inscription_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inscription_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->foreignId('service_sessions_id')->constrained('service_sessions');
            $table->float('amount');
            $table->string('remise_id');
            $table->string('value_remise');
            $table->string('pay');
            $table->string('duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription_services');
    }
};
