<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('straat');
            $table->integer('huisnummer');
            $table->string('toevoeging')->nullable();
            $table->string('postcode');
            $table->string('woonplaats');
            $table->string('email');
            $table->string('mobiel');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
