<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinTable extends Migration
{
    public function up()
    {
        Schema::create('medecin', function (Blueprint $table) {
            $table->id('id_m');
            $table->string('Nom_m');
            $table->string('Prenom_m');
            $table->string('specialite');
            $table->string('CIN_m');
            $table->string('Email_m')->unique();
            $table->string('Telephone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medecin');
    }
};
