<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('galery-name');
            $table->string('galery1');
            $table->string('galery2');
            $table->string('galery3');
            $table->string('galery4');
            $table->string('galery5');
            $table->string('galery6');
            $table->string('galery7');
            $table->string('galery8');
            $table->string('galery9');
            $table->string('galery10');
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
        Schema::dropIfExists('galery');
    }
}
