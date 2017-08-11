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
    public function index($id)
    {
        $service = Mainservice::where('slug', $id)->first();
        $services = Mainservice::all();
        
        return view('service', compact('service', 'services'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::where('slug', $id)->first();
        $services = Service::all();
        
        return view('service', compact('service', 'services'));
    }

}
