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
            $table->foreign('commission_type_id')->references('commission_type_id')->on('mscommissiontype');
            $table->foreign('artist_id')->references('id')->on('msartist');
            $table->string('commission_name');
            $table->string('commission_description');
            $table->integer('slot_available');
            $table->integer('commission_price');
            $table->date('commission_duration');
            $table->string('commission_image');
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
        Schema::dropIfExists('trcommission');
    }
}
