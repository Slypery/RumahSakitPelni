<?php

namespace App\Models\AuditInternal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formLaporanAuditInternal extends Model
{
    use HasFactory;

    protected $table = 'form_laporan_audit_internals';

    protected $fillable = [
        'no_rekaman_dokumen',
        'temuan_belum_selesai',
        'rekomendasi_pelaksanaan_audit_selanjutnya',
        'nama_lead_auditor',
        'nama_vice_president',
        'signed_at',
        'document_scan',
        'created_by',
        'created_at',
    ];

    public $timestamps = false;

    protected $casts = [
        'temuan_belum_selesai' => 'json',
        'rekomendasi_pelaksanaan_audit_selanjutnya' => 'json',
        'signed_at' => 'date',
        'created_at' => 'datetime',
    ];
}
