<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('form_permintaan_tindakan_koreksis', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekaman_ptk');
            $table->date('tanggal_ptk');
            $table->string('unit_kerja_penerbit_ptk');
            $table->string('unit_kerja_penerima_ptk');
            $table->text('rincian_temuan');
            $table->string('nama_pembuat');
            $table->string('nama_penerima');
            $table->string('nama_vice_president');
            $table->text('identifikasi_penyebab');
            $table->text('koreksi_pada_saat_kejadian');
            $table->text('tindakan_koreksi_total');
            $table->date('tanggal_penyelesaian')->nullable();
            $table->text('verifikasi_tindakan_perbaikan')->nullable();
            $table->boolean('keputusan')->default(false);
            $table->string('no_ptk_baru')->nullable();
            $table->string('nama_verifier')->nullable();
            $table->date('tanggal_verifikasi')->nullable();
            $table->date('signed_at')->nullable();
            $table->string('document_scan')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('form_permintaan_tindakan_koreksis');
    }
};
