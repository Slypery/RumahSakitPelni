<?php

namespace App\Models\AuditInternal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailDaftarAuditInternal extends Model
{
    use HasFactory;

    protected $table = 'detail_daftar_audit_internals';

    protected $fillable = [
        'id_form',
        'nama',
        'unit_kerja',
        'sertifikat_pelatihan',
        'tempat_pelatihan',
    ];

    public $timestamps = false;

    protected $casts = [
        'sertifikat_pelatihan' => 'boolean',
    ];

    public function formDaftarAuditInternal()
    {
        return $this->belongsTo(formDaftarAuditInternal::class, 'id_form');
    }
}
