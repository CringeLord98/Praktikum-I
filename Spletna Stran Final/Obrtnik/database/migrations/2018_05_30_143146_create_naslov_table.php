<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNaslovTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naslov', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kraj');
            $table->integer('postna_st');
            $table->string('ulica');
            $table->integer('hisna_st');
            $table->timestamps();

            //foreign keys
            $table->integer('fk_user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('naslov');
    }
}
