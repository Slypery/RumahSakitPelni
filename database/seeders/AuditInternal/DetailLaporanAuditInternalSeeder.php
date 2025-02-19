<?php

namespace Database\Seeders\AuditInternal;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AuditInternal\detailLaporanAuditInternal;


class DetailLaporanAuditInternalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        detailLaporanAuditInternal::factory()->count(20)->create();
    }
}
