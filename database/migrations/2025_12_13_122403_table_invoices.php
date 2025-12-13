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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('idFacture'); 
            $table->string('nameClient');
            $table->date('date_birthday');
            $table->string('Address_client');
            $table->string('phone_client');
            $table->integer('quantity');
            $table->decimal('prix',20,2);
            $table->foreignId('produits_id')
            ->constrained();
          
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('invoices');
    }
};
