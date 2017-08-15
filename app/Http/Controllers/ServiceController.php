<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Mainservice, Service};

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($mainservice)
    {
        $service = Mainservice::findBySlug($mainservice);
        if (!$service)
        {
            abort(404);
        }
        
        return view('mainservice', compact('service'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($mainservice, $service)
    {
        $service = Service::findBySlug($service);
        $mainservice = Mainservice::findBySlug($mainservice);
        if (!$mainservice || !$service)
        {
            abort(404);
        }
        
        return view('service', compact('mainservice', 'service'));
    }

}
