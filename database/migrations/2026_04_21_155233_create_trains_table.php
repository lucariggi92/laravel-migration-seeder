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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('train_code', 20)->unique();
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->unsignedTinyInteger('total_carriages')->default(1);
            $table->boolean('is_on_time')->default(true);
            $table->boolean('is_cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
