<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::insert(
            [
                [
                    'name' => 'Free Fire',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item1.png',
                ],
                [
                    'name' => 'PUBG',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item2.png',
                ],
                [
                    'name' => 'Genshin',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item3.png',
                ],
                [
                    'name' => 'Call Duty',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item4.png',
                ],
                [
                    'name' => 'Valorant',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item5.png',
                ],
                [
                    'name' => 'Mobile Legend Bang Bang',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item6.png',
                ],
                [
                    'name' => 'Undawn',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item7.png',
                ],
                [
                    'name' => 'Sausage Man',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item8.png',
                ],
                [
                    'name' => 'League Off Legends',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item9.png',
                ],
                [
                    'name' => 'Arena of Valor',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item10.png',
                ],
                [
                    'name' => 'M Seal',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item11.png',
                ],
                [
                    'name' => 'Bego Live',
                    'description' => 'Deskripsi Produk',
                    'image' => 'images/item/item12.png',
                ],
            ]
        );
    }
}
