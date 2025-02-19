<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('form_daftar_status_ptks', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekaman_dokumen')->unique();
            $table->string('nama_ciso');
            $table->string('nama_vice_president');
            $table->date('signed_at')->nullable();
            $table->string('document_scan')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('form_daftar_status_ptks');
    }
};
