<?php

namespace App\Models\AuditInternal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailJadwalTahunanAuditInternal extends Model
{
    use HasFactory;

    protected $table = 'detail_jadwal_tahunan_audit_internals';

    protected $fillable = [
        'id_form',
        'nama_kegiatan',
        'jadwal_plan_action',
    ];

    public $timestamps = false;

    protected $casts = [
        'jadwal_plan_action' => 'json',
    ];

    public function formJadwalTahunanAuditInternal()
    {
        return $this->belongsTo(formJadwalTahunanAuditInternal::class, 'id_form');
    }
}
