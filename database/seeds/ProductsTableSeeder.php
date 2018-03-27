<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
                'category_id' => 1,
                'title' => 'Телевизор Sony 40',
                'description' => 'Крутой супер телик',
                'image' => '1.jpg',
            ],
            [
                'category_id' => 1,
                'title' => 'Телевизор Samsung 32',
                'description' => 'Крутой телик Samsung',
                'image' => '2.jpg',
            ],
            [
                'category_id' => 2,
                'title' => 'Ноутбук Samsung',
                'description' => 'Крутой ноутбук Samsung',
                'image' => '3.jpg',
            ],
            [
                'category_id' => 2,
                'title' => 'Ноутбук Lenovo',
                'description' => 'Крутой ноутбук Lenovo',
                'image' => '4.jpg',
            ],
            [
                'category_id' => 3,
                'title' => 'Телефон Samsung',
                'description' => 'Крутой смартфон',
                'image' => '5.jpg',
            ],
            [
                'category_id' => 4,
                'title' => 'Фотоаппарат Canon',
                'description' => 'Фотик Canon',
                'image' => '6.jpg',
            ],
            [
                'category_id' => 4,
                'title' => 'Фотоаппарат Sony',
                'description' => 'Фотик Sony',
                'image' => '7.jpg',
            ],
            [
                'category_id' => 5,
                'title' => 'Планшет Samsung',
                'description' => 'Планшет Samsung',
                'image' => '8.jpg',
            ],
            [
                'category_id' => 5,
                'title' => 'Планшет ZTE',
                'description' => 'Супер планшет ZTE',
                'image' => '9.jpg',
            ],
        ]);
    }
}
