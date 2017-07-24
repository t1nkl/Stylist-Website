<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\ProjectRequest as StoreRequest;
use App\Http\Requests\ProjectRequest as UpdateRequest;

class ProjectCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Project");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/project');
        $this->crud->setEntityNameStrings('портфолио', 'портфолио');

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
                                'name' => 'description',
                                'label' => 'Текст',
                                'type' => 'textarea',
                                'attributes' => ['rows' => 4],
                            ]);
        $this->crud->addField([
                                'name' => 'image',
                                'label' => 'Картинка',
                                'type' => 'image',
                                'upload' => true,
                                'crop' => true,
                                'aspect_ratio' => 0.75,
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
