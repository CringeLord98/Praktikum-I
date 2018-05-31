<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNarociloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('narocilo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('okvirna_cena');
            $table->date('datum_narocila');
            $table->string('komentar');
            $table->string('telefon');
            $table->date('datum_zacetka');
            $table->date('datum_konca');
            $table->timestamps();

            //foreign keys
            $table->integer('fk_stanje_narocila_id')->unsigned();
            $table->integer('fk_storitev_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('narocilo');
    }
}
