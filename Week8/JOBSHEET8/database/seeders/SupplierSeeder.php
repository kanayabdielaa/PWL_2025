<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_supplier = [
            [
                'supplier_kode' => 'SP01',
                'supplier_nama' => 'PT Mega Hercules',
                'supplier_alamat' => 'Jl. Gusti Ngurah Rai 158, Bali',
                'created_at' => Carbon::now()
            ],
            [
                'supplier_kode' => 'SP02',
                'supplier_nama' => 'PT Florist Indah',
                'supplier_alamat' => 'Jl. Galunggung 1B/185, Batu',
                'created_at' => Carbon::now()
            ],
            [
                'supplier_kode' => 'SP03',
                'supplier_nama' => 'PT Eksalunter',
                'supplier_alamat' => 'Jl. Diponegoro No 100, Malang',
                'created_at' => Carbon::now()
            ],
        ];

        DB::table('m_supplier')->insert($data_supplier);
    }
}