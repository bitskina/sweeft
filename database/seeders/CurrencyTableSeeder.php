<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['GEL','EUR'];

        foreach ($data as $item) {
            Currency::create(['name' => $item]);
        }
    }
}
