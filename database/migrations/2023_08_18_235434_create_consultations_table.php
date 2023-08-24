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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // ID do usuario 
            $table->foreignId('pet_id')->constrained('pets'); //ID do Animal
            $table->dateTime('start_time'); // Data e hora de início
            $table->dateTime('end_time'); // Data e hora de término
            $table->float('cost'); // Custo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
