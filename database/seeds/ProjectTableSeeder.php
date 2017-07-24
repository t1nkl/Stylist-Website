<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'title' => 'Тестовое название 1',
            'description' => 'Тестовое описание',
            'image' => 'http://via.placeholder.com/600x800',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'title' => 'Тестовое название 2',
            'description' => 'Тестовое описание',
            'image' => 'http://via.placeholder.com/600x800',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'title' => 'Тестовое название 3',
            'description' => 'Тестовое описание',
            'image' => 'http://via.placeholder.com/600x800',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('projects')->insert([
            'title' => 'Тестовое название 4',
            'description' => 'Тестовое описание',
            'image' => 'http://via.placeholder.com/600x800',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
