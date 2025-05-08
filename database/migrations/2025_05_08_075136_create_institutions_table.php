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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id('IDInstitution');
            $table->string('nama_institution');
            $table->string('alamat_institution');
            $table->string('website_institution')->nullable();
            $table->string('logo_institution')->nullable();
            $table->string('no_institution')->nullable();
            $table->unsignedBigInteger('IDUser');
            $table->foreign('IDUser')->references('IDUser')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutions');
    }
};
