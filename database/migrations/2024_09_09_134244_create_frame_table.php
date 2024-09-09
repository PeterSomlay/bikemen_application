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
        Schema::create('frame', function (Blueprint $table) {
            $table->id("FrameID");
            $table->foreignId("BrandID");
            $table->foreign("BrandID")->references("BrandID")->on("brands");
            $table->string("FrameName");
            $table->foreignId("ColorID");
            $table->foreign("ColorID")->references("ColorID")->on("colors");
            $table->string("FrameNumber")->nullable();
            $table->float("FrameSeatpostSize", precision: 53)->nullable();
            $table->integer("FrameBottomBracket")->nullable();
            $table->string("FrameFrontTube")->nullable();
            $table->string("FrameBearings1")->nullable();
            $table->string("FrameBearings2")->nullable();
            $table->string("FrameBearings3")->nullable();
            $table->string("FrameBearings4")->nullable();
            $table->string("FrameBearings5")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frame');
    }
};
