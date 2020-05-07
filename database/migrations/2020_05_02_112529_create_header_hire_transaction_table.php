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
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('payment_id');
            $table->string('image_from_client');
            $table->string('image_from_artist');
            $table->string('transaction_status');
            $table->integer('payment_amount');
            $table->mediumText('transfer_receipt')->nullable();
            $table->timestamps();
            
        });

        Schema::table('headerhiretransaction',function($table){
            $table->foreign('payment_id')->references('payment_id')->on('mspayment')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('msclient')->onDelete('cascade')->onUpdate('cascade');
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
