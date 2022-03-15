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
        Schema::create('pannes', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('panneDeclare')->nullable();
            $table->string('action')->nullable();
            $table->string('statut')->nullable();
            $table->string('cout')->nullable();
            $table->string('commentaire')->nullable();
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
        Schema::dropIfExists('pannes');
    }
};
