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
        Schema::create('accountant', function (Blueprint $table) {
            $table->id("AccountantID");
            $table->date("AccountantYear");
            $table->string("AccountantPeriod");
            $table->string("AccountantMonthNumber");
            $table->bigInteger("AccountantDayNumber");
            $table->date("AccountantDate");
            $table->bigInteger("AccountantVoucherNumber");
            $table->string("AccountantName");
            $table->bigInteger("AccountantIncome");
            $table->bigInteger("AccountantExpense");
            $table->bigInteger("AccountantBalance");
            $table->bigInteger("AccountantCard");
            $table->bigInteger("AccountantAll");
            $table->bigInteger("AccountantTraffic");
            $table->bigInteger("AccountantOpenCassa");
            $table->bigInteger("AccountantClosedCassa");
            $table->string("AccountantFirm");
            $table->string("AccountantSign");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accountant');
    }
};
