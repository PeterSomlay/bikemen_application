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
        Schema::create('reminder', function (Blueprint $table) {
            $table->id("ReminderID");
            $table->date("ReminderDate");
            $table->string("ReminderComment");
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
        Schema::dropIfExists('reminder');
    }
};
