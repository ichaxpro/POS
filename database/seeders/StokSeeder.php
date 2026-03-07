<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['stok_id' => 1, 'barang_id' => 1, 'supplier_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2026-02-25', 'stok_jumlah' => 50],
            ['stok_id' => 2, 'barang_id' => 2, 'supplier_id' => 1, 'user_id' => 1, 'stok_tanggal' => '2026-02-25', 'stok_jumlah' => 45],
            ['stok_id' => 3, 'barang_id' => 3, 'supplier_id' => 1, 'user_id' => 2, 'stok_tanggal' => '2026-02-25', 'stok_jumlah' => 100],
            ['stok_id' => 4, 'barang_id' => 4, 'supplier_id' => 1, 'user_id' => 2, 'stok_tanggal' => '2026-02-26', 'stok_jumlah' => 30],
            ['stok_id' => 5, 'barang_id' => 5, 'supplier_id' => 1, 'user_id' => 3, 'stok_tanggal' => '2026-02-26', 'stok_jumlah' => 25],
            ['stok_id' => 6, 'barang_id' => 6, 'supplier_id' => 2, 'user_id' => 1, 'stok_tanggal' => '2026-02-26', 'stok_jumlah' => 20],
            ['stok_id' => 7, 'barang_id' => 7, 'supplier_id' => 2, 'user_id' => 1, 'stok_tanggal' => '2026-02-27', 'stok_jumlah' => 35],
            ['stok_id' => 8, 'barang_id' => 8, 'supplier_id' => 2, 'user_id' => 2, 'stok_tanggal' => '2026-02-27', 'stok_jumlah' => 28],
            ['stok_id' => 9, 'barang_id' => 9, 'supplier_id' => 2, 'user_id' => 2, 'stok_tanggal' => '2026-02-27', 'stok_jumlah' => 80],
            ['stok_id' => 10, 'barang_id' => 10, 'supplier_id' => 2, 'user_id' => 3, 'stok_tanggal' => '2026-02-28', 'stok_jumlah' => 15],
            ['stok_id' => 11, 'barang_id' => 11, 'supplier_id' => 3, 'user_id' => 1, 'stok_tanggal' => '2026-02-28', 'stok_jumlah' => 60],
            ['stok_id' => 12, 'barang_id' => 12, 'supplier_id' => 3, 'user_id' => 1, 'stok_tanggal' => '2026-02-28', 'stok_jumlah' => 40],
            ['stok_id' => 13, 'barang_id' => 13, 'supplier_id' => 3, 'user_id' => 2, 'stok_tanggal' => '2026-03-01', 'stok_jumlah' => 22],
            ['stok_id' => 14, 'barang_id' => 14, 'supplier_id' => 3, 'user_id' => 2, 'stok_tanggal' => '2026-03-01', 'stok_jumlah' => 18],
            ['stok_id' => 15, 'barang_id' => 15, 'supplier_id' => 3, 'user_id' => 3, 'stok_tanggal' => '2026-03-01', 'stok_jumlah' => 32]
        ];
        DB::table('t_stok')->insert($data);
    }
}
