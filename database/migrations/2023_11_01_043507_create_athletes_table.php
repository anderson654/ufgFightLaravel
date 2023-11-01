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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('victories');
            $table->integer('draws');
            $table->integer('losses');
            $table->integer('age');
            $table->decimal('weight', 8, 2);
            $table->decimal('height', 8, 2);
            $table->date('octagon_debut');
            $table->decimal('reach', 8, 2);
            $table->decimal('leg_reach', 8, 2);
            $table->string('impressive_stat')->nullable();
            $table->string('accuracy')->nullable();
            $table->integer('attempts')->nullable();
            $table->decimal('connected_per_min', 8, 2)->nullable();
            $table->decimal('absorbed_per_min', 8, 2)->nullable();
            $table->string('grappling_accuracy')->nullable();
            $table->decimal('average_takedowns', 8, 2)->nullable();
            $table->decimal('takedown_defense', 8, 2)->nullable();
            $table->decimal('average_submissions', 8, 2)->nullable();
            $table->string('ufc_records')->nullable();
            $table->string('win_streak')->nullable();
            $table->integer('wins_by_ko')->nullable();
            $table->integer('wins_by_sub')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('atletas');
    }

};
