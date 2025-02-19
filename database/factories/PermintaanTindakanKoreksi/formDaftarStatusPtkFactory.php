<?php

namespace Database\Factories\PermintaanTindakanKoreksi;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PermintaanTindakanKoreksi\formDaftarStatusPtk;

class formDaftarStatusPtkFactory extends Factory
{
    protected $model = formDaftarStatusPtk::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_rekaman_dokumen' => $this->fake()->regexify("[A-Z]{3}") . '-' . fake()->regexify("[0-9]{5}"),
            'nama_ciso' => $this->faker->name,
            'nama_vice_president' => $this->faker->name,
            'signed_at' => $this->faker->optional()->date,
            'document_scan' => $this->faker->optional()->url,
            'created_by' => 1,
        ];
    }
}
