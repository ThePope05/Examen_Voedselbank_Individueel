<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergiePerPersoonTable extends Migration
{
    public function up()
    {
        Schema::create('allergie_per_persoon', function (Blueprint $table) {
            $table->id();
            $table->integer('persoon_id');
            $table->foreign('persoon_id')->references('id')->on('personen');
            $table->integer('allergie_id');
            $table->foreign('allergie_id')->references('id')->on('allergieen');
            $table->boolean('is_actief');
            $table->string('opmerking', 255)->nullable();
            $table->datetime('datum_aangemaakt');
            $table->datetime('datum_gewijzigd');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('allergie_per_persoon');
    }
}
