<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('casts', function (Blueprint $table) {
            $table->integer('id')->unique();
            $table->string('department');
            $table->string('job');
            $table->text('cast_name');
            $table->text('profile');

            $table->text('cast_character');
            $table->mediumInteger('credit_id');
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
        Schema::dropIfExists('casts');
    }
}
