<?php

namespace Database\Seeders\AuditInternal;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AuditInternal\detailJadwalTahunanAuditInternal;

class DetailJadwalTahunanAuditInternalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        detailJadwalTahunanAuditInternal::factory()->count(20)->create();
    }
}
