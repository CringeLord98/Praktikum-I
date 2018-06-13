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
            $table->string('naziv',45);
            $table->string('opis',5000);
            $table->string('slika')->nullable(true);
            $table->timestamps();

            //foreign keys
            $table->integer('user_id')->unsigned();
            $table->integer('kategorija_id')->unsigned();
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
