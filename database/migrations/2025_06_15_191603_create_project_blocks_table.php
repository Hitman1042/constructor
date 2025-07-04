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
        Schema::create('project_blocks', function (Blueprint $table) {
            $table->id();
        $table->foreignId('project_id')->constrained()->onDelete('cascade');
        $table->foreignId('block_id')->constrained()->onDelete('cascade');
        $table->json('content')->nullable();
        $table->json('styles')->nullable();
        $table->integer('position')->default(0);
        $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_blocks');
    }
};

