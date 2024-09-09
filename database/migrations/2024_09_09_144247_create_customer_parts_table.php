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
        Schema::create('customer_parts', function (Blueprint $table) {
            $table->id("CustomerPartsID");
            $table->foreignId("CustomerID");
            $table->foreign("CustomerID")->references("CustomerID")->on("customers");
            $table->foreignId("FrameID");
            $table->foreign("FrameID")->references("FrameID")->on("frame");
            $table->foreignId("ForkID");
            $table->foreign("ForkID")->references("ForkID")->on("fork");
            $table->foreignId("RearShockID");
            $table->foreign("RearShockID")->references("RearShockID")->on("rear_shock");
            $table->foreignId("DropperPostID");
            $table->foreign("DropperPostID")->references("DropperPostID")->on("dropperpost");
            $table->foreignId("WheelsID");
            $table->foreign("WheelsID")->references("WheelsID")->on("wheels");
            $table->foreignId("BicycleID");
            $table->foreign("BicycleID")->references("BicycleID")->on("bicycle");
            $table->foreignId("DiscBrakeID");
            $table->foreign("DiscBrakeID")->references("DiscBrakeID")->on("discbrake");
            $table->foreignId("EmotorID");
            $table->foreign("EmotorID")->references("EmotorID")->on("emotor");
            $table->foreignId("EshifterID");
            $table->foreign("EshifterID")->references("EshifterID")->on("eshifter");
            $table->foreignId("ScooterID");
            $table->foreign("ScooterID")->references("ScooterID")->on("scooter");
            $table->foreignId("GearedHubID");
            $table->foreign("GearedHubID")->references("GearedHubID")->on("geared_hub");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_parts');
    }
};
