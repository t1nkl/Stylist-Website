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
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/review');
        $this->crud->setEntityNameStrings('review', 'reviews');

        /*
        |--------------------------------------------------------------------------
        | COLUMNS AND FIELDS
        |--------------------------------------------------------------------------
        */

		// ------ CRUD COLUMNS
        $this->crud->setFromDB();
        

        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'name',
                                'label' => 'Name',
                                'type' => 'text',
                            ]);
        $this->crud->addField([
                                'name' => 'email',
                                'label' => 'Email',
                                'type' => 'text',
                            ]);
        $this->crud->addField([
                                'name' => 'phone',
                                'label' => 'Phone',
                                'type' => 'text',
                            ]);
        $this->crud->addField([
                                'name' => 'url',
                                'label' => 'URl',
                                'type' => 'text',
                            ]);
        $this->crud->addField([
                                'name' => 'content',
                                'label' => 'Content',
                                'type' => 'text',
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
