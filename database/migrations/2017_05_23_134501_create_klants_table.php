<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('klantnummer');
            $table->string("naam");
            $table->string("voornaam");
            $table->string("postcode");
            $table->string("gemeente");
            $table->string("straat");
            $table->string("huisnummer");
            $table->integer("telefoonnummer");
            $table->string("email");
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
        Schema::dropIfExists('klants');
    }
}
