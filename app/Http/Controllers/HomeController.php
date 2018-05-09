<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function detail(Request $request)
    {
        $data = Articles::find(3);
        return view('detail')->with('info', $data);
    }
}
