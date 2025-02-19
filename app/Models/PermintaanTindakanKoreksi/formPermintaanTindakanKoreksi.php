<?php

namespace App\Models\PermintaanTindakanKoreksi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formPermintaanTindakanKoreksi extends Model
{
    use HasFactory;

    protected $table = 'form_permintaan_tindakan_koreksis';

    protected $fillable = [
        'no_rekaman_ptk',
        'tanggal_ptk',
        'unit_kerja_penerbit_ptk',
        'unit_kerja_penerima_ptk',
        'rincian_temuan',
        'nama_pembuat',
        'nama_penerima',
        'nama_vice_president',
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
        'created_by'
    ];
}
