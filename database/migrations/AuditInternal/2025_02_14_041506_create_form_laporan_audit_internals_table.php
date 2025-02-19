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
        Schema::create('form_laporan_audit_internals', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekaman_dokumen')->unique();
            $table->json('temuan_belum_selesai');
            $table->json('rekomendasi_pelaksanaan_audit_selanjutnya');
            $table->string('nama_lead_auditor');
            $table->string('nama_vice_president');
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
        Schema::dropIfExists('form_laporan_audit_internals');
    }
};
