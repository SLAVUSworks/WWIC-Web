<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $keyword = request()->keyword;

        // if ($keyword) {
        //     $articles = Article::with('Category')
        //     ->whereStatus(1)
        //     ->where('title','like','%' .$keyword. '%')
        //     ->latest()
        //     ->paginate(6);
        // } else {
            $articles = Article::with('Category')
            ->where('status', '1')
            ->latest()
            ->simplePaginate(6);
        // }
    
    
        return view('front.home.index', [
            'latest_post'=> Article::whereStatus(1)->latest()->first(),
            'articles' => $articles,
            'categories' => Category::latest()->get()
        ]);
    }
}
