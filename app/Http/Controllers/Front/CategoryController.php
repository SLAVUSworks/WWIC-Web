<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slugCategory)
    {
        // Retrieve the parent categories
        $parentCategories = Category::whereNull('parent_id')
            ->with('children')
            ->latest()
            ->get();
        
        return view('front.category.index', [
            'articles' => Article::whereStatus(1)->with('Category')->whereHas('Category', function($q) use ($slugCategory) {
                $q->where('slug', $slugCategory);
            })->latest()->paginate(9),
            'category' => $slugCategory,
            'parentCategories' => $parentCategories, // Pass parent categories to the view
        ]);
    }
}
