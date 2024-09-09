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
        Schema::create('year', function (Blueprint $table) {
            $table->id("YearID");
            $table->date("Year");
            $table->date("YearDate");
            $table->string("YearDay");
            $table->bigInteger("YearAll");
            $table->bigInteger("YearCard");
            $table->bigInteger("YearClearCash");
            $table->bigInteger("YearOther");
            $table->bigInteger("YearWorkprice");
            $table->bigInteger("YearWorkparts");
            $table->bigInteger("YearParts");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('year');
    }
};
