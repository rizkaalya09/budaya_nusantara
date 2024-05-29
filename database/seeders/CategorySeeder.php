<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Rumah Adat', 'description' => 'Rumah Adat']);
        Category::create(['name' => 'Pakaian Adat', 'description' => 'Pakaian Adat']);
        Category::create(['name' => 'Tarian Adat', 'description' => 'Tarian Adat']);
        Category::create(['name' => 'Alat Musik Daerah', 'description' => 'Alat Musik Daerah']);
        Category::create(['name' => 'Senjata Tradisional', 'description' => 'Senjata Tradisional']);
        Category::create(['name' => 'Makanan Tradisional', 'description' => 'Makanan Tradisional']);
    }
}
