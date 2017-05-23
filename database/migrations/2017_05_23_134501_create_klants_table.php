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
            $table->integer('Klantnummer');
            $table->string("Naam");
            $table->string("Voornaam");
            $table->string("Postcode");
            $table->string("Gemeente");
            $table->string("Straat");
            $table->string("Huisnummer");
            $table->integer("Telefoonnummer");
            $table->string("Email");
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
