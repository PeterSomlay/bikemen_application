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
        Schema::create('discbrake', function (Blueprint $table) {
            $table->id("DiscBrakeID");
            $table->foreignId("BrandID");
            $table->foreign("BrandID")->references("BrandID")->on("brands");
            $table->string("DiscBrakeName");
            $table->string("DiscBrakeOil")->nullable();
            $table->string("DiscBrakeNumber")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discbrake');
    }
};
