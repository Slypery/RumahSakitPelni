<?php

namespace Database\Factories\AuditInternal;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditInternal\formDaftarAuditInternal;

class formDaftarAuditInternalFactory extends Factory
{
    protected $model = formDaftarAuditInternal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_rekaman_dokumen' => $this->fake()->regexify("[A-Z]{3}") . '-' . fake()->regexify("[0-9]{5}"),
            'nama_lead_auditor' => $this->faker->name,
            'nama_direktur_utama' => $this->faker->name,
            'signed_at' => $this->faker->date,
            'document_scan' => $this->faker->url,
            'created_by' => 1,
            'created_at' => $this->faker->dateTime,
        ];
    }
}
