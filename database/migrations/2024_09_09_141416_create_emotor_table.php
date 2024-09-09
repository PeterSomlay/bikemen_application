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
        Schema::create('emotor', function (Blueprint $table) {
            $table->id("EmotorID");
            $table->foreignId("BrandID");
            $table->foreign("BrandID")->references("BrandID")->on("brands");
            $table->string("EmotorName");
            $table->string("EmotorNumber")->nullable();
            $table->string("EmotorDisplay")->nullable();
            $table->string("EmotorAssist")->nullable();
            $table->string("EmotorBattery")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emotor');
    }
};
