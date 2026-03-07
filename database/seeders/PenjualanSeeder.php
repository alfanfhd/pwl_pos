<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        // 10 transaksi penjualan, dilakukan oleh user yang berbeda
        $data = [];
        $userIds = [1, 2, 3]; // admin, manager, staff

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'penjualan_id'      => $i,
                'user_id'           => $userIds[($i - 1) % 3],
                'penjualan_kode'    => 'PJL' . str_pad($i, 5, '0', STR_PAD_LEFT),
                'penjualan_tanggal' => now()->subDays(rand(0, 30)),
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}
