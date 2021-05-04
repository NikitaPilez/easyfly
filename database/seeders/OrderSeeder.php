<?php

namespace Database\Seeders;

use App\Models\Agency;
use App\Models\Tour;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = Tour::all();

        foreach ($tours as $tour) {
            for($countOrders = 0; $countOrders < 20; $countOrders++) {
                $createdAt = date('Y-m-d H:i:s', rand(1462196747, 1619951126));
                $birthday = date('Y-m-d H:i:s', rand(168363124, 1115134324));

                DB::table('orders')->insert([
                    'tour_id' => $tour->id,
                    'surname' => 'test',
                    'name' => 'test',
                    'phone' => '+375295645654',
                    'email' => 'test@gmail.com',
                    'birthday' => $birthday,
                    'created_at' => $createdAt,
                    'updated_at' => $createdAt,
                ]);
            }
            $countOrders = 0;
        }


    }
}
