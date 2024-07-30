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
        Schema::create('administrauteurs', function (Blueprint $table) {
            $table->id();
            $table->String('email_administrateur')->unique();
            $table->integer('nTel_administrateur');
            $table->String('adresse_administrateur');
            $table->String('nom_administrateur');
            $table->String('prenom_administrateur');
            $table->String('mot_de_passe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrauteurs');
    }
};
