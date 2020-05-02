<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msartist', function (Blueprint $table) {
            $table->bigIncrements('artist_id');
            $table->string('artist_name');
            $table->string('artist_email');
            $table->string('artist_password');
            $table->string('artist_phoneNumber');
            $table->string('artist_instagram');
            $table->string('artist_webiste');
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
        Schema::dropIfExists('msartist');
    }
}