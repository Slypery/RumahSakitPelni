<?php

namespace Database\Seeders\AuditInternal;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AuditInternal\formPtkAuditInternal;

class FormPtkAuditInternalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        formPtkAuditInternal::factory()->count(20)->create();
    }
}
