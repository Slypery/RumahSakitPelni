<?php

namespace App\Models\AuditInternal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailJadwalDetailAuditInternal extends Model
{
    use HasFactory;

    protected $table = 'detail_jadwal_detail_audit_internals';

    protected $fillable = [
        'id_form',
        'waktu',
        'unit_kerja',
        'pic',
        'proses_yang_diaudit',
        'auditor',
    ];

    public $timestamps = false;

    protected $casts = [
        'waktu' => 'datetime',
    ];

    public function formJadwalDetailAuditInternal()
    {
        return $this->belongsTo(formJadwalDetailAuditInternal::class, 'id_form');
    }
}
