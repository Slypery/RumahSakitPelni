<?php

namespace Database\Factories\AuditInternal;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AuditInternal\detailStatusTemuanAuditInternal;

class detailStatusTemuanAuditInternalFactory extends Factory
{
    protected $model = detailStatusTemuanAuditInternal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_form' => \App\Models\AuditInternal\formStatusTemuanAuditInternal::factory(),
            'tanggal' => $this->faker->date,
            'no_rekaman_ptka' => $this->fake()->regexify("[A-Z]{3}") . '-' . fake()->regexify("[0-9]{5}"),
            'uraian_ketidak_sesuaian_audit' => $this->faker->text,
            'pasal' => $this->faker->word,
            'status' => $this->faker->randomElement(['major', 'minor', 'rekomendasi']),
            'tanggal_target_selesai' => $this->faker->date,
            'analisa_penyebab' => $this->faker->text,
            'koreksi_pada_saat_kejadian' => $this->faker->text,
            'tindakan_koreksi_total' => $this->faker->text,
            'tanggal_verifikasi' => $this->faker->date,
            'tanggal_efektif' => $this->faker->date,
            'tanggal_terbuka' => $this->faker->date,
        ];
    }
}
