<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'manufacturer_id' => 1,
                'name' => 'Test product 1',
                'price' => 2000,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 2,
                'name' => 'Test product 2',
                'price' => 2500,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 2,
                'name' => 'Test product 3',
                'price' => '1000',
                'kind' => 'computer'
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'Test product 4',
                'price' => 2500,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 4,
                'name' => 'Test product 5',
                'price' => 6000,
                'kind' => 'conditioner'
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'Test product 6',
                'price' => 5000,
                'kind' => 'washing machine'
            ],[
                'manufacturer_id' => 2,
                'name' => 'Test product 7',
                'price' => 4400,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 1,
                'name' => 'Test product 8',
                'price' => 3000,
                'kind' => 'computer'
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'Test product 9',
                'price' => 7655,
                'kind' => 'washing machine'
            ],[
                'manufacturer_id' => 1,
                'name' => 'Test product 10',
                'price' => 1000,
                'kind' => 'tv'
            ],[
                'manufacturer_id' => 3,
                'name' => 'Test product 11',
                'price' => 2312,
                'kind' => 'computer'
            ],
            [
                'manufacturer_id' => 4,
                'name' => 'Test product 12',
                'price' => 4000,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'Test product 13',
                'price' => 3444,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 2,
                'name' => 'Test product 14',
                'price' => 4000,
                'kind' => 'conditioner'
            ],[
                'manufacturer_id' => 2,
                'name' => 'Test product 15',
                'price' => 3400,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'Test product 16',
                'price' => 1290,
                'kind' => 'computer'
            ],
            [
                'manufacturer_id' => 4,
                'name' => 'Test product 17',
                'price' => 4388,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'Test product 18',
                'price' => 5000,
                'kind' => 'computer'
            ],
            [
                'manufacturer_id' => 2,
                'name' => 'Test product 19',
                'price' => 4200,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'Test product 20',
                'price' => 8900,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 4,
                'name' => 'Test product 21',
                'price' => 4566,
                'kind' => 'computer'
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'Test product 22',
                'price' => 8888,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'Test product 22',
                'price' => 5555,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 2,
                'name' => 'Test product 23',
                'price' => 6666,
                'kind' => 'tv'
            ],
            [
                'manufacturer_id' => 3,
                'name' => 'Test product 24',
                'price' => 2412,
                'kind' => 'conditioner'
            ],
            [
                'manufacturer_id' => 1,
                'name' => 'Test product 25',
                'price' => 8666,
                'kind' => 'computer'
            ]
        ]);
    }
}
