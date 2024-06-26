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
        Schema::create('magazijn', function (Blueprint $table) {
            $table->id();
            $table->date('ontvangstdatum');
            $table->date('uitleveringsdatum')->nullable();
            $table->string('verpakkingseenheid', 20);
            $table->integer('aantal')->nullable();
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
        Schema::dropIfExists('magazijn');
    }
};
