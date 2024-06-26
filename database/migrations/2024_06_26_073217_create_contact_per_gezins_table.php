<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPerGezinsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_per_gezins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gezin_id');
            $table->unsignedBigInteger('contact_id');
            $table->timestamps();

            $table->foreign('gezin_id')->references('id')->on('gezins');
            $table->foreign('contact_id')->references('id')->on('contacts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_per_gezins');
    }
}
