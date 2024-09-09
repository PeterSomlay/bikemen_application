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
        Schema::create('eshifter', function (Blueprint $table) {
            $table->id("EshifterID");
            $table->foreignId("BrandID");
            $table->foreign("BrandID")->references("BrandID")->on("brands");
            $table->string("EshifterBattery")->nullable();
            $table->string("EshifterRD")->nullable();
            $table->string("EshifterFD")->nullable();
            $table->string("EshifterST")->nullable();
            $table->string("EshifterS1")->nullable();
            $table->string("EshifterS2")->nullable();
            $table->string("EshifterWire1")->nullable();
            $table->string("EshifterWire2")->nullable();
            $table->string("EshifterWire3")->nullable();
            $table->string("EshifterWire4")->nullable();
            $table->string("EshifterWire5")->nullable();
            $table->string("EshifterWire6")->nullable();
            $table->string("EshifterWireless")->nullable();
            $table->string("EshifterJunction1")->nullable();
            $table->string("EshifterJunction2")->nullable();
            $table->string("PowerMeter")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eshifter');
    }
};
