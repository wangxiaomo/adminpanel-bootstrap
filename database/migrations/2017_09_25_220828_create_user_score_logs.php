<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserScoreLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_score_logs', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('uid')->unsigned();
            $table->string('event', 50);
            $table->integer('step');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_score_logs');
    }
}
