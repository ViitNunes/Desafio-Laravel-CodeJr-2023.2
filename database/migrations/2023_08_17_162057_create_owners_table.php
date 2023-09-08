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
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // ID do usuario (relaçao)
            $table->string('name'); //Nome completo do proprietário
            $table->string('profile_image')->nullable(); //Caminho da foto de perfil (opcional)
            $table->string('email')->unique(); //Email do proprietário (único)
            $table->string('cpf')->unique(); //CPF do proprietário (único)
            $table->date('birth_date'); //Data de nascimento do proprietário
            $table->string('address'); //Endereço do proprietário
            $table->string('phone'); //Número de telefone do proprietário
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
