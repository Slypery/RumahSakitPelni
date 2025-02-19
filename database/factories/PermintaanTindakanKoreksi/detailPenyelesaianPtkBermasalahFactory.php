<?php

namespace Database\Factories\PermintaanTindakanKoreksi;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PermintaanTindakanKoreksi\detailPenyelesaianPtkBermasalah;

class detailPenyelesaianPtkBermasalahFactory extends Factory
{
    protected $model = detailPenyelesaianPtkBermasalah::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_form' => \App\Models\PermintaanTindakanKoreksi\formPenyelesaianPtkBermasalah::factory(),
            'no_rekaman_ptk' => $this->fake()->regexify("[A-Z]{3}") . '-' . fake()->regexify("[0-9]{5}"),
            'tanggal_ptk' => $this->faker->date,
            'keterangan' => $this->faker->text,
        ];
    }
}
