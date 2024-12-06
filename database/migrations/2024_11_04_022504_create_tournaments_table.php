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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_name', 255);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('game_mode', 50);
            $table->string('status', 50);
            $table->integer('prize_pool')->default(0);
            $table->timestamps();

            $table->foreignId('operator_id')->constrained()->onDelete('cascade');
            $table->foreignId('map_id')->constrained()->onDelete('cascade');

            // $table->foreign('operator_id')->references('id')->on('operators')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
