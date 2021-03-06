<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\VlogRequest as StoreRequest;
use App\Http\Requests\VlogRequest as UpdateRequest;

class VlogCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Vlog");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/vlog');
        $this->crud->setEntityNameStrings('влог', 'влоги');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('title', 1);

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
            'name' => 'description',
            'label' => 'Текст',
            'type' => 'ckeditor',
            'extra_plugins' => ['oembed', 'widget', 'justify', 'btgrid'],
            ]);
        $this->crud->addField([
            'name' => 'video',
            'label' => 'Ссылка на видео в Youtube или Vimeo',
            'type' => 'text',
            ]);
        $this->crud->addField([
            'label' => 'Категория',
            'type' => 'select2',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "App\Models\Category",
            'wrapperAttributes' => [
            'class' => 'form-group col-md-3',
            ],
            ]);
        $this->crud->addField([
            'name' => 'status',
            'label' => 'Статус',
            'type' => 'enum',
            'wrapperAttributes' => [
            'class' => 'form-group col-md-3',
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
