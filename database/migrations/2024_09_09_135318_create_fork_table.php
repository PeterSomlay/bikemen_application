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
        Schema::create('fork', function (Blueprint $table) {
            $table->id("ForkID");
            $table->foreignId("BrandID");
            $table->foreign("BrandID")->references("BrandID")->on("brands");
            $table->string("ForkName");
            $table->foreignId("ColorID");
            $table->foreign("ColorID")->references("ColorID")->on("colors");
            $table->string("ForkNumber")->nullable();
            $table->integer("ForkPositivePressure")->nullable();
            $table->integer("ForkNegativePressure")->nullable();
            $table->integer("ForkExtraPressure")->nullable();
            $table->integer("ForkLowSpeedCompression")->nullable();
            $table->integer("ForkHighSpeedCompression")->nullable();
            $table->integer("ForkLowSpeedRebound")->nullable();
            $table->integer("ForkHighSpeedRebound")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fork');
    }
};
