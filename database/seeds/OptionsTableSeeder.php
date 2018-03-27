<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            ['title' => 'Зарядное устройство'],
            ['title' => 'Светодиодная подсветка'],
            ['title' => 'MicroSD'],
            ['title' => '3G'],
            ['title' => '4G'],
            ['title' => 'Wi-Fi'],
            ['title' => '40 дюймов'],
            ['title' => '30 дюймов'],
            ['title' => '12 Mpx'],
            ['title' => '14 Mpx'],
            ['title' => '20x zoom'],
        ]);
    }
}
