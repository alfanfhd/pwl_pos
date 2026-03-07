<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        // 15 barang berbeda, 5 per supplier (3 supplier)
        $data = [
            // Supplier 1 - PT. Indofood
            ['barang_id' => 1,  'kategori_id' => 2, 'supplier_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Indomie Goreng',       'harga_beli' => 2500,  'harga_jual' => 3500],
            ['barang_id' => 2,  'kategori_id' => 2, 'supplier_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Indomie Kuah',         'harga_beli' => 2500,  'harga_jual' => 3500],
            ['barang_id' => 3,  'kategori_id' => 3, 'supplier_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Chitato Original',     'harga_beli' => 8000,  'harga_jual' => 11000],
            ['barang_id' => 4,  'kategori_id' => 3, 'supplier_id' => 1, 'barang_kode' => 'BRG004', 'barang_nama' => 'Qtela Keripik Tempe',  'harga_beli' => 9000,  'harga_jual' => 13000],
            ['barang_id' => 5,  'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'BRG005', 'barang_nama' => 'Iced Tea Tamarin',     'harga_beli' => 3000,  'harga_jual' => 5000],

            // Supplier 2 - PT. Wings Food
            ['barang_id' => 6,  'kategori_id' => 1, 'supplier_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Teh Javana',          'harga_beli' => 3500,  'harga_jual' => 5000],
            ['barang_id' => 7,  'kategori_id' => 1, 'supplier_id' => 2, 'barang_kode' => 'BRG007', 'barang_nama' => 'Mie Sedaap Goreng',   'harga_beli' => 3000,  'harga_jual' => 4500],
            ['barang_id' => 8,  'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'BRG008', 'barang_nama' => 'Mie Sedaap Kuah',     'harga_beli' => 3000,  'harga_jual' => 4500],
            ['barang_id' => 9,  'kategori_id' => 4, 'supplier_id' => 2, 'barang_kode' => 'BRG009', 'barang_nama' => 'So Klin Lantai',      'harga_beli' => 12000, 'harga_jual' => 16000],
            ['barang_id' => 10, 'kategori_id' => 4, 'supplier_id' => 2, 'barang_kode' => 'BRG010', 'barang_nama' => 'Mama Lemon',          'harga_beli' => 10000, 'harga_jual' => 14000],

            // Supplier 3 - PT. Unilever
            ['barang_id' => 11, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'BRG011', 'barang_nama' => 'Rinso Deterjen',      'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 12, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'BRG012', 'barang_nama' => 'Lifebuoy Sabun',      'harga_beli' => 5000,  'harga_jual' => 8000],
            ['barang_id' => 13, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'BRG013', 'barang_nama' => 'Pepsodent 75g',       'harga_beli' => 8000,  'harga_jual' => 12000],
            ['barang_id' => 14, 'kategori_id' => 5, 'supplier_id' => 3, 'barang_kode' => 'BRG014', 'barang_nama' => 'Sunlight Spon Cuci',  'harga_beli' => 4000,  'harga_jual' => 7000],
            ['barang_id' => 15, 'kategori_id' => 5, 'supplier_id' => 3, 'barang_kode' => 'BRG015', 'barang_nama' => 'Domestos Nomos',      'harga_beli' => 13000, 'harga_jual' => 18000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
