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
        Schema::create('form_checklist_audit_internals', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekaman_dokumen')->unique();
            $table->string('unit_kerja');
            $table->date('tanggal_audit');
            $table->string('nama_auditor');
            $table->string('nama_lead_auditor');
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
        Schema::dropIfExists('form_checklist_audit_internals');
    }
};
