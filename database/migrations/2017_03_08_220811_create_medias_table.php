<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('medias', function (Blueprint $table) {

            $table->integer('id')->unique();
            $table->string('type');
            $table->string('poster');
            $table->text('title');
            $table->text('text');
            $table->float('vote_average');
            $table->mediumInteger('vote_count');
            $table->text('description');
            $table->float('rating');
            $table->mediumInteger('number_of_reviews');
            $table->string('status');
            $table->date('release_date');
            $table->integer('number_of_episodes');
            $table->integer('number_of_seasons');
            $table->integer('runtime');
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
        Schema::dropIfExists('medias');
    }
}
