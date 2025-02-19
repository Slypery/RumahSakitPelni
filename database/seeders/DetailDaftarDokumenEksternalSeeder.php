<?php

namespace Database\Seeders;

use App\Models\PengendalianDokumen\FormDaftarDokumenEksternal;
use Database\Factories\PengendalianDokumen\DetailDaftarDokumenEksternalFactory;
use Database\Factories\PengendalianDokumen\FormDaftarDokumenEksternalFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailDaftarDokumenEksternalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!FormDaftarDokumenEksternal::count()){
            FormDaftarDokumenEksternalFactory::new()->count(20)->create();
        }
        foreach(FormDaftarDokumenEksternal::all() as $row){
            DetailDaftarDokumenEksternalFactory::new()->count(3)->create([
                'id_form' => $row->id
            ]);
        }
    }
}
