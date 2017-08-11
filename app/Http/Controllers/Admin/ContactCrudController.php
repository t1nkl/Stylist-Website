<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

class ContactCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel("App\Models\Contact");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/contact');
        $this->crud->setEntityNameStrings('контакты', 'контакты');

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
            'name' => 'content',
            'label' => 'Content',
            'type' => 'text',
            ]);

        $this->crud->denyAccess(['create', 'update']);
        $this->crud->enableAjaxTable();
    }

}
