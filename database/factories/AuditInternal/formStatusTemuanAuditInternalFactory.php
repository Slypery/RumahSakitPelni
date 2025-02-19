<?php

namespace Database\Factories\AuditInternal;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditInternal\formStatusTemuanAuditInternal;

class formStatusTemuanAuditInternalFactory extends Factory
{
    protected $model = formStatusTemuanAuditInternal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_rekaman_dokumen' => $this->fake()->regexify("[A-Z]{3}") . '-' . fake()->regexify("[0-9]{5}"),
            'kesimpulan' => $this->faker->text,
            'jumlah_temuan' => $this->faker->numberBetween(1, 100),
            'jumlah_selesai' => $this->faker->numberBetween(1, 100),
            'nama_lead_auditor' => $this->faker->name,
            'nama_vice_president' => $this->faker->name,
            'signed_at' => $this->faker->date,
            'document_scan' => $this->faker->url,
            'created_by' => 1,
            'created_at' => $this->faker->dateTime,
        ];
    }
}
