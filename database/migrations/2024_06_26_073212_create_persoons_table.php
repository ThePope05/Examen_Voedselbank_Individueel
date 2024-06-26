<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersoonsTable extends Migration
{
    public function up()
    {
        Schema::create('persoons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gezin_id')->nullable();
            $table->string('voornaam');
            $table->string('tussenvoegsel')->nullable();
            $table->string('achternaam');
            $table->date('geboortedatum');
            $table->string('type_persoon');
            $table->boolean('is_vertegenwoordiger');
            $table->timestamps();

            $table->foreign('gezin_id')->references('id')->on('gezins');
        });
    }

    public function down()
    {
        Schema::dropIfExists('persoons');
    }
}
