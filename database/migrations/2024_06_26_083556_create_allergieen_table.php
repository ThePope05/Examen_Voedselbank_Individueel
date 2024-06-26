<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergieenTable extends Migration
{
    public function up()
    {
        Schema::create('allergieen', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 50);
            $table->text('omschrijving');
            $table->string('anafylactisch_risico', 30);
            $table->boolean('is_actief');
            $table->string('opmerking', 255)->nullable();
            $table->datetime('datum_aangemaakt');
            $table->datetime('datum_gewijzigd');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('allergieen');
    }
}
