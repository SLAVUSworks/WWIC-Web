<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Article;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class NavbarCategoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('front.layout.widget', function($view){
            // $categories = Category::whereDoesntHave('children')->latest()->get();
            $categories = Category::whereHas('Articles', function (Builder $query) {
                $query->where('status', 1);
            })->withCount(['Articles' => function($query) {
                $query->where('status', 1);
            }])->latest()->get();

            $view->with('categories', $categories);
        });
        
        View::composer('front.layout.navbar', function($view){
            $parentCategories = Category::whereNull('parent_id')->with('children')->latest()->get();

            $view->with('parentCategories', $parentCategories);
        });

        View::composer('front.layout.widget', function($view){
            $posts = Article::orderBy('views', 'desc')->take(3)->get();

            $view->with('popular_posts', $posts);
        });

    }
}
