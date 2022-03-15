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
        Schema::create('achat_pieces', function (Blueprint $table) {
            $table->id();
            $table->string('dateAchat')->nullable();
            $table->string('designation')->nullable();
            $table->string('quantite')->nullable();
            $table->string('prixU')->nullable();
            $table->string('montantT')->nullable();
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
        Schema::dropIfExists('achat_pieces');
    }
};
