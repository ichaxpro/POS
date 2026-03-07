<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Budi Santoso', 'penjualan_kode' => 'PJL001', 'penjualan_tanggal' => '2026-02-25'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Siti Nurhaliza', 'penjualan_kode' => 'PJL002', 'penjualan_tanggal' => '2026-02-25'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Ahmad Wijaya', 'penjualan_kode' => 'PJL003', 'penjualan_tanggal' => '2026-02-26'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Dewi Lestari', 'penjualan_kode' => 'PJL004', 'penjualan_tanggal' => '2026-02-26'],
            ['penjualan_id' => 5, 'user_id' => 2, 'pembeli' => 'Roni Hidayat', 'penjualan_kode' => 'PJL005', 'penjualan_tanggal' => '2026-02-27'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Eka Putri', 'penjualan_kode' => 'PJL006', 'penjualan_tanggal' => '2026-02-27'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Bambang Irawan', 'penjualan_kode' => 'PJL007', 'penjualan_tanggal' => '2026-02-28'],
            ['penjualan_id' => 8, 'user_id' => 2, 'pembeli' => 'Lisa Anderson', 'penjualan_kode' => 'PJL008', 'penjualan_tanggal' => '2026-02-28'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Hendra Gunawan', 'penjualan_kode' => 'PJL009', 'penjualan_tanggal' => '2026-03-01'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Maya Kusuma', 'penjualan_kode' => 'PJL010', 'penjualan_tanggal' => '2026-03-03']
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
