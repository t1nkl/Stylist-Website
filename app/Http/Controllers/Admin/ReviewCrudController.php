<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ReviewRequest as StoreRequest;
use App\Http\Requests\ReviewRequest as UpdateRequest;

class ReviewCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Review");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/reviews');
        $this->crud->setEntityNameStrings('отзыв', 'отзывы');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

		// ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Название',
            ]);

        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'name',
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
            'name' => 'content',
            'label' => 'Текст',
            'type' => 'textarea',
            'attributes' => ['rows' => 5],
            ]);
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Изображение',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'aspect_ratio' => 0.735,
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
