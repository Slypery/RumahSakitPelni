<?php

namespace Database\Factories\AuditInternal;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditInternal\detailJadwalDetailAuditInternal;

class detailJadwalDetailAuditInternalFactory extends Factory
{
    protected $model = detailJadwalDetailAuditInternal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_form' => \App\Models\AuditInternal\formJadwalDetailAuditInternal::factory(),
            'waktu' => $this->faker->dateTime,
            'unit_kerja' => $this->faker->company,
            'pic' => $this->faker->name,
            'proses_yang_diaudit' => $this->faker->sentence,
            'auditor' => $this->faker->name,
        ];
    }
}
