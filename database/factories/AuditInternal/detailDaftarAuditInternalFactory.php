<?php

namespace Database\Factories\AuditInternal;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditInternal\detailDaftarAuditInternal;

class detailDaftarAuditInternalFactory extends Factory
{
    protected $model = detailDaftarAuditInternal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_form' => \App\Models\AuditInternal\formDaftarAuditInternal::factory(),
            'nama' => $this->faker->name,
            'unit_kerja' => $this->faker->company,
            'sertifikat_pelatihan' => $this->faker->boolean,
            'tempat_pelatihan' => $this->faker->city,
        ];
    }
}
