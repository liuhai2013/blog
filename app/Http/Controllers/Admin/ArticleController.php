<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('session.guest');
    }

    public function lists()
    {
        return view('admin.article.lists');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('admin.article.add');
    }

    public function save(Request $request)
    {
        $article = new Articles();
        $article->title = $request->input('title');
        $article->category = $request->input('category');
        $article->describe = $request->input('describe');
        $article->content = $request->input('content');
        $article->save();
    }

    public function detail(Request $request)
    {
        $article = new Articles();
        $data = $article->find(3);
        return view('admin.article.detail')->with('info', $data);
    }
}
