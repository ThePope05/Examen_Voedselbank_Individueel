<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->constrained('categorie');
            $table->string('naam', 255);
            $table->string('soort_allergie', 20)->nullable();
            $table->bigInteger('barcode');
            $table->date('houdbaarheidsdatum');
            $table->string('omschrijving', 255);
            $table->string('status', 255);
            $table->boolean('is_actief')->default(true);
            $table->string('opmerking', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
