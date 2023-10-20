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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre',100);
            $table->text('resume');
            $table->string('duree',5);
            $table->integer('annee');
            $table->unsignedBigInteger('realisateur');
            $table->foreign('realisateur')->references('id')->on('personnes');
            $table->unsignedBigInteger('producteur');
            $table->foreign('producteur')->references('id')->on('personnes');
            $table->foreignId('personne_id')->constrained();
            $table->string('lien_film',255);
            $table->string('lien_affiche',255);  
            $table->double('note');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
