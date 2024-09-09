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
        Schema::create('wheels', function (Blueprint $table) {
            $table->id("WheelsID");
            $table->foreignId("RimBrandID");
            $table->foreign("RimBrandID")->references("BrandID")->on("brands");
            $table->string("WheelsRimName");
            $table->enum("WhichWheelsHub",["Első","Hátsó","Agyváltó","Kontra","Első Agymotor","Hátsó Agymotor"]);
            $table->foreignId("HubBrandID");
            $table->foreign("HubBrandID")->references("BrandID")->on("brands");
            $table->string("WheelsHubName");
            $table->string("WheelsHubNumber")->nullable();
            $table->integer("WheelsHubK")->nullable();
            $table->float("WheelsHubKa", precision: 53)->nullable();
            $table->float("WheelsHubKb", precision: 53)->nullable();
            $table->float("WheelsHubD1", precision: 53)->nullable();
            $table->float("WheelsHubD2", precision: 53)->nullable();
            $table->float("WheelsRimERD", precision: 53)->nullable();
            $table->integer("WheelsRimSpokeNum1")->nullable();
            $table->integer("WheelsRimSpokeNum2")->nullable();
            $table->integer("WheelsRimSpokeCross1")->nullable();
            $table->integer("WheelsRimSpokeCross2")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wheels');
    }
};
