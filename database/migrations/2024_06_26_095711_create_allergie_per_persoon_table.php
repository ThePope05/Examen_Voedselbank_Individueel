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
            $table->unsignedBigInteger('persoon_id');
            $table->unsignedBigInteger('allergie_id');
            $table->boolean('is_actief')->default(true);
            $table->string('opmerking', 255)->nullable();
            $table->dateTime('datum_aangemaakt', 6)->default(now());
            $table->dateTime('datum_gewijzigd', 6)->default(now());

            // Foreign keys
            $table->foreign('persoon_id')->references('id')->on('personen');
            $table->foreign('allergie_id')->references('id')->on('allergie');

            // Indexen
            $table->index('persoon_id');
            $table->index('allergie_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('allergie_per_persoon');
    }
}
