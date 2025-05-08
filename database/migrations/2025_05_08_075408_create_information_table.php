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
        Schema::create('information', function (Blueprint $table) {
            $table->id('IDInformation');
            $table->unsignedBigInteger('IDUser');
            $table->foreign('IDUser')->references('IDUser')->on('users')->onDelete('cascade');
            $table->string('judul');
            $table->text('isi');
            $table->string('gambar')->nullable();
            $table->string('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
