<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGezinsTable extends Migration
{
    public function up()
    {
        Schema::create('gezins', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('code');
            $table->string('eetwens_per_gezin');
            $table->integer('aantal_volwassenen');
            $table->integer('aantal_kinderen');
            $table->integer('aantal_babys');
            $table->integer('totaal_aantal_personen');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gezins');
    }
}
