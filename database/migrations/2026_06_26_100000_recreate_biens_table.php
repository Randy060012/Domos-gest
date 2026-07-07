<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('biens_prestations');
        Schema::dropIfExists('biens_images');
        Schema::dropIfExists('biens');

        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('ref')->unique();
            $table->string('titre');
            $table->decimal('prix', 15, 2)->default(0);
            $table->string('honoraires')->nullable();
            $table->string('localisation');
            $table->string('statut')->default('VENTE');
            $table->text('description')->nullable();
            $table->string('type')->nullable();
            $table->integer('surface_habitable')->nullable();
            $table->integer('surface_terrain')->nullable();
            $table->integer('pieces')->nullable();
            $table->integer('chambres')->nullable();
            $table->integer('salles_bain')->nullable();
            $table->integer('annee_construction')->nullable();
            $table->string('chauffage')->nullable();
            $table->string('etat')->nullable();
            $table->string('exposition')->nullable();
            $table->string('dpe_classe', 1)->nullable();
            $table->integer('dpe_valeur')->nullable();
            $table->string('ges_classe', 1)->nullable();
            $table->integer('ges_valeur')->nullable();
            $table->string('taxe_fonciere')->nullable();
            $table->string('charges_copropriete')->nullable();
            $table->string('nombre_lots')->nullable();
            $table->string('procedure_en_cours')->nullable();
            $table->boolean('est_actif')->default(true);
            $table->boolean('en_vedette')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
