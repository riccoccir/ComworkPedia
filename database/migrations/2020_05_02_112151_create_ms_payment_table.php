<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mspayment', function (Blueprint $table) {
            $table->bigIncrements('payment_id');
            $table->string('payment_type_name');
            $table->timestamps();
        });

        // Schema::table('mspayment',function($table){
        //     $table->primary('payment_id');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mspayment');
    }
}
