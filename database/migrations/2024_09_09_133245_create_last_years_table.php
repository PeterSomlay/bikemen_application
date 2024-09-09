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
        Schema::create('last_years', function (Blueprint $table) {
            $table->id("LastYearID");
            $table->date("Year");
            $table->bigInteger("January");
            $table->bigInteger("February");
            $table->bigInteger("March");
            $table->bigInteger("April");
            $table->bigInteger("May");
            $table->bigInteger("June");
            $table->bigInteger("July");
            $table->bigInteger("August");
            $table->bigInteger("September");
            $table->bigInteger("October");
            $table->bigInteger("November");
            $table->bigInteger("December");
            $table->bigInteger("LastYearAll");
            $table->bigInteger("LastYearAvarange");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('last_years');
    }
};
