<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Makanan & Minuman (kategori_id = 1)
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'MKN001', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 8000, 'harga_jual' => 15000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'MKN002', 'barang_nama' => 'Mie Ayam', 'harga_beli' => 7000, 'harga_jual' => 12000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'MKN003', 'barang_nama' => 'Kopi Hitam', 'harga_beli' => 3000, 'harga_jual' => 6000],
            // Elektronik (kategori_id = 2)
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'ELK001', 'barang_nama' => 'LED Bulb 10W', 'harga_beli' => 25000, 'harga_jual' => 45000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'ELK002', 'barang_nama' => 'Charger Handphone', 'harga_beli' => 35000, 'harga_jual' => 65000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'ELK003', 'barang_nama' => 'Power Bank 10000mAh', 'harga_beli' => 80000, 'harga_jual' => 150000],
            // Pakaian (kategori_id = 3)
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'PKN001', 'barang_nama' => 'T-shirt Pria', 'harga_beli' => 30000, 'harga_jual' => 65000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'PKN002', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 80000, 'harga_jual' => 180000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'PKN003', 'barang_nama' => 'Kaos Kaki', 'harga_beli' => 5000, 'harga_jual' => 12000],
            // Peralatan Rumah Tangga (kategori_id = 4)
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'PRT001', 'barang_nama' => 'Panci Masak', 'harga_beli' => 50000, 'harga_jual' => 95000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'PRT002', 'barang_nama' => 'Sapu Lidi', 'harga_beli' => 15000, 'harga_jual' => 28000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'PRT003', 'barang_nama' => 'Sendok Makan Set', 'harga_beli' => 20000, 'harga_jual' => 45000],
            // Hiburan (kategori_id = 5)
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'HBN001', 'barang_nama' => 'Novel Fiksi', 'harga_beli' => 40000, 'harga_jual' => 85000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'HBN002', 'barang_nama' => 'Mainan Robot', 'harga_beli' => 75000, 'harga_jual' => 155000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'HBN003', 'barang_nama' => 'Puzzle 1000 Piece', 'harga_beli' => 45000, 'harga_jual' => 95000]
        ];
        DB::table('m_barang')->insert($data);
    }
}
