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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
        $table->string('name');
        $table->string('primary_color')->default('#000000');
        $table->string('secondary_color')->default('#ffffff');
        $table->string('font_family')->default('Arial');
        $table->boolean('is_default')->default(false);
        $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};

