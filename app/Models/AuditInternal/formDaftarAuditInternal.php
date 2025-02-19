<?php

namespace App\Models\AuditInternal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formDaftarAuditInternal extends Model
{
    use HasFactory;

    protected $table = 'form_daftar_audit_internals';

    protected $fillable = [
        'no_rekaman_dokumen',
        'nama_lead_auditor',
        'nama_direktur_utama',
        'signed_at',
        'document_scan',
        'created_by',
        'created_at',
    ];

    public $timestamps = false;

    protected $casts = [
        'signed_at' => 'date',
        'created_at' => 'datetime',
    ];
}
