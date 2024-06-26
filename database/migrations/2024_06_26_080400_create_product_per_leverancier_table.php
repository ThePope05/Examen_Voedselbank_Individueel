<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('product_per_leveranciers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leverancier_id');
            $table->unsignedBigInteger('product_id');
            $table->date('datum_aangeleverd');
            $table->date('datum_eerst_volgende_levering')->nullable();
            $table->timestamps();

            $table->foreign('leverancier_id')->references('id')->on('leveranciers')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_per_leveranciers');
    }
};
