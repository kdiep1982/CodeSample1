<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cast_media', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->integer('media_id')->unsigned()->nullable();


            $table->integer('cast_id')->unsigned()->nullable();


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
        //
        Schema::dropIfExists('cast_media');
    }
}
