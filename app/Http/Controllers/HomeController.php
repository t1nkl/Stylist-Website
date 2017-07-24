<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\Models\{About, Project, Service, ReviewShow, Article};

class HomeController extends Controller
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
        Date::setLocale('ru');
        $abouts = About::where('status','PUBLISHED')
            ->take(3)
            ->orderBy('rgt')
            ->get();
        $portfolios = Project::where('status','PUBLISHED')
            ->orderBy('rgt')->paginate(8);
        if($request->ajax()) {
            return [
                'portfolios' => view('home_portfolios_ajax')->with(compact('portfolios'))->render(),
                'next_page' => $portfolios->nextPageUrl()
            ];
        }
        $services = Service::orderBy('rgt')->get();
        $reviewshows = ReviewShow::all();
        $blogs = Article::getLastBlog(3);

        return view('home', compact('abouts', 'portfolios', 'services', 'reviewshows', 'blogs'));

    }

}