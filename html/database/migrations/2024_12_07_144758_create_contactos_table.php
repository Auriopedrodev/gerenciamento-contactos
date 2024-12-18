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
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->string('contacto', 9)->unique();
            $table->string('email')->unique();
            $table->softDeletes(); // Remoção
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
