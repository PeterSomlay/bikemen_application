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
        Schema::create('repair', function (Blueprint $table) {
            $table->id("RepairID");
            $table->foreignId("MechanicID");
            $table->foreign("MechanicID")->references("MechanicID")->on("mechanics");
            $table->bigInteger("AllParts");
            $table->bigInteger("AllWork");
            $table->bigInteger("AllPrice");
            $table->longText("RepairDocument");
            $table->date("FinishDate");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repair');
    }
};
