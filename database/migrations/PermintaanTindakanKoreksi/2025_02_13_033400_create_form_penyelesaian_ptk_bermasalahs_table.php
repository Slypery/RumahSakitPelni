<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('form_penyelesaian_ptk_bermasalahs', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekaman_dokumen');
            $table->text('detail_kejadian_kasus');
            $table->text('detail_penyelesaian_kasus');
            $table->string('nama_ciso');
            $table->string('nama_direktur_utama');
            $table->date('signed_at')->nullable();
            $table->string('document_scan')->nullable();
            $table->foreignId('created_by')->constrained('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('form_penyelesaian_ptk_bermasalahs');
    }
};
