<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Тег 1',
            'slug' => 'teg-1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 2',
            'slug' => 'teg-2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 3',
            'slug' => 'teg-3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Категория 1',
            'slug' => 'category-1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Категория 2',
            'slug' => 'category-2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Категория 3',
            'slug' => 'category-3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('articles')->insert([
            'category_id' => '1',
            'title' => 'Тест 1',
            'slug' => 'test-1',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.

',
            'image' => 'http://via.placeholder.com/1000x600',
            'status' => 'PUBLISHED',
            'date' => '2017-07-16',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('articles')->insert([
            'category_id' => '2',
            'title' => 'Тест 2',
            'slug' => 'test-2',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.

',
            'image' => 'http://via.placeholder.com/1000x600',
            'status' => 'PUBLISHED',
            'date' => '2017-07-15',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('articles')->insert([
            'category_id' => '3',
            'title' => 'Тест 3',
            'slug' => 'test-3',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.

',
            'image' => 'http://via.placeholder.com/1000x600',
            'status' => 'PUBLISHED',
            'date' => '2017-07-14',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('articles')->insert([
            'category_id' => '1',
            'title' => 'Тест 4',
            'slug' => 'test-4',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.

',
            'image' => 'http://via.placeholder.com/1000x600',
            'status' => 'PUBLISHED',
            'date' => '2017-07-13',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('articles')->insert([
            'category_id' => '3',
            'title' => 'Тест 5',
            'slug' => 'test-5',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.

',
            'image' => 'http://via.placeholder.com/1000x600',
            'status' => 'PUBLISHED',
            'date' => '2017-07-12',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('article_tag')->insert([
            'article_id' => '1',
            'tag_id' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '3',
            'tag_id' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '3',
            'tag_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '2',
            'tag_id' => '3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('article_tag')->insert([
            'article_id' => '2',
            'tag_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('vlogs')->insert([
            'category_id' => '1',
            'title' => 'Тест 1',
            'description' => '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>',
            'video' => 'https://www.youtube.com/embed/6CamR_vvny0',
            'status' => 'PUBLISHED',
            'date' => '2017-07-16',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('vlogs')->insert([
            'category_id' => '1',
            'title' => 'Тест 2',
            'description' => '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>',
            'video' => 'https://www.youtube.com/embed/6CamR_vvny0',
            'status' => 'PUBLISHED',
            'date' => '2017-07-15',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('vlogs')->insert([
            'category_id' => '2',
            'title' => 'Тест 3',
            'description' => '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>',
            'video' => 'https://www.youtube.com/embed/6CamR_vvny0',
            'status' => 'PUBLISHED',
            'date' => '2017-07-14',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('vlogs')->insert([
            'category_id' => '3',
            'title' => 'Тест 4',
            'description' => '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>',
            'video' => 'https://www.youtube.com/embed/6CamR_vvny0',
            'status' => 'PUBLISHED',
            'date' => '2017-07-13',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('vlogs')->insert([
            'category_id' => '2',
            'title' => 'Тест 5',
            'description' => '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>',
            'video' => 'https://www.youtube.com/embed/6CamR_vvny0',
            'status' => 'PUBLISHED',
            'date' => '2017-07-12',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('vlogs')->insert([
            'category_id' => '3',
            'title' => 'Тест 6',
            'description' => '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>',
            'video' => 'https://www.youtube.com/embed/6CamR_vvny0',
            'status' => 'PUBLISHED',
            'date' => '2017-07-11',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('vlogs')->insert([
            'category_id' => '1',
            'title' => 'Тест 7',
            'description' => '<p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</p>',
            'video' => 'https://www.youtube.com/embed/6CamR_vvny0',
            'status' => 'PUBLISHED',
            'date' => '2017-07-10',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
