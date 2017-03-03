<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Missatge extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missatge', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('login_id')->unsigned();
            $table->string('text');
            $table->timestamps();
        });

        Schema::table('missatge', function(Blueprint $table) {
            $table->foreign('login_id')->references('id')->on('login');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missatge');
    }
}
