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
        Schema::create('operational_hours', function (Blueprint $table) {
            // Primary Key
            $table->id(); // Ini otomatis menjadi unsignedBigInteger, auto-increment
            
            // Kolom utama
            $table->string('day', 10); // Nama hari (Senin, Selasa, dst)
            $table->time('open_time')->nullable(); // Jam buka (bisa null jika tutup)
            $table->time('close_time')->nullable(); // Jam tutup (bisa null jika tutup)
            $table->boolean('is_closed')->default(false); // Status operasional
            
            // Kolom tambahan
            $table->text('notes')->nullable(); // Catatan khusus
            $table->string('timezone')->default('Asia/Jakarta'); // Timezone
            
            // Timestamps
            $table->timestamps(); // created_at dan updated_at
            
            // Index
            $table->index('day'); // Index untuk pencarian berdasarkan hari
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operational_hours');
    }
};
