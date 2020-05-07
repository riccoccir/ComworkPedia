<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderHireTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headerhiretransaction', function (Blueprint $table) {
            $table->bigIncrements('hire_id');
            $table->foreign('client_id')->references('id')->on('msclient');
            $table->references('payment_id')->references('payment_id')->on('mspayment');
            $table->string('image_from_client');
            $table->string('image_from_artist');
            $table->string('transaction_status');
            $table->integer('payment_amount');
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
        Schema::dropIfExists('headerhiretransaction');
    }
}
