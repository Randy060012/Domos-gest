<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });

        DB::table('settings')->insert([
            ['key' => 'site_name', 'value' => 'DOMOS'],
            ['key' => 'logo_light', 'value' => 'admin/assets/images/logo.png'],
            ['key' => 'logo_dark', 'value' => 'admin/assets/images/logo-black.png'],
            ['key' => 'logo_small', 'value' => 'admin/assets/images/logo-sm.png'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
