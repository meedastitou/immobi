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
        Schema::create('maisons', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('description');
            $table->integer('nb_chambre');
            $table->float('prix_vende');
            $table->float('prix_louer_moin');
            $table->float('prix_louer_jour');
            $table->integer('nb_douche');
            $table->integer('owner');
            $table->string('status');
            $table->string('capt')->nullable();
            $table->integer('surface_maison');
            $table->integer('surface_terre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maisons');
    }
};
