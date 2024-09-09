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
        Schema::create('warranty', function (Blueprint $table) {
            $table->id("WarrantyID");
            $table->foreignId("WorkerID");
            $table->foreign("WorkerID")->references("WorkerID")->on("workers");
            $table->string("WarrantyParts");
            $table->foreignId("CustomerID");
            $table->foreign("CustomerID")->references("CustomerID")->on("customers");
            $table->foreignId("MechanicID");
            $table->foreign("MechanicID")->references("MechanicID")->on("mechanics");
            $table->foreignId("WholesaleID");
            $table->foreign("WholesaleID")->references("WholesaleID")->on("wholesales");
            $table->string("WarrantyReport");
            $table->date("WarrantyShoppingDate");
            $table->string("WarrantyComment");
            $table->date("BringDate");
            $table->date("PromiseDate");
            $table->enum("WorkStatus",[1,2,3,4,5,6,7,8,9,10,11,12,13,14]);
            $table->enum("CallStatus",[1,2,3,4,5,6]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warranty');
    }
};
