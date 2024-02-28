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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('spesialis_id');
            $table->string('nama');
            $table->string('image');
            $table->string('senin')->nullable()->default('-');
            $table->string('selasa')->nullable()->default('-');
            $table->string('rabu')->nullable()->default('-');
            $table->string('kamis')->nullable()->default('-');
            $table->string('jumat')->nullable()->default('-');
            $table->string('sabtu')->nullable()->default('-');
            $table->string('minggu')->nullable()->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
