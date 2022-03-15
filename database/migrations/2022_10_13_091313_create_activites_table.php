<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('pieds20')->nullable();
            $table->string('pieds40')->nullable();
            // $table->string('remorque')->nullable();
            $table->string('siteChargement')->nullable();
            $table->string('siteLivraison')->nullable();
            $table->string('heureChargement')->nullable();
            $table->string('heureDechargement')->nullable();
            $table->string('commentaire')->nullable();
            $table->string('numero_conteneur')->nullable();
            $table->foreignId('tracteur_id')->constrained()->onDelete('cascade');
            $table->foreignId('chauffeur_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activites');
    }
};
