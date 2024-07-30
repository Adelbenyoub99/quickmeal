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
        Schema::create('restaurateurs', function (Blueprint $table) {
            $table->id();
            $table->String('email_restaurateur')->unique();
            $table->integer('nTel_restaurateur');
            $table->String('adresse_restaurateur');
            $table->String('nom_restaurateur');
            $table->String('mot_de_passe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurateurs');
    }
};
