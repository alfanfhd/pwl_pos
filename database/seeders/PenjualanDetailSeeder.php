<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        // 30 detail: 3 barang untuk setiap 10 transaksi penjualan
        $data = [];
        $detailId = 1;

        // Daftar barang yang akan dipakai per transaksi (berputar agar variatif)
        $barangPool = [
            [1, 5, 10],   // transaksi 1
            [2, 6, 11],   // transaksi 2
            [3, 7, 12],   // transaksi 3
            [4, 8, 13],   // transaksi 4
            [5, 9, 14],   // transaksi 5
            [1, 7, 13],   // transaksi 6
            [2, 8, 14],   // transaksi 7
            [3, 9, 15],   // transaksi 8
            [4, 10, 15],  // transaksi 9
            [5, 11, 12],  // transaksi 10
        ];

        // Harga jual barang (harus sesuai dengan BarangSeeder)
        $hargaJual = [
            1  => 3500,
            2  => 3500,
            3  => 11000,
            4  => 13000,
            5  => 5000,
            6  => 5000,
            7  => 4500,
            8  => 4500,
            9  => 16000,
            10 => 14000,
            11 => 20000,
            12 => 8000,
            13 => 12000,
            14 => 7000,
            15 => 18000,
        ];

        for ($penjualanId = 1; $penjualanId <= 10; $penjualanId++) {
            $barangList = $barangPool[$penjualanId - 1];
            foreach ($barangList as $barangId) {
                $data[] = [
                    'detail_id'    => $detailId++,
                    'penjualan_id' => $penjualanId,
                    'barang_id'    => $barangId,
                    'harga'        => $hargaJual[$barangId],
                    'jumlah'       => rand(1, 5),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
