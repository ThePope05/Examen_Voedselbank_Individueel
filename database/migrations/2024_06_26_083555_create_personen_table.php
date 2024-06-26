<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonenTable extends Migration
{
    public function up()
    {
        Schema::create('personen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gezin_id')->constrained('gezinnen');
            $table->string('voornaam', 50);
            $table->string('tussenvoegsel', 10)->nullable();
            $table->string('achternaam', 50);
            $table->date('geboorte_datum');
            $table->string('type_persoon', 30);
            $table->boolean('is_vertegenwoordiger');
            $table->boolean('is_actief');
            $table->string('opmerking', 255)->nullable();
            $table->dateTime('datum_aangemaakt', 6);
            $table->dateTime('datum_gewijzigd', 6);
        });
    }

    public function down()
    {
        Schema::dropIfExists('personen');
    }
}

