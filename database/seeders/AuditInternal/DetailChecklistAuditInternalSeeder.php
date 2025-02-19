<?php

namespace Database\Seeders\AuditInternal;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AuditInternal\detailChecklistAuditInternal;

class DetailChecklistAuditInternalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        detailChecklistAuditInternal::factory()->count(20)->create();
    }
}
