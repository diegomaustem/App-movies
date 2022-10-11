<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieTagTable extends Migration
{
    public function up()
    {
        Schema::create('movie_tag', function (Blueprint $table) {

            $table->foreignId('movie_id')->constrained();
            $table->foreignId('tag_id')->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movie_tag');
    }
}
