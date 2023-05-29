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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->tinyText('first_name_ar');
            $table->tinyText('first_name_fr');
            $table->tinyText('last_name_ar');
            $table->tinyText('last_name_fr');
            $table->string('cin',8)->nullable();
            $table->tinyText('email')->nullable();
            $table->tinyText('img');
            $table->string('telephone1')->nullable();
            $table->string('telephone2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
