<?php

use App\Models\Cliente;
use App\Models\Especie;
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
        Schema::create('animal', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cliente::class);
            $table->foreignIdFor(Especie::class);
            $table->string('nome', 100);
            $table->char('sexo', 1);
            $table->integer('idade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal');
    }
};
