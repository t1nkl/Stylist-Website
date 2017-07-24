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
                            ]);
        $this->crud->addField([
                                'name' => 'slug',
                                'label' => 'Slug (URL)',
                                'type' => 'text',
                                'attributes' => ['readonly' => 'readonly'],
                            ], 'update');
        $this->crud->addField([
                                'name' => 'description',
                                'label' => 'Описание',
                                'type' => 'textarea',
                                'attributes' => ['rows' => 4],
                            ]);
        $this->crud->addField([
                                'name' => 'content',
                                'label' => 'Текст',
                                'type' => 'ckeditor',
                            ]);
        $this->crud->addField([
                                'name' => 'status',
                                'label' => 'Статус',
                                'type' => 'enum',
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
