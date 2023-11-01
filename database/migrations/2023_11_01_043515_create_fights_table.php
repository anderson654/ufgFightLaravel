<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('fights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained('events');
            $table->string('title');
            $table->foreignId('main_athletes_id')->constrained('athletes');
            $table->foreignId('secondary_athletes_id')->constrained('athletes');
            $table->foreignId('result_type_id')->constrained('fight_result_types');
            $table->foreignId('winner_id')->constrained('athletes');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fights');
    }
};
