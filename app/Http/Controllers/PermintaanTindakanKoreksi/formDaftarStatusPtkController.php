<?php

namespace App\Http\Controllers\PermintaanTindakanKoreksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermintaanTindakanKoreksi\formDaftarStatusPtk;


class formDaftarStatusPtkController extends Controller
{
    public function index()
    {
        $data = formDaftarStatusPtk::all();
        dd($data);
        return view('02.02_form_daftar_status_ptk', [
            'pageName' => '02.02 Daftar Status PTK'
        ]);
    }
}
