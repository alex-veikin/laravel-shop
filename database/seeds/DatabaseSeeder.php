<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategoriesTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(OptionsTableSeeder::class);
         $this->call(OptionProductTableSeeder::class);
         $this->call(RecommendedProductsTableSeeder::class);
    }
}
