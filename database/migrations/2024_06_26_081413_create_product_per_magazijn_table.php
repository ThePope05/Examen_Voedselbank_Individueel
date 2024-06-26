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
        Schema::create('product_per_magazijn', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('product');
            $table->foreignId('magazijn_id')->constrained('magazijn');
            $table->string('locatie', 255);
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
        Schema::dropIfExists('product_per_magazijn');
    }
};
