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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image_url'); // coluna para armazenar o link da imagem
            $table->string('imageable_type'); // para armazenar o tipo do objeto que a imagem está relacionada (evento, luta, lutador)
            $table->unsignedBigInteger('imageable_id'); // ID do objeto relacionado
            $table->timestamps();
            
            $table->index(['imageable_type', 'imageable_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image');
    }
};
