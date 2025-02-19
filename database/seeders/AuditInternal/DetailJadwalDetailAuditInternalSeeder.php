<?php

namespace Database\Seeders\AuditInternal;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AuditInternal\detailJadwalDetailAuditInternal;

class DetailJadwalDetailAuditInternalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        detailJadwalDetailAuditInternal::factory()->count(20)->create();
    }
}
