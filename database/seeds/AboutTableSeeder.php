<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'title' => 'Тестовое название 1',
            'description' => 'Тестовое описание',
            'icon' => 'fa-certificate',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('abouts')->insert([
            'title' => 'Тестовое название 2',
            'description' => 'Тестовое описание',
            'icon' => 'fa-certificate',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('abouts')->insert([
            'title' => 'Тестовое название 3',
            'description' => 'Тестовое описание',
            'icon' => 'fa-certificate',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]); 
    }
}
