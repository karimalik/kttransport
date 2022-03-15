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
        Schema::create('carburants', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('quantite')->nullable();
            $table->string('montant')->nullable();
            $table->string('kilometre')->nullable();
            $table->string('commentaire')->nullable();
            $table->string('periode')->nullable();
            $table->foreignId('tracteur_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('carburants');
    }
};
