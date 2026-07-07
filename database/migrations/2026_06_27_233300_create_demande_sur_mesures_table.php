<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('demande_sur_mesures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('nature_projet')->nullable();
            $table->string('type_propriete')->nullable();
            $table->string('localisation')->nullable();
            $table->decimal('budget_max', 15, 2)->nullable();
            $table->integer('chambres_min')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demande_sur_mesures');
    }
};
