<?php

namespace Database\Factories\AuditInternal;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditInternal\detailLaporanAuditInternal;

class detailLaporanAuditInternalFactory extends Factory
{
    protected $model = detailLaporanAuditInternal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_form' => \App\Models\AuditInternal\formLaporanAuditInternal::factory(),
            'unit_kerja' => $this->faker->company,
            'jenis_temuan' => $this->faker->randomElement(['major', 'minor', 'rekomendasi']),
            'total' => $this->faker->numberBetween(1, 100),
            'is_done' => $this->faker->boolean,
        ];
    }
}
