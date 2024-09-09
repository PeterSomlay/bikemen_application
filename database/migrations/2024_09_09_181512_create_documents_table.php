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
        Schema::create('documents', function (Blueprint $table) {
            $table->id("DocumentsID");
            $table->date("DocumentsDate");
            $table->foreignId("WorksheetID");
            $table->foreign("WorksheetID")->references("WorksheetID")->on("worksheet");
            $table->foreignId("CustomerPartsID");
            $table->foreign("CustomerPartsID")->references("CustomerPartsID")->on("customer_parts");
            $table->longText("Documents");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
