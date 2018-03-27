<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'alias' => 'tv',
                'title' => 'Телевизоры',
                'image' => 'tv.png',
            ],
            [
                'alias' => 'notebook',
                'title' => 'Ноутбуки',
                'image' => 'notebook.png',
            ],
            [
                'alias' => 'phone',
                'title' => 'Телефоны',
                'image' => 'phone.png',
            ],
            [
                'alias' => 'camera',
                'title' => 'Фотоаппараты',
                'image' => 'camera.png',
            ],
            [
                'alias' => 'tablet',
                'title' => 'Планшеты',
                'image' => 'tablet.png',
            ],
        ]);
    }
}
