<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Тестовое название 1',
            'slug' => 'test-name-1',
            'description' => 'Тестовое описание',
            'content' => 'Тестовое описание',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('services')->insert([
            'title' => 'Тестовое название 2',
            'slug' => 'test-name-2',
            'description' => 'Тестовое описание',
            'content' => 'Тестовое описание',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
