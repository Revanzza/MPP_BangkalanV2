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
            $table->id('id'); // Gunakan 'id' sebagai PK standar Laravel
            $table->string('nama_institution');
            $table->string('alamat_institution');
            $table->string('website_institution')->nullable();
            $table->string('logo_institution')->nullable();
            $table->string('no_institution')->nullable();
            
            // Gunakan 'user_id' sebagai FK nullable ke users.id
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

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
