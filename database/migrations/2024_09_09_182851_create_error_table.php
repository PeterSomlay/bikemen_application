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
        Schema::create('error', function (Blueprint $table) {
            $table->id("ErrorID");
            $table->date("ErrorDate");
            $table->string("ErrorText");
            $table->foreignId("WorkerID");
            $table->foreign("WorkerID")->references("WorkerID")->on("workers");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('error');
    }
};
