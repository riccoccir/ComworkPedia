<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msclient', function (Blueprint $table) {
            $table->bigIncrements('client_id');
            $table->string('client_name');
            $table->string('client_email')->unique();
            $table->string('client_password');
            $table->string('client_phoneNumber');
            $table->rememberToken();
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
        Schema::dropIfExists('msclient');
    }
}
