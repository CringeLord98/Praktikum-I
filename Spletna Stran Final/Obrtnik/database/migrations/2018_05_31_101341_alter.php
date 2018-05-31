<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('naslov', function (Blueprint $table) {
            
            $table->foreign('fk_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::table('narocilo', function (Blueprint $table) {
            
            $table->foreign('fk_stanje_narocila_id')
                ->references('id')
                ->on('stanje_narocila');

            $table->foreign('fk_storitev_id')
                ->references('id')
                ->on('storitev')
                ->onDelete('cascade');
        });

        Schema::table('komentar', function (Blueprint $table) {
            
            $table->foreign('fk_storitev_id')
                ->references('id')
                ->on('storitev')
                ->onDelete('cascade');
        });

        Schema::table('ocena', function (Blueprint $table) {
            
            $table->foreign('fk_storitev_id')
                ->references('id')
                ->on('storitev')
                ->onDelete('cascade');
        });

        Schema::table('storitev', function (Blueprint $table) {
            
            $table->foreign('fk_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('fk_kategorija_id')
                ->references('id')
                ->on('kategorija');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
