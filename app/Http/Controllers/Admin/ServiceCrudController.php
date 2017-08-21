<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ServiceRequest as StoreRequest;
use App\Http\Requests\ServiceRequest as UpdateRequest;

class ServiceCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Service");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/service');
        $this->crud->setEntityNameStrings('услугу', 'услуги');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

        $this->crud->allowAccess('reorder');
        $this->crud->enableReorder('title', 1);
        $this->crud->orderBy('rgt');

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'title',
            'label' => 'Название',
            ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => 'Статус',
            ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'title',
            'label' => 'Название',
            'type' => 'text',
            'tab' => 'Контент',
            ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => 'Slug (URL)',
            'type' => 'text',
            // 'attributes' => ['readonly' => 'readonly'],
            'tab' => 'Контент',
            ], 'update');
        $this->crud->addField([
            'name' => 'description',
            'label' => 'Описание',
            'type' => 'textarea',
            'attributes' => ['rows' => 4],
            'tab' => 'Контент',
            ]);
        $this->crud->addField([
            'name' => 'content',
            'label' => 'Текст',
            'type' => 'ckeditor',
            'extra_plugins' => ['oembed', 'widget', 'justify', 'btgrid'],
            'tab' => 'Контент',
            ]);
        $this->crud->addField([
            'label' => 'Главная услуга',
            'type' => 'select2',
            'name' => 'mainservice_id',
            'entity' => 'mainservice',
            'attribute' => 'title',
            'model' => "App\Models\Mainservice",
            'wrapperAttributes' => [
            'class' => 'form-group col-md-6',
            ],
            'tab' => 'Контент',
            ]);
        $this->crud->addField([
            'name' => 'status',
            'label' => 'Статус',
            'type' => 'enum',
            'wrapperAttributes' => [
            'class' => 'form-group col-md-6',
            ],
            'tab' => 'Контент',
            ]);
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Изображение',
            'type' => 'image',
            'crop' => false,
            // 'aspect_ratio' => 1,
            'upload' => true,
            'tab' => 'Контент',
            ]);
        
        $this->crud->addFields([
            [
            'name' => 'seo_separator',
            'type' => 'custom_html',
            'value' => '<h3>SEO</h3><h4>если нету, будет использоватся автогенирация</h4><hr>',
            'tab' => 'Seo'
            ],
            [
            'label' => 'Название (title)',
            'type' => 'text',
            'name' => 'seo_title',
            'count_down' => 80,
            'attributes' => ['maxlength' => 80],
            'tab' => 'Seo'
            ],
            [
            'label' => 'Описание (description)',
            'type' => 'textarea',
            'name' => 'seo_description',
            'count_down' => 155,
            'attributes' => ['maxlength' => 155, 'rows' => 3],
            'tab' => 'Seo'
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
