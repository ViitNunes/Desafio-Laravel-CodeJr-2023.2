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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //nome
            $table->string('species'); //espécie
            $table->string('breed'); //raça 
            $table->date('birth_date'); //data de nascimento
            $table->foreignId('owner_id')->constrained('owners'); //ID do proprietário (relação)
            $table->string('treatments_done'); //tratamentos realizados
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
