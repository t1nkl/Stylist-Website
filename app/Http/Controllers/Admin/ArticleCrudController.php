<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ArticleRequest as StoreRequest;
use App\Http\Requests\ArticleRequest as UpdateRequest;

class ArticleCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Article");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/article');
        $this->crud->setEntityNameStrings('блог', 'блоги');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'title',
                                'label' => 'Название',
                            ]);
        $this->crud->addColumn([
                                'name' => 'date',
                                'label' => 'Дата',
                                'type' => 'date',
                            ]);
        $this->crud->addColumn([
                                'name' => 'status',
                                'label' => 'Статус',
                            ]);
        $this->crud->addColumn([
                                'label' => 'Категория',
                                'type' => 'select',
                                'name' => 'category_id',
                                'entity' => 'category',
                                'attribute' => 'name',
                                'model' => "App\Models\Category",
                            ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'title',
                                'label' => 'Название',
                                'type' => 'text',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-9',
                                ],
                            ]);
        $this->crud->addField([
                                'name' => 'date',
                                'label' => 'Дата',
                                'type' => 'date',
                                'value' => date('Y-m-d'),
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-3',
                                ],
                            ], 'create');
        $this->crud->addField([
                                'name' => 'date',
                                'label' => 'Дата',
                                'type' => 'date',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-3',
                                ],
                            ], 'update');
        $this->crud->addField([
                                'name' => 'slug',
                                'label' => 'Slug (URL)',
                                'type' => 'text',
                                'attributes' => ['readonly' => 'readonly'],
                            ], 'update');
        $this->crud->addField([
                                'name' => 'description',
                                'label' => 'Краткое описание',
                                'type' => 'textarea',
                                'attributes' => ['rows' => 4],
                            ]);
        $this->crud->addField([
                                'name' => 'content',
                                'label' => 'Текст',
                                'type' => 'ckeditor',
                                'extra_plugins' => ['oembed', 'widget', 'justify', 'preview'],
                            ]);
        $this->crud->addField([
                                'name' => 'image',
                                'label' => 'Картинка',
                                'type' => 'image',
                                'upload' => true,
                                'crop' => false,
                            ]);
        $this->crud->addField([
                                'label' => 'Категория',
                                'type' => 'select2',
                                'name' => 'category_id',
                                'entity' => 'category',
                                'attribute' => 'name',
                                'model' => "App\Models\Category",
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-4',
                                ],
                            ]);
        $this->crud->addField([       // Select2Multiple = n-n relationship (with pivot table)
                                'label' => 'Теги',
                                'type' => 'select2_multiple',
                                'name' => 'tags', // the method that defines the relationship in your Model
                                'entity' => 'tags', // the method that defines the relationship in your Model
                                'attribute' => 'name', // foreign key attribute that is shown to user
                                'model' => "App\Models\Tag", // foreign key model
                                'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-4',
                                ],
                            ]);
        $this->crud->addField([
                                'name' => 'status',
                                'label' => 'Статус',
                                'type' => 'enum',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-4',
                                ],
                            ]);

        $this->crud->enableAjaxTable();
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }

}
