<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('leveranciers', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('contact_persoon');
            $table->string('leverancier_nummer');
            $table->string('leverancier_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leveranciers');
    }
};
