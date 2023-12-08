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
        Schema::create('rekapitulasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kandidat_id');
            $table->unsignedBigInteger('jadwal_id');
            $table->string('nama_pemilih');
            $table->string('npm_pemilih');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('jenjang')->nullable();
            $table->string('prodi_pemilih');
            $table->string('fakultas_pemilih');
            $table->string('angkatan_pemilih');
            $table->timestamps();

            $table->foreign('kandidat_id')->references('id')->on('kandidats');
            $table->foreign('jadwal_id')->references('id')->on('jadwals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekapitulasis');
    }
};
