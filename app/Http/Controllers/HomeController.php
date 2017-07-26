<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
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
        $abouts = About::getPublishedAbout();
        $services = Service::orderBy('rgt')->get();
        $portfolios = Project::getPaginatePortfolio();
        if($request->ajax()) {
            return [
                'portfolios' => view('home_portfolios_ajax')->with(compact('portfolios'))->render(),
                'next_page' => $portfolios->nextPageUrl()
            ];
        }
        $reviewshows = ReviewShow::all();
        $blogs = Article::getLastBlog(3);
        return view('home', compact('abouts', 'portfolios', 'services', 'reviewshows', 'blogs'));
    }

}