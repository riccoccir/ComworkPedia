<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailHireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailhire', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('hire_id')->references('hire_id')->on('headerhiretransaction');
            $table->primary('commission_id')->foreign('commission_id')->references('commission_id')->on('trcommission');
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
        Schema::dropIfExists('detailhire');
    }
}
