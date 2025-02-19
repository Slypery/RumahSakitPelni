<?php

namespace Database\Seeders\AuditInternal;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AuditInternal\detailDaftarAuditInternal;

class DetailDaftarAuditInternalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        detailDaftarAuditInternal::factory()->count(20)->create();
    }
}
