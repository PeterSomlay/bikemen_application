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
        Schema::create('today', function (Blueprint $table) {
            $table->id("TodayID");
            $table->date("TodayDate");
            $table->string("TodayComment");
            $table->bigInteger("TodayWork");
            $table->bigInteger("TodayParts");
            $table->bigInteger("TodayPartsPrice");
            $table->integer("TodayPartsPiece");
            $table->bigInteger("TodayAllPrice");
            $table->enum("TodayCard",["Y","N"])->default("N");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('today');
    }
};
