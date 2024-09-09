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
        Schema::create('debit', function (Blueprint $table) {
            $table->id("DebitID");
            $table->date("DebitDate");
            $table->foreignId("CustomerID");
            $table->foreign("CustomerID")->references("CustomerID")->on("customers");
            $table->bigInteger("DebitCash");
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
        Schema::dropIfExists('debit');
    }
};
