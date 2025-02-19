<?php

namespace Database\Factories\AuditInternal;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditInternal\detailChecklistAuditInternal;

class detailChecklistAuditInternalFactory extends Factory
{
    protected $model = detailChecklistAuditInternal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_form' => \App\Models\AuditInternal\formChecklistAuditInternal::factory(),
            'uraian_pertanyaan' => $this->faker->sentence,
            'temuan' => $this->faker->randomElement([1, 2, 3, 4]),
            'catatan_auditor' => $this->faker->sentence,
        ];
    }
}
