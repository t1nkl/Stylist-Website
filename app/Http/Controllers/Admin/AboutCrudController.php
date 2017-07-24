<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\AboutRequest as StoreRequest;
use App\Http\Requests\AboutRequest as UpdateRequest;

class AboutCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\About");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/about');
        $this->crud->setEntityNameStrings('о нас', 'о нас');

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
                                'attributes' => ['maxlength' => 50],
                                'count_down' => 50,
                                'attributes' => ['maxlength' => 50],
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-9',
                                ],
                            ]);
        $this->crud->addField([
                                'name' => 'icon',
                                'label' => 'Иконка',
                                'type' => 'icon_picker',
                                'iconset' => 'fontawesome',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-1',
                                ],
                            ]);
        $this->crud->addField([
                                'name' => 'status',
                                'label' => 'Статус',
                                'type' => 'enum',
                                'wrapperAttributes' => [
                                    'class' => 'form-group col-md-2',
                                ],
                            ]);
        $this->crud->addField([
                                'name' => 'description',
                                'label' => 'Текст',
                                'type' => 'textarea',
                                'attributes' => ['rows' => 4],
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
