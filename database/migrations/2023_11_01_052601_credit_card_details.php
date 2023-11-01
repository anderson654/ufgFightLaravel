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
        Schema::create('credit_card_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('user_id');
            $table->string('last4CardNumber');
            $table->string('creditCardId');
            $table->unsignedSmallInteger('expirationYear');
            $table->unsignedTinyInteger('expirationMonth');
            $table->unsignedBigInteger('payment_gateway_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_gateway_id')->references('id')->on('payment_gateways');
            // Adicione mais chaves estrangeiras conforme necessário

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('credit_card_details');
    }
};
