<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'supplier_id'       => 1,
                'supplier_kode'     => 'SUP001',
                'supplier_nama'     => 'PT. Indofood',
                'supplier_alamat'   => 'Jl. Sudirman No. 1, Jakarta',
                'supplier_telepon'  => '021-1234567',
            ],
            [
                'supplier_id'       => 2,
                'supplier_kode'     => 'SUP002',
                'supplier_nama'     => 'PT. Wings Food',
                'supplier_alamat'   => 'Jl. Gatot Subroto No. 5, Surabaya',
                'supplier_telepon'  => '031-7654321',
            ],
            [
                'supplier_id'       => 3,
                'supplier_kode'     => 'SUP003',
                'supplier_nama'     => 'PT. Unilever Indonesia',
                'supplier_alamat'   => 'Jl. Ahmad Yani No. 10, Bandung',
                'supplier_telepon'  => '022-9876543',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
