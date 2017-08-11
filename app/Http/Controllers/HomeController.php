<?php

namespace App\Http\Controllers;

use Identify;
use Carbon\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use App\Models\{About, Project, Mainservice, Review, Article, VisitorId, VisitorIp};

class HomeController extends Controller
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
        Date::setLocale('ru');
        if(Identify::browser()->getName() && Identify::os()->getName()) {
            VisitorId::addVisitorId(session()->getId(), Identify::browser()->getName(), Identify::os()->getName());
        } else {
            VisitorId::addVisitorId(session()->getId(), null);
        }
        VisitorIp::addVisitorIp($request->ip());
        $abouts = About::getPublishedAbout();
        $services = Mainservice::orderBy('rgt')->get();
        $all_portfolios = Project::getPaginatePortfolio()->forPage($page = request()->has('page') ? request()->page : 1, 8)->all();
        if($request->ajax()) {
            return [
                'all_portfolios' => view('home_portfolios_ajax')->with(compact('all_portfolios'))->render(),
                'next_page' => $page+1,
                'less_then' => count($all_portfolios) < 8
            ];
        }
        $reviewshows = Review::all();
        $blogs = Article::getLastBlog(3);
        
        return view('home', compact('abouts', 'all_portfolios', 'services', 'reviewshows', 'blogs'));
    }

}