<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // memasukan sebuh data ke column

        // Barang::create([
        //     'nama_barang' => 'Laptop',
        //     'brand' => 'Asus',
        //     'stok' => 10,
        //     'is_ready' => true,
        //     'deskripsi' => 'Laptop gaming murah keluaran terbaru',
        // ]);

        Item::factory()->count(100)->create();

    }
}
