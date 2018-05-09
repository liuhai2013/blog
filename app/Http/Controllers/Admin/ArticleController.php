<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Category;

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
        $data = Articles::selectRaw('articles.id, articles.title, category.name')
            ->leftJoin('category', 'articles.category', '=', 'category.id')
            ->paginate(10);
        return view('admin.article.lists')->with('data', $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $categorys = Category::all();
        foreach ($categorys as $key => $val) {
            if ($val['parent_id'] == 0) {
                $parentCategory[] = $val;
            } else {
                $childCategory[$val['parent_id']][] = $val;
            }
        }

        $data = null;
        $currentParentCategory = '';
        if ($request->get('id')) {
            $id = $request->get('id');
            $data = Articles::selectRaw('articles.id, articles.title, category.name, category.name, articles.category, articles.content, articles.describe')
                ->leftJoin('category', 'articles.category', '=', 'category.id')
                ->where('articles.id', $id)
                ->first();

            $currentParentCategory = Category::where('id', $data->category)->value('parent_id');
            $data->parent_id = $currentParentCategory;
        }

        $currentChildCategory = isset($childCategory[$currentParentCategory]) ? $childCategory[$currentParentCategory] : [];
        return view('admin.article.add')
            ->with('parentCategory', $parentCategory)
            ->with('childCategory', $childCategory)
            ->with('currentChildCategory', $currentChildCategory)
            ->with('data', $data);

    }

    public function save(Request $request)
    {
        $article = new Articles();
        if ($request->input('cid')) {
            $article = $article->find($request->input('cid'));
        }
        $article->title = $request->input('title');
        $article->category = $request->input('category');
        $article->describe = $request->input('describe');
        $article->content = $request->input('content');
        $article->save();

        return redirect()->route('lists');
    }

    public function detail(Request $request)
    {
        $article = new Articles();
        $data = $article->find(3);

        return view('admin.article.detail')
            ->with('info', $data);
    }

    public function category(Request $request)
    {
        $categoryOfParent = Category::where('parent_id', 0)->get();
        $data = null;

        if ($request->get('id')) {
            $id = $request->get('id');
            $data = Category::find($id);
        }

        return view('admin.article.category')
            ->with('data', $data)
            ->with('category', $categoryOfParent);
    }

    public function categoryList()
    {
        $data = Category::paginate(10);
        $parentCategory = Category::where('parent_id', 0)->pluck('name', 'id')->toArray();

        return view('admin.article.category-list')
            ->with('parentCategory', $parentCategory)
            ->with('data', $data);
    }

    public function categorySave(Request $request)
    {
        $category = new Category();
        if ($request->input('cid')) {
            $category = $category->find($request->input('cid'));
        }

        $category->parent_id = $request->input('parent_id');
        $category->name = $request->input('name');
        $category->save();
        return redirect()->route('category-list');
    }
}
