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
        Schema::create('tools', function (Blueprint $table) {
            $table->id("ToolsID");
            $table->date("ToolsDate");
            $table->string("ToolsName");
            $table->string("ToolsWhere");
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
        Schema::dropIfExists('tools');
    }
};
