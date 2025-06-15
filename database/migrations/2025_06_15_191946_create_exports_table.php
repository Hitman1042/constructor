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
        Schema::create('exports', function (Blueprint $table) {
            $table->id();
        $table->foreignId('project_id')->constrained()->onDelete('cascade');
        $table->string('format'); // html, zip, pdf
        $table->string('download_link')->nullable();
        $table->enum('status', ['queued', 'done'])->default('queued');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exports');
    }
};

