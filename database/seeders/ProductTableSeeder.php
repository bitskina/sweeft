<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Phone',
                'price' => 1500,
                'currency_id' => 1,
                'expired_at' => now(),
            ],

            [
                'name' => 'Lenovo',
                'price' => 3500,
                'currency_id' => 2,
                'expired_at' => now(),
            ],

            [
                'name' => 'Dell',
                'price' => 5500,
                'currency_id' => 1,
                'expired_at' => now(),
            ],

            [
                'name' => 'test',
                'price' => 1500,
                'currency_id' => 2,
                'expired_at' => now(),
            ],
        ];

        foreach ($data as $product) {
            Product::create($product);
        }
    }
}
