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
    DB::table('mainservices')->insert([
        'title' => 'Тестовое название 1',
        'slug' => 'test-name-1',
        'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
        'content' => '<div class="btgrid">
        <div class="row row-1">
            <div class="col col-md-6">
                <div class="content">
                    <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
                </div>
            </div>

            <div class="col col-md-6">
                <div class="content">
                    <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                    <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                    <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>
                </div>
            </div>
        </div>

        <div class="row row-2">
            <div class="col col-md-6">
                <div class="content">
                    <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                    <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                    <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
                </div>
            </div>

            <div class="col col-md-6">
                <div class="content">
                    <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
                </div>
            </div>
        </div>
    </div>

    <div class="btgrid">
        <div class="row row-1">
            <div class="col col-md-6">
                <div class="content">
                    <p><img alt="" src="http://via.placeholder.com/680x460" /></p>
                </div>
            </div>

            <div class="col col-md-6">
                <div class="content">
                    <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                    <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                    <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
                </div>
            </div>
        </div>
    </div>

    <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

    <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

    <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>',
    'image' => 'http://via.placeholder.com/1000x600',
    'status' => 'PUBLISHED',
    'created_at' => \Carbon\Carbon::now(),
    'updated_at' => \Carbon\Carbon::now(),
    ]);
DB::table('mainservices')->insert([
    'title' => 'Тестовое название 2',
    'slug' => 'test-name-2',
    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
    'content' => '<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>
            </div>
        </div>
    </div>

    <div class="row row-2">
        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>
    </div>
</div>

<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>
    </div>
</div>

<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

<p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

<p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>',
'image' => 'http://via.placeholder.com/1000x600',
'status' => 'PUBLISHED',
'created_at' => \Carbon\Carbon::now(),
'updated_at' => \Carbon\Carbon::now(),
]);
DB::table('mainservices')->insert([
    'title' => 'Тестовое название 3',
    'slug' => 'test-name-3',
    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
    'content' => '<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>
            </div>
        </div>
    </div>

    <div class="row row-2">
        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>
    </div>
</div>

<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>
    </div>
</div>

<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

<p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

<p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>',
'image' => 'http://via.placeholder.com/1000x600',
'status' => 'PUBLISHED',
'created_at' => \Carbon\Carbon::now(),
'updated_at' => \Carbon\Carbon::now(),
]);

DB::table('services')->insert([
    'title' => 'Тестовое название 3',
    'slug' => 'test-name-3',
    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
    'content' => '<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>
            </div>
        </div>
    </div>

    <div class="row row-2">
        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>
    </div>
</div>

<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>
    </div>
</div>

<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

<p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

<p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>',
'mainservice_id' => '1',
'image' => 'http://via.placeholder.com/1000x600',
'status' => 'PUBLISHED',
'created_at' => \Carbon\Carbon::now(),
'updated_at' => \Carbon\Carbon::now(),
]);
DB::table('services')->insert([
    'title' => 'Тестовое название 4',
    'slug' => 'test-name-4',
    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
    'content' => '<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>
            </div>
        </div>
    </div>

    <div class="row row-2">
        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>
    </div>
</div>

<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>
    </div>
</div>

<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

<p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

<p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>',
'mainservice_id' => '2',
'image' => 'http://via.placeholder.com/1000x600',
'status' => 'PUBLISHED',
'created_at' => \Carbon\Carbon::now(),
'updated_at' => \Carbon\Carbon::now(),
]);
DB::table('services')->insert([
    'title' => 'Тестовое название 5',
    'slug' => 'test-name-5',
    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
    'content' => '<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>
            </div>
        </div>
    </div>

    <div class="row row-2">
        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>
    </div>
</div>

<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>
    </div>
</div>

<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

<p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

<p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>',
'mainservice_id' => '1',
'image' => 'http://via.placeholder.com/1000x600',
'status' => 'PUBLISHED',
'created_at' => \Carbon\Carbon::now(),
'updated_at' => \Carbon\Carbon::now(),
]);
DB::table('services')->insert([
    'title' => 'Тестовое название 6',
    'slug' => 'test-name-6',
    'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.',
    'content' => '<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>
            </div>
        </div>
    </div>

    <div class="row row-2">
        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" style="height:460px; width:680px" /></p>
            </div>
        </div>
    </div>
</div>

<div class="btgrid">
    <div class="row row-1">
        <div class="col col-md-6">
            <div class="content">
                <p><img alt="" src="http://via.placeholder.com/680x460" /></p>
            </div>
        </div>

        <div class="col col-md-6">
            <div class="content">
                <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

                <p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

                <p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel.</p>
            </div>
        </div>
    </div>
</div>

<p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu laoreet urna, a pretium leo. Quisque bibendum ullamcorper mauris, venenatis pharetra mauris euismod vel. Curabitur feugiat nunc nibh, eu cursus nulla imperdiet non. Mauris ornare lacus viverra, cursus eros et, aliquam libero. Donec ut nisi nulla. Phasellus pharetra, risus nec ornare mattis, eros nibh ullamcorper ipsum, eu accumsan lectus tellus id orci. Integer mattis condimentum nibh vitae sodales.</p>

<p style="text-align:justify">Duis vulputate, libero quis efficitur tempor, odio augue tempor massa, ut congue mi tellus id lacus. Vivamus lobortis massa ut tortor efficitur luctus. Phasellus tristique, est nec hendrerit accumsan, quam dolor pharetra ex, sed sodales sem dolor ac nisl. Aenean varius felis at odio viverra, eu pharetra felis pellentesque. Pellentesque accumsan gravida mauris, sit amet vehicula sapien finibus eget. Duis urna metus, tristique et dictum id, pellentesque vel quam. Aenean eu convallis tortor, sed sollicitudin dui. Aenean at est lectus. Sed faucibus lectus ut nisl semper, non sollicitudin orci consectetur. Maecenas varius, ex sit amet fermentum ultrices, justo lorem tempor sem, non suscipit dolor massa et felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dignissim ipsum quis posuere. Vivamus ac tellus sit amet ipsum pharetra bibendum. Aliquam non elit malesuada, ullamcorper dolor ac, ultrices felis.</p>

<p style="text-align:justify">Phasellus orci dolor, pharetra ut orci quis, accumsan sodales eros. Fusce suscipit fringilla molestie. Sed sit amet justo a nisi consectetur pellentesque. Vestibulum fringilla mattis magna sed laoreet. Donec nec malesuada massa. Nam nunc nisl, convallis ut arcu id, interdum consectetur arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus velit mi, dignissim id convallis id, interdum non lorem.</p>',
'mainservice_id' => '1',
'image' => 'http://via.placeholder.com/1000x600',
'status' => 'PUBLISHED',
'created_at' => \Carbon\Carbon::now(),
'updated_at' => \Carbon\Carbon::now(),
]);
}
}
