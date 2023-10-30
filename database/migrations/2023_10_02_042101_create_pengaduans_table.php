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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kategori');
            $table->unsignedBigInteger('id_warga');
            $table->string('judul');
            $table->string('status')->nullable();
            $table->string('nm_sdr_ksa_hkm');
            $table->text('pokok');
            $table->text('uraian');
            $table->text('data_info');
            $table->text('hal_dimohon');
            $table->string('upload_ttd')->nullable();
            $table->string('upload_bukti')->nullable();
            $table->string('upload_ktp')->nullable();
            $table->boolean('delstatus')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};