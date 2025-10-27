<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->string('title'); // Judul dokumen
            $table->text('description')->nullable(); // Deskripsi singkat
            $table->string('original_filename'); // Nama file asli (misal: "laporan_bulanan.xlsx")
            $table->string('storage_path'); // Path file di storage (misal: "dokumen/asdhG34aEa.xlsx")
            $table->string('file_type'); // extension: pptx, docx, xlsx
            $table->unsignedBigInteger('file_size'); // Ukuran file dalam bytes
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};