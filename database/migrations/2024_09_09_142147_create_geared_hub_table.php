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
        Schema::create('geared_hub', function (Blueprint $table) {
            $table->id("GearedHubID");
            $table->foreignId("BrandID");
            $table->foreign("BrandID")->references("BrandID")->on("brands");
            $table->string("GearedHubName");
            $table->string("GearedHubNumber")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('geared_hub');
    }
};
