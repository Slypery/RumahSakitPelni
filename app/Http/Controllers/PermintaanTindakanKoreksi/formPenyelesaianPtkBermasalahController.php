<?php

namespace App\Http\Controllers\PermintaanTindakanKoreksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PermintaanTindakanKoreksi\formPenyelesaianPtkBermasalah;

class formPenyelesaianPtkBermasalahController extends Controller
{
    public function index()
    {
        $data = formPenyelesaianPtkBermasalah::all();
        dd($data);
        return view('02.03_form_penyelesaian_ptk_bermasalah', [
            'pageName' => '02.03 Penyelesaian PTK Bermasalah'
        ]);
    }
}
