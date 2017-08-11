<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use App\Models\{Article, Category, Tag};

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {
        $all_articles = Article::where('status', 'PUBLISHED')->orderBy('date', "desc")->get()->forPage($page = request()->has('page') ? request()->page : 1, 3)->all();
        if($request->ajax()) {
            return [
                'all_articles' => view('blog_ajax')->with(compact('all_articles'))->render(),
                'next_page' => $page+1,
                'less_then' => count($all_articles) < 3
            ];
        }
        $categorys = Category::orderBy('created_at', "asc")->get();

        return view('blog', compact('all_articles', 'categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('slug', $id)->first();
        $services = Service::all();
        $categorys = Category::orderBy('created_at', "asc")->get();
        
        return view('blog_single', compact('article', 'services', 'categorys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
