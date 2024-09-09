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
        Schema::create('events', function (Blueprint $table) {
            $table->id("EventsID");
            $table->foreignId("WorkerID");
            $table->foreign("WorkerID")->references("WorkerID")->on("workers");
            $table->date("EventsYear");
            $table->bigInteger("EventsMonth");
            $table->bigInteger("EventsDay");
            $table->string("EventsStatus");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
