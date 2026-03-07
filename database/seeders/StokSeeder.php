<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        // 15 data stok, 1 stok awal untuk setiap barang
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'stok_id'      => $i,
                'barang_id'    => $i,
                'user_id'      => 1, // dilakukan oleh admin
                'stok_tanggal' => now()->subDays(rand(1, 30)),
                'stok_jumlah'  => rand(50, 200),
            ];
        }

        DB::table('t_stok')->insert($data);
    }
}
