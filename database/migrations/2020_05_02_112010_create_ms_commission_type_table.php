<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsCommissionTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mscommissiontype', function (Blueprint $table) {
            $table->bigIncrements('commission_type_id');
            $table->string('commission_type_name');
            $table->string('commission_type_description');
            $table->timestamps();
        });

        // Schema::table('mscommissiontype',function($table){
        //     $table->primary('commission_type_id');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mscommissiontype');
    }
}
