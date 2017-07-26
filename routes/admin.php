<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

CRUD::resource('article', 'ArticleCrudController');
CRUD::resource('category', 'CategoryCrudController');
CRUD::resource('tag', 'TagCrudController');
CRUD::resource('vlog', 'VlogCrudController');
CRUD::resource('service', 'ServiceCrudController');
CRUD::resource('about', 'AboutCrudController');
CRUD::resource('project', 'ProjectCrudController');
CRUD::resource('review', 'ReviewCrudController');
CRUD::resource('reviewshow', 'ReviewShowCrudController');
CRUD::resource('contact', 'ContactCrudController');
CRUD::resource('lid', 'LidCrudController');
