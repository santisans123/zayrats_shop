<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::insert(
            [
                [
                    'trx_num' => 'hsdhdb1233sda',
                    'user_id' => 1,
                    'item_id' => 1,
                    'uid' => '123456789',
                    'serverid' => '987654321',
                    'nominal_id' => 1,
                    'payment' => 'BCA',
                    'account_name' => 'user 1',
                    'whatsapp' => '081916451566',
                    'status' => 1,
                    'created_at' => '2023-11-19 17:58:32',
                    'updated_at' => '2023-11-19 17:58:32'
                ],
                [
                    'trx_num' => 'hsdhdb12322da',
                    'user_id' => 2,
                    'item_id' => 2,
                    'uid' => '987654321',
                    'serverid' => '123456789',
                    'nominal_id' => 2,
                    'payment' => 'Indomaret',
                    'account_name' => 'user 2',
                    'whatsapp' => '081928319892312',
                    'status' => 0,
                    'created_at' => '2023-11-19 17:58:32',
                    'updated_at' => '2023-11-19 17:58:32'
                ],
            ]
        );
    }
}
