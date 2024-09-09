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
        Schema::create('rear_shock', function (Blueprint $table) {
            $table->id("RearShockID");
            $table->foreignId("BrandID");
            $table->foreign("BrandID")->references("BrandID")->on("brands");
            $table->string("RearShockName");
            $table->string("RearShockNumber")->nullable();
            $table->integer("RearShockPositivePressure")->nullable();
            $table->integer("RearShockNegativePressure")->nullable();
            $table->integer("RearShockLowSpeedCompression")->nullable();
            $table->integer("RearShockHighSpeedCompression")->nullable();
            $table->integer("RearShockLowSpeedRebound")->nullable();
            $table->integer("RearShockHighSpeedRebound")->nullable();
            $table->integer("RearShockEyelet")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rear_shock');
    }
};
