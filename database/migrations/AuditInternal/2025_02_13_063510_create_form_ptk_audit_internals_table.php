<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_ptk_audit_internals', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekaman_ptk')->unique();
            $table->string('unit_kerja');
            $table->date('tanggal_audit');
            $table->string('nama_auditor');
            $table->string('nama_auditee');
            $table->string('nama_lead_auditor');
            $table->text('rincian_temuan');
            $table->text('referensi');
            $table->string('pasal');
            $table->enum('tingkat_ketidaksesuaian', ['major', 'minor', 'rekomendasi']);
            $table->date('tanggal_batas_penyelesaian');
            $table->text('identifikasi_penyebab');
            $table->text('koreksi_pada_saat_kejadian');
            $table->text('tindakan_koreksi_total');
            $table->date('tanggal_penyelesaian')->nullable();
            $table->text('verifikasi_tindakan_perbaikan');
            $table->boolean('keputusan')->default(false);
            $table->string('no_ptk_baru')->nullable();
            $table->string('nama_verifier');
            $table->date('tanggal_verifikasi');
            $table->date('signed_at')->nullable();
            $table->string('document_scan')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_ptk_audit_internals');
    }
};
