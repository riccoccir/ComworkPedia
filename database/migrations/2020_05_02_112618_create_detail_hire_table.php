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
            // $table->bigIncrements('id');
            $table->unsignedBigInteger('hire_id');
            $table->unsignedBigInteger('commission_id');
            $table->timestamps();
        });

        Schema::table('detailhire',function($table){
            $table->primary(['hire_id','commission_id']);
            $table->foreign('commission_id')->references('commission_id')->on('trcommission')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('hire_id')->references('hire_id')->on('headerhiretransaction')->onDelete('cascade')->onUpdate('cascade');
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
