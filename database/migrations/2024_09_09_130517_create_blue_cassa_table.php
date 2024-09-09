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
        Schema::create('blue_cassa', function (Blueprint $table) {
            $table->id("BlueCassaID");
            $table->date("BlueCassaDate");
            $table->string("BlueCassaComment");
            $table->bigInteger("BlueCassaPrice");
            $table->string("BlueCassaExpRev");
            $table->bigInteger("BlueCassaIn");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blue_cassa');
    }
};
