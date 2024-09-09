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
        Schema::create('waiting_for_parts', function (Blueprint $table) {
            $table->id("WaitingForPartsID");
            $table->foreignId("WorksheetID");
            $table->foreign("WorksheetID")->references("WorksheetID")->on("worksheet");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waiting_for_parts');
    }
};
