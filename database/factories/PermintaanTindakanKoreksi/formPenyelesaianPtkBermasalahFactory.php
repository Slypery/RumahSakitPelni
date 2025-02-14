<?php

namespace Database\Factories\PermintaanTindakanKoreksi;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PermintaanTindakanKoreksi\formPenyelesaianPtkBermasalah;

class formPenyelesaianPtkBermasalahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = formPenyelesaianPtkBermasalah::class;
    public function definition(): array
    {
        return [
            'no_rekaman_dokumen' => $this->faker->uuid,
            'detail_kejadian_kasus' => $this->faker->text,
            'detail_penyelesaian_kasus' => $this->faker->text,
            'nama_ciso' => $this->faker->name,
            'nama_direktur_utama' => $this->faker->name,
            'is_signed' => $this->faker->boolean,
            'signed_at' => $this->faker->optional()->date,
            'document_scan' => $this->faker->optional()->url,
            'created_by' => 1,
        ];
    }
}
