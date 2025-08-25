<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ingressos', function (Blueprint $table) {
            $table->id();
            $table->string('evento'); // Nome do evento
            $table->date('data_evento'); // Data do evento
            $table->string('local'); // Local do evento
            $table->decimal('preco', 8, 2); // Preço
            $table->integer('quantidade'); // Quantidade disponível
            $table->enum('tipo_ingresso', ['pista', 'vip', 'camarote'])->default('pista'); // Tipo de ingresso
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ingressos');
    }
};
