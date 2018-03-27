<?php

use Illuminate\Database\Seeder;

class RecommendedProductsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recommended_products')->insert([
            [
                'product_id'     => 1,
                'recommended_id' => 2,
            ],
            [
                'product_id'     => 1,
                'recommended_id' => 7,
            ],
            [
                'product_id'     => 2,
                'recommended_id' => 1,
            ],
            [
                'product_id'     => 2,
                'recommended_id' => 3,
            ],
            [
                'product_id'     => 2,
                'recommended_id' => 5,
            ],
            [
                'product_id'     => 2,
                'recommended_id' => 8,
            ],
            [
                'product_id'     => 3,
                'recommended_id' => 2,
            ],
            [
                'product_id'     => 3,
                'recommended_id' => 5,
            ],
            [
                'product_id'     => 3,
                'recommended_id' => 8,
            ],
            [
                'product_id'     => 4,
                'recommended_id' => 3,
            ],
            [
                'product_id'     => 5,
                'recommended_id' => 2,
            ],
            [
                'product_id'     => 5,
                'recommended_id' => 3,
            ],
            [
                'product_id'     => 5,
                'recommended_id' => 8,
            ],
            [
                'product_id'     => 6,
                'recommended_id' => 7,
            ],
            [
                'product_id'     => 7,
                'recommended_id' => 6,
            ],
            [
                'product_id'     => 7,
                'recommended_id' => 1,
            ],
            [
                'product_id'     => 8,
                'recommended_id' => 9,
            ],
            [
                'product_id'     => 8,
                'recommended_id' => 2,
            ],
            [
                'product_id'     => 8,
                'recommended_id' => 3,
            ],
            [
                'product_id'     => 8,
                'recommended_id' => 5,
            ],
            [
                'product_id'     => 9,
                'recommended_id' => 8,
            ],
        ]);
    }
}
