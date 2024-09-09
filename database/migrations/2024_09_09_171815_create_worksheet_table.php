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
        Schema::create('worksheet', function (Blueprint $table) {
            $table->id("WorksheetID");
            $table->foreignId("WorkerID");
            $table->foreign("WorkerID")->references("WorkerID")->on("workers");
            $table->foreignId("CustomerID");
            $table->foreign("CustomerID")->references("CustomerID")->on("customers");
            $table->foreignId("CustomerPartsID");
            $table->foreign("CustomerPartsID")->references("CustomerPartsID")->on("customer_parts");
            $table->string("ErrorsDescription");
            $table->foreignId("RepairID");
            $table->foreign("RepairID")->references("RepairID")->on("repair");
            $table->date("BringDate");
            $table->date("PromiseDate");
            $table->enum("WorkStatus",[1,2,3,4,5,6,7,8,9,10,11,12,13,14]);
            $table->enum("CallStatus",[1,2,3,4,5,6]);
            $table->enum("PayStatus",[1,2,3,4,5,6]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worksheet');
    }
};
