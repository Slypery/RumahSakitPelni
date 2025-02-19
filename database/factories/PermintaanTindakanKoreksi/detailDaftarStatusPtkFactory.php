<?php

namespace Database\Factories\PermintaanTindakanKoreksi;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PermintaanTindakanKoreksi\detailDaftarStatusPtk;

class detailDaftarStatusPtkFactory extends Factory
{
    protected $model = detailDaftarStatusPtk::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_form' => \App\Models\PermintaanTindakanKoreksi\formDaftarStatusPtk::factory(),
            'no_rekaman_ptk' => $this->fake()->regexify("[A-Z]{3}") . '-' . fake()->regexify("[0-9]{5}"),
            'keterangan_ptk' => $this->faker->text,
            'pic' => $this->faker->name,
            'tanggal_mulai' => $this->faker->date,
            'tanggal_target_selesai' => $this->faker->date,
            'tanggal_selesai' => $this->faker->optional()->date,
            'hasil' => $this->faker->text,
        ];
    }
}
