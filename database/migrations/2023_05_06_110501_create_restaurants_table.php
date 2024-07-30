<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Exécute la migration.
     */
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('nom_restaurant');
            $table->unsignedBigInteger('id_restaurateur');
            $table->foreign('id_restaurateur')->references('id')->on('restaurateurs')->onDelete('cascade')->default('1');
            $table->string('restaurant_image')->nullable();
            $table->float('note');
            $table->timestamps();
        });
    }

    /**
     * Annule la migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};