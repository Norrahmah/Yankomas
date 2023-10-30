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
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pengaduan')->unsigned();
            $table->foreign('id_pengaduan')->references('id')->on('pengaduan');
            $table->string('nama');
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('alamat');
            $table->string('telp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
};
