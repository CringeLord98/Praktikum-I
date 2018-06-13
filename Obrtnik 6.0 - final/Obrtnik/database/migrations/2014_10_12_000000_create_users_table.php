<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id',45);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('surname');
            $table->string('telefon');
            $table->string('davcna',45);
            $table->string('slika')->nullable(true);
            $table->integer('regija_id')->unsigned();
            $table->string('opis',5000)->nullable(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
