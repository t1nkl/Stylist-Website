<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Vlog, Service, Category};

class VlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request ) 
    {   
        $all_vlogs = Vlog::where('status', 'PUBLISHED')->orderBy('date', "desc")->get()->forPage($page = request()->has('page') ? request()->page : 1, 3)->all();
        if($request->ajax()) {
            return [
                'all_vlogs' => view('vlog_ajax')->with(compact('all_vlogs'))->render(),
                'next_page' => $page+1,
                'less_then' => count($all_vlogs) < 3
            ];
        }
        $categorys = Category::orderBy('created_at', "asc")->get();
        $services = Service::all();
        
        return view('vlog', compact('services', 'all_vlogs', 'categorys'));
    }

}
