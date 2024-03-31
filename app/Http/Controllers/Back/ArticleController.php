<?php

namespace App\Http\Controllers\Back;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $article = Article::with('Category')->latest()->get();

            return DataTables::of($article)
            // Custom Column
                ->addColumn('category_id', function($article) {
                    return $article->Category->name;
                })
                ->addColumn('status', function($article) {
                    if ($article->status == 0) 
                    {
                        return '<span class="badge bg-danger">Draft</span>';
                    }
                    else 
                    {
                        return '<span class="badge bg-success">Publik</span>';
                    }
                })
                ->addColumn('button', function($article) {
                    return '
                    <div class="text-center">
                        <a href="" class="btn btn-secondary">Detail</a>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </div>';
                })
                ->rawColumns(['category_id', 'status', 'button'])
                ->make();
                ;
        }
        return view('back.article.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
