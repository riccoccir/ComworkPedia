<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrCommissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trcommission', function (Blueprint $table) {
            $table->bigIncrements('commission_id');
            $table->unsignedBigInteger('commission_type_id');
            $table->unsignedBigInteger('artist_id');
            $table->string('commission_name');
            $table->string('commission_description');
            $table->integer('slot_available');
            $table->integer('commission_price');
            $table->date('commission_duration');
            $table->mediumText('commission_image')->nullable();
            $table->timestamps();
            
        });

        Schema::table('trcommission',function($table){
            $table->foreign('artist_id')->references('id')->on('msartist')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('commission_type_id')->references('commission_type_id')->on('mscommissiontype')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trcommission');
    }
}
