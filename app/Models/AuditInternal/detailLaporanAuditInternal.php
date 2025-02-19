<?php

namespace App\Models\AuditInternal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailLaporanAuditInternal extends Model
{
    use HasFactory;

    protected $table = 'detail_laporan_audit_internals';

    protected $fillable = [
        'id_form',
        'unit_kerja',
        'jenis_temuan',
        'total',
        'is_done',
    ];

    public $timestamps = false;

    protected $casts = [
        'jenis_temuan' => 'string',
        'is_done' => 'boolean',
    ];

    public function formLaporanAuditInternal()
    {
        return $this->belongsTo(formLaporanAuditInternal::class, 'id_form');
    }
}
