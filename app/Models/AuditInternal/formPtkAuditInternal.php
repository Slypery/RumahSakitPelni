<?php

namespace App\Models\AuditInternal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formPtkAuditInternal extends Model
{
    use HasFactory;

    protected $table = 'form_ptk_audit_internals';

    protected $fillable = [
        'no_rekaman_ptk',
        'unit_kerja',
        'tanggal_audit',
        'nama_auditor',
        'nama_auditee',
        'nama_lead_auditor',
        'rincian_temuan',
        'referensi',
        'pasal',
        'tingkat_ketidaksesuaian',
        'tanggal_batas_penyelesaian',
        'identifikasi_penyebab',
        'koreksi_pada_saat_kejadian',
        'tindakan_koreksi_total',
        'tanggal_penyelesaian',
        'verifikasi_tindakan_perbaikan',
        'keputusan',
        'no_ptk_baru',
        'nama_verifier',
        'tanggal_verifikasi',
        'signed_at',
        'document_scan',
        'created_by',
        'created_at',
    ];

    public $timestamps = false;

    protected $casts = [
        'tingkat_ketidaksesuaian' => 'string',
        'keputusan' => 'boolean',
        'signed_at' => 'date',
        'created_at' => 'datetime',
    ];
}
