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
        Schema::create('hewans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hewan');
            $table->foreignId('id_kategori')->constrained('kategoris')->onDelete('cascade');
            $table->enum('keturunan', ['Persia', 'Maine coon', 'British Short Hair'])->nullable();
            $table->enum('usia', ['anak', 'dewasa', 'senior']);
            $table->enum('jenis_kelamin', ['jantan', 'betina']);
            $table->string('gambar')->nullable();
            $table->foreignId('id_shelter')->constrained('shelters')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hewans');
    }
};
