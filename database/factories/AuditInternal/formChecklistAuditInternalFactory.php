<?php

namespace Database\Factories\AuditInternal;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditInternal\formChecklistAuditInternal;

class formChecklistAuditInternalFactory extends Factory
{
    protected $model = formChecklistAuditInternal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_rekaman_dokumen' => $this->fake()->regexify("[A-Z]{3}") . '-' . fake()->regexify("[0-9]{5}"),
            'unit_kerja' => $this->faker->company,
            'tanggal_audit' => $this->faker->date,
            'nama_auditor' => $this->faker->name,
            'nama_lead_auditor' => $this->faker->name,
            'signed_at' => $this->faker->date,
            'document_scan' => $this->faker->url,
            'created_by' => 1,
            'created_at' => $this->faker->dateTime,
        ];
    }
}
