<?php

namespace App\Models\AuditInternal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailStatusTemuanAuditInternal extends Model
{
    use HasFactory;

    protected $table = 'detail_status_temuan_audit_internals';

    protected $fillable = [
        'id_form',
        'tanggal',
        'no_rekaman_ptka',
        'uraian_ketidak_sesuaian_audit',
        'pasal',
        'status',
        'tanggal_target_selesai',
        'analisa_penyebab',
        'koreksi_pada_saat_kejadian',
        'tindakan_koreksi_total',
        'tanggal_verifikasi',
        'tanggal_efektif',
        'tanggal_terbuka',
    ];

    public $timestamps = false;

    protected $casts = [
        'tanggal' => 'date',
        'tanggal_target_selesai' => 'date',
        'tanggal_verifikasi' => 'date',
        'tanggal_efektif' => 'date',
        'tanggal_terbuka' => 'date',
        'status' => 'string',
    ];

    public function formStatusTemuanAuditInternal()
    {
        return $this->belongsTo(formStatusTemuanAuditInternal::class, 'id_form');
    }
}
