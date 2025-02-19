<?php

namespace App\Models\AuditInternal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailChecklistAuditInternal extends Model
{
    use HasFactory;

    protected $table = 'detail_checklist_audit_internals';

    protected $fillable = [
        'id_form',
        'uraian_pertanyaan',
        'temuan',
        'catatan_auditor',
    ];

    public $timestamps = false;

    protected $casts = [
        'temuan' => 'integer',
    ];

    public function formChecklistAuditInternal()
    {
        return $this->belongsTo(formChecklistAuditInternal::class, 'id_form');
    }
}
