<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoritevTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storitev', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->string('opis');
            $table->date('datum_vpisa');
            $table->date('datum_spremembe');
            $table->timestamps();

            //foreign keys
            $table->integer('fk_user_id')->unsigned();
            $table->integer('fk_kategorija_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storitev');
    }
}
