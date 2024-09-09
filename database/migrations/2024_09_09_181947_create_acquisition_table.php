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
        Schema::create('acquisition', function (Blueprint $table) {
            $table->id("AcquisitionID");
            $table->date("AcquisitionDate");
            $table->string("AcquisitionComment");
            $table->string("AcquisitionParts");
            $table->integer("AcquisitionPiece");
            $table->string("AcquisitionUsername");
            $table->string("AcquisitionMobil");
            $table->foreignId("WholesaleID");
            $table->foreign("WholesaleID")->references("WholesaleID")->on("Wholesales");
            $table->foreignId("WorkerID");
            $table->foreign("WorkerID")->references("WorkerID")->on("Workers");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acquisition');
    }
};
