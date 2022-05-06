<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraw_coins', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('withdraw_method');
            $table->string('bank_name')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('account_no')->nullable();
            $table->string('account_holder_name')->nullable();
            $table->string('upi_number')->nullable();
            $table->string('pay_number')->nullable();
            $table->double('amount');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdraw_coins');
    }
}
