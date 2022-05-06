<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FillManufacturerProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufacturer')->insert([
            [
                'name' => 'Bosch'
            ],
            [
                'name' => 'HP'
            ],
            [
                'name' => 'Asus'
            ],
            [
                'name' => 'Apple'
            ],
        ]);
    }
}
