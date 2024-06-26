<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGezinnenTable extends Migration
{
    public function up()
    {
        Schema::create('gezinnen', function (Blueprint $table) {
            $table->id();
            $table->char('code', 5)->unique();
            $table->string('omschrijving', 30);
            $table->integer('aantal_volwassenen');
            $table->integer('aantal_kinderen');
            $table->integer('aantal_babys');
            $table->integer('totaal_aantal_personen');
            $table->boolean('is_actief');
            $table->string('opmerking', 255)->nullable();
            $table->dateTime('datum_aangemaakt', 6);
            $table->dateTime('datum_gewijzigd', 6);
        });
    }

    public function down()
    {
        Schema::dropIfExists('gezinnen');
    }
}
