<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\DB;

use App\Models\Vlog;
use App\Models\Service;
use App\Models\Category;


class VlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request ) 
    {   
        $vlogs = Vlog::where('status', 'PUBLISHED')
            ->orderBy('rgt')->paginate(3);
        if($request->ajax()) {
            return [
                'vlogs' => view('vlog_ajax')->with(compact('vlogs'))->render(),
                'next_page' => $vlogs->nextPageUrl()
            ];
        }
        $categorys = Category::orderBy('created_at', "asc")->get();
        $services = Service::all();
        return view('vlog', compact('services', 'vlogs', 'categorys'));
    }


}
