<?php

namespace Database\Seeders;

use App\Models\Nominal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NominalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nominal::insert(
            [
                [
                    'item_id' => 1,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 1,
                    'title' => 'Weekly Diamond Pass',
                    'nominal' => 25300,
                ],
                [
                    'item_id' => 2,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 3,
                    'title' => 'Weekly Diamond Pass',
                    'nominal' => 25300,
                ],
                [
                    'item_id' => 3,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 4,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 5,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 5,
                    'title' => 'Weekly Diamond Pass',
                    'nominal' => 25300,
                ],
                [
                    'item_id' => 6,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 7,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 7,
                    'title' => 'Weekly Diamond Pass',
                    'nominal' => 25300,
                ],
                [
                    'item_id' => 8,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 9,
                    'title' => 'Weekly Diamond Pass',
                    'nominal' => 25300,
                ],
                [
                    'item_id' => 9,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 10,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 11,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
                [
                    'item_id' => 11,
                    'title' => 'Weekly Diamond Pass',
                    'nominal' => 25300,
                ],
                [
                    'item_id' => 12,
                    'title' => 'Daily Diamond Pass',
                    'nominal' => 23300,
                ],
            ]
        );
    }
}
