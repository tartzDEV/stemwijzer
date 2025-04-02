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
        Schema::create('standpunten', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partij_id')->constrained('partijen')->onDelete('cascade');
            $table->foreignId('vraag_id')->constrained('vragen')->onDelete('cascade');
            $table->enum('positie', ['pro', 'contra', 'neutraal']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('standpunten');
    }
};
