<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengendalianDokumen\DaftarDokumenEksternalController;
use App\Http\Controllers\PengendalianDokumen\LaporanPengkajianDokumenRekamanController;
use App\Http\Controllers\PengendalianDokumen\PemusnahanDokumenRekamanController;
use App\Http\Controllers\PengendalianDokumen\PerjanjianKerahasiaanController;
use App\Http\Controllers\PengendalianDokumen\SerahterimaDokumenRekamanController;
use App\Http\Controllers\PengendalianDokumen\SuratPernyataanKerahasiaanController;
use App\Http\Controllers\PengendalianDokumen\UsulanPerubahanDokumenController;
use App\Http\Controllers\PermintaanTindakanKoreksi\formPermintaanTindakanKoreksiController;
use App\Http\Controllers\PermintaanTindakanKoreksi\formPenyelesaianPtkBermasalahController;
use App\Http\Controllers\PermintaanTindakanKoreksi\formDaftarStatusPtkController;
use App\Http\Controllers\AuditInternal\formDaftarAuditInternalController;
use App\Http\Controllers\AuditInternal\formChecklistAuditInternalController;
use App\Http\Controllers\AuditInternal\formJadwalDetailAuditInternalController;
use App\Http\Controllers\AuditInternal\formJadwalTahunanAuditInternalController;
use App\Http\Controllers\AuditInternal\formLaporanAuditInternalController;
use App\Http\Controllers\AuditInternal\formPtkAuditInternalController;
use App\Http\Controllers\AuditInternal\formStatusTemuanAuditInternalController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return redirect()->route('auth.login');
})->name('index');

Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::resource('user', UserController::class)->middleware(Authenticate::class);

Route::prefix('pengendalian_dokumen')->name('01.')->middleware(Authenticate::class)->group(function () {
    Route::resource('daftar_dokumen_eksternal', DaftarDokumenEksternalController::class, ['names' => '04']);
    Route::resource('serah_terima_dokumen_rekaman', SerahterimaDokumenRekamanController::class, ['names' => '05']);
    Route::resource('usulan_perubahan_dokumen', UsulanPerubahanDokumenController::class, ['names' => '06']);
    Route::resource('pemusnahan_dokumen_rekaman', PemusnahanDokumenRekamanController::class, ['names' => '07']);
    Route::resource('surat_pernyataan_kerahasiaan', SuratPernyataanKerahasiaanController::class, ['names' => '08']);
    Route::resource('perjanjian_kerahasiaan', PerjanjianKerahasiaanController::class, ['names' => '09']);
    Route::resource('laporan_pengkajian_dokumen', LaporanPengkajianDokumenRekamanController::class, ['names' => '10']);
});

Route::prefix('permintaan_tindakan_koreksi')->name('02.')->middleware(Authenticate::class)->group(function () {
    Route::resource('permintaan_tindakan_koreksi', formPermintaanTindakanKoreksiController::class, ['names' => '01']);
    Route::resource('daftar_status_ptk', formDaftarStatusPtkController::class, ['names' => '02']);
    Route::resource('penyelesaian_ptk_bermasalah', formPenyelesaianPtkBermasalahController::class, ['names' => '03']);
});

Route::prefix('audit_internal')->name('03.')->middleware(Authenticate::class)->group(function () {
    Route::prefix('form_jadwal_tahunan_audit_internal')->name('.03')->group(function () {
        Route::get('/', function () {
            return view('03.03_form_jadwal_tahunan_audit_internal', [
                'pageName' => '03.03 Jadwal Tahunan Audit Internal'
            ]);
        })->name('.index');
    });
    Route::prefix('form_jadwal_detail_audit_internal')->name('.04')->group(function () {
        Route::get('/', function () {
            return view('03.04_form_jadwal_detail_audit_internal', [
                'pageName' => '03.04 Jadwal Detail Audit Internal'
            ]);
        })->name('.index');
    });
    Route::prefix('form_checklist_audit_internal')->name('.05')->group(function () {
        Route::get('/', function () {
            return view('03.05_form_checklist_audit_internal', [
                'pageName' => '03.05 Checklist Audit Internal'
            ]);
        })->name('.index');
    });
    Route::prefix('form_laporan_audit_internal')->name('.06')->group(function () {
        Route::get('/', function () {
            return view('03.06_form_laporan_audit_internal', [
                'pageName' => '03.06 Laporan Audit Internal'
            ]);
        })->name('.index');
    });
    Route::prefix('form_status_temuan_audit_internal')->name('.07')->group(function () {
        Route::get('/', function () {
            return view('03.07_form_status_temuan_audit_internal', [
                'pageName' => '03.07 Status Temuan Audit Internal'
            ]);
        })->name('.index');
    });

    Route::resource('daftar_audit_internal', formDaftarAuditInternalController::class, ['names' => '01']);
    Route::resource('ptk_audit_internal', formPtkAuditInternalController::class, ['names' => '02']);
    Route::resource('jadwal_tahunan_audit_internal', formJadwalTahunanAuditInternalController::class, ['names' => '03']);
    Route::resource('jadwal_detail_audit_internal', formJadwalDetailAuditInternalController::class, ['names' => '04']);
    Route::resource('checklist_audit_internal', formChecklistAuditInternalController::class, ['names' => '05']);
    Route::resource('laporan_audit_internal', formLaporanAuditInternalController::class, ['names' => '06']);
    Route::resource('status_temuan_audit_internal', formStatusTemuanAuditInternalController::class, ['names' => '07']);
});