<?php

namespace Database\Factories\AuditInternal;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditInternal\detailJadwalTahunanAuditInternal;

class detailJadwalTahunanAuditInternalFactory extends Factory
{
    protected $model = detailJadwalTahunanAuditInternal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_form' => \App\Models\AuditInternal\formJadwalTahunanAuditInternal::factory(),
            'nama_kegiatan' => $this->faker->sentence,
            'jadwal_plan_action' => json_encode($this->faker->randomElements(['011P', '012P', '014A', '021A'], 2)),
        ];
    }
}
