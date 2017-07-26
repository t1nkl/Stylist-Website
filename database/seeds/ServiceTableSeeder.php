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
            'content' => '<p style="text-align:justify"><img alt="" src="http://via.placeholder.com/680x467" style="float:left; height:467px; width:680px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.</p>
<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit<span dir="rtl">.&nbsp;</span></p>
<p><img alt="" src="http://via.placeholder.com/680x467" style="float:right; height:467px; width:680px"></p>
<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><img alt="" src="http://via.placeholder.com/680x453" style="float:left; height:453px; width:680px">&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc.&nbsp;</p>
<p><img alt="" src="http://via.placeholder.com/700x467" style="float:right; height:467px; width:700px">Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus auctor sed lacus eget bibendum. In tempus pharetra posuere. Nunc quis velit facilisis, lacinia mi et, ultrices nulla. Aenean nec libero at est condimentum vulputate id id quam. Donec eleifend felis eget libero luctus finibus. Suspendisse sagittis eu nunc quis elementum. Fusce convallis, velit quis mollis sagittis, eros lacus sollicitudin augue, at dictum metus odio at metus. Maecenas nisi augue, consequat eu ullamcorper a, dictum non massa. Donec pharetra felis velit, non tincidunt lectus sodales id. Aliquam vehicula orci quis tristique placerat. Vivamus dolor sem, lacinia at eros non, aliquam posuere elit. Proin augue turpis, euismod id rutrum at, consectetur et nunc. Proin id ipsum non elit faucibus ullamcorper. Sed bibendum felis ac libero rhoncus, eu imperdiet ex suscipit. Nam nisi turpis, tincidunt non nisl sed, auctor semper ligula. Donec hendrerit faucibus risus in consectetur.</p>
<p>&nbsp;</p>
<div>&nbsp;
<h1 style="text-align:center"><br>
&nbsp;</h1>
<h1 style="text-align:center">NTCN DFGDFG SDFGSDFS &nbsp;SDF</h1>
<p><img alt="" src="http://via.placeholder.com/1640x933" style="height:933px; width:1640px"></p>
</div>',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
