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
            $table->string('ime',45);
            $table->string('priimek',45);
            $table->integer('okvirna_cena')->nullable(true);
            //$table->date('datum_narocila');
            $table->string('komentar',5000)->nullable(true);
            $table->string('telefon',45);
            $table->string('email',320);
            $table->date('datum_zacetka');
            $table->date('datum_konca');
            $table->timestamps();
       

            //foreign keys
            $table->integer('stanje_narocila_id')->unsigned();
            $table->integer('storitev_id')->unsigned();
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
