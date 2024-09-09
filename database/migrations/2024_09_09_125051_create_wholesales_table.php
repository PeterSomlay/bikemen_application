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
        Schema::create('wholesales', function (Blueprint $table) {
            $table->id("WholesaleID");
            $table->string("WholesaleCompany");
            $table->string("WholesaleContact1");
            $table->string("WholesaleContact2");
            $table->string("WholesaleContact3");
            $table->string("WholesaleWebsite");
            $table->string("WholesaleUsername");
            $table->string("WholesalePassword");
            $table->string("WholesaleMobil");
            $table->string("WholesaleEmail");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wholesales');
    }
};
