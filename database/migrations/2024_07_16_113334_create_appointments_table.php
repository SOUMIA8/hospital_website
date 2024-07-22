<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Date_heure');
            $table->string('nom_patient');
            $table->string('nom_medecin');
            $table->string('nom_secretaire');
            $table->unsignedBigInteger('id_a')->nullable();
            $table->foreign('id_a')->references('id')->on('actes')->onDelete('cascade');
            // Ajoutez d'autres colonnes si nécessaire

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
