<?php

use Illuminate\Database\Seeder;

class OptionProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('option_product')->insert([
            [
                'product_id' => 1,
                'option_id' => 2,
            ],
            [
                'product_id' => 1,
                'option_id' => 6,
            ],
            [
                'product_id' => 1,
                'option_id' => 7,
            ],
            [
                'product_id' => 2,
                'option_id' => 2,
            ],
            [
                'product_id' => 2,
                'option_id' => 7,
            ],
            [
                'product_id' => 3,
                'option_id' => 1,
            ],
            [
                'product_id' => 3,
                'option_id' => 6,
            ],
            [
                'product_id' => 4,
                'option_id' => 1,
            ],
            [
                'product_id' => 4,
                'option_id' => 2,
            ],
            [
                'product_id' => 4,
                'option_id' => 6,
            ],
            [
                'product_id' => 5,
                'option_id' => 1,
            ],
            [
                'product_id' => 5,
                'option_id' => 2,
            ],
            [
                'product_id' => 5,
                'option_id' => 3,
            ],
            [
                'product_id' => 5,
                'option_id' => 4,
            ],
            [
                'product_id' => 5,
                'option_id' => 5,
            ],
            [
                'product_id' => 5,
                'option_id' => 6,
            ],
            [
                'product_id' => 5,
                'option_id' => 9,
            ],
            [
                'product_id' => 6,
                'option_id' => 10,
            ],
            [
                'product_id' => 6,
                'option_id' => 11,
            ],
            [
                'product_id' => 7,
                'option_id' => 1,
            ],
            [
                'product_id' => 7,
                'option_id' => 9,
            ],
            [
                'product_id' => 7,
                'option_id' => 3,
            ],
            [
                'product_id' => 8,
                'option_id' => 1,
            ],
            [
                'product_id' => 8,
                'option_id' => 3,
            ],
            [
                'product_id' => 8,
                'option_id' => 6,
            ],
            [
                'product_id' => 9,
                'option_id' => 1,
            ],
            [
                'product_id' => 9,
                'option_id' => 2,
            ],
            [
                'product_id' => 9,
                'option_id' => 3,
            ],
            [
                'product_id' => 9,
                'option_id' => 6,
            ],
            [
                'product_id' => 9,
                'option_id' => 9,
            ],
        ]);
    }
}
