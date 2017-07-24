<?php 

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\LidRequest as StoreRequest;
use App\Http\Requests\LidRequest as UpdateRequest;

class LidCrudController extends CrudController {

    public function __construct() {
        
        parent::__construct();

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Lid");
        $this->crud->setRoute(config('backpack.base.route_prefix', 'admin').'/lid');
        $this->crud->setEntityNameStrings('лиды', 'лиды');

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'email',
                                'label' => 'Email',
                            ]);
        $this->crud->addColumn([
                                'name' => 'created_at',
                                'label' => 'Время',
                            ]);

        $this->crud->denyAccess(['create', 'update']);

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
