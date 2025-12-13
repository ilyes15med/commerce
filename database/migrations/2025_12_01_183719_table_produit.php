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
        Schema::create('produits', function (Blueprint $table) {
            $table->id(); 
            $table->string('nameProduit');
            $table->decimal('price', 10, 2); // meilleur pour un prix
            $table->longText('description');
            $table->string('category');
            $table->integer('number');
            $table->string('image');
            $table->boolean('disponible')->default(true);

          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
