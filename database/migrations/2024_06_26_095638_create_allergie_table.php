<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergieTable extends Migration
{
    public function up()
    {
        Schema::create('allergie', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 50);
            $table->text('omschrijving');
            $table->string('anafylactisch_risico', 30);
            $table->boolean('is_actief')->default(true);
            $table->string('opmerking', 255)->nullable();
            $table->dateTime('datum_aangemaakt', 6);
            $table->dateTime('datum_gewijzigd', 6);
        });
    }

    public function down()
    {
        Schema::dropIfExists('allergie');
    }
}
