<?php

namespace Database\Factories\PermintaanTindakanKoreksi;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PermintaanTindakanKoreksi\formPermintaanTindakanKoreksi;

class formPermintaanTindakanKoreksiFactory extends Factory
{
    protected $model = formPermintaanTindakanKoreksi::class;
    public function definition(): array
    {
        return [
            'no_rekaman_ptk' => $this->fake()->regexify("[A-Z]{3}") . '-' . fake()->regexify("[0-9]{5}"),
            'tanggal_ptk' => $this->faker->date,
            'unit_kerja_penerbit_ptk' => $this->faker->company,
            'unit_kerja_penerima_ptk' => $this->faker->company,
            'rincian_temuan' => $this->faker->paragraph,
            'nama_pembuat' => $this->faker->name,
            'nama_penerima' => $this->faker->name,
            'nama_vice_president' => $this->faker->name,
            'identifikasi_penyebab' => $this->faker->sentence,
            'koreksi_pada_saat_kejadian' => $this->faker->sentence,
            'tindakan_koreksi_total' => $this->faker->paragraph,
            'tanggal_penyelesaian' => $this->faker->optional()->date,
            'verifikasi_tindakan_perbaikan' => $this->faker->optional()->sentence,
            'keputusan' => $this->faker->boolean,
            'no_ptk_baru' => $this->faker->optional()->uuid,
            'nama_verifier' => $this->faker->optional()->name,
            'tanggal_verifikasi' => $this->faker->optional()->date,
            'signed_at' => $this->faker->optional()->date,
            'document_scan' => $this->faker->optional()->url,
            'created_by' => 1,
        ];
    }
}
