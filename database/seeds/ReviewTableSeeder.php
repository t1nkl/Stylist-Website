<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'name' => 'Тестовое название 1',
            'content' => 'Тестовое описание',
            'image' => 'http://via.placeholder.com/600x800',
            'date' => '2017-07-14',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('reviews')->insert([
            'name' => 'Тестовое название 2',
            'content' => 'Тестовое описание',
            'image' => 'http://via.placeholder.com/600x800',
            'date' => '2017-07-13',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('reviews')->insert([
            'name' => 'Тестовое название 3',
            'content' => 'Тестовое описание',
            'image' => 'http://via.placeholder.com/600x800',
            'date' => '2017-07-12',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('reviews')->insert([
            'name' => 'Тестовое название 4',
            'content' => 'Тестовое описание',
            'image' => 'http://via.placeholder.com/600x800',
            'date' => '2017-07-11',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('reviews')->insert([
            'name' => 'Тестовое название 5',
            'content' => 'Тестовое описание',
            'image' => 'http://via.placeholder.com/600x800',
            'date' => '2017-07-10',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
