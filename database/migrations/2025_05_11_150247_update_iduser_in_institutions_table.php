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
        Schema::table('institutions', function (Blueprint $table) {
            Schema::table('institutions', function (Blueprint $table) {
            // Drop FK lama jika masih ada
            $table->dropForeign(['IDUser']);

            // Ubah kolom jadi nullable
            $table->unsignedBigInteger('IDUser')->nullable()->change();

            // Tambahkan ulang foreign key, refer ke users.id
            $table->foreign('IDUser')->references('id')->on('users')->onDelete('set null');
        });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('institutions', function (Blueprint $table) {
            $table->dropForeign(['IDUser']);
            $table->unsignedBigInteger('IDUser')->nullable(false)->change();
            $table->foreign('IDUser')->references('id')->on('users')->onDelete('cascade');
        });
    }
};
