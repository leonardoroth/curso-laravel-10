<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('Email')->nullable(); // não são obrigatórios
            $table->string('Endereço')->nullable();
            $table->string('Logradouro')->nullable();
            $table->string('CEP')->nullable();
            $table->string('Bairro')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
