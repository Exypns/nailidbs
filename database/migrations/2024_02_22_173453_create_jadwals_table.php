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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->string('senin')->default('-');
            $table->string('selasa')->default('-');
            $table->string('rabu')->default('-');
            $table->string('kamis')->default('-');
            $table->string('jumat')->default('-');
            $table->string('sabtu')->default('-');
            $table->string('minggu')->default('-');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
