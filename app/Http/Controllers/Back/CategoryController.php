<?php

namespace App\Http\Controllers\Back;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $categories = Category::with('parent')->get();
        $parentCategories = Category::whereNull('parent_id')->get();
        
        return view('back.category.index', compact('categories', 'parentCategories'));
    }
    
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        $data['slug'] = Str::slug($data['name']);

        Category::create($data);

        return back()->with('success', 'Kategori Sudah Ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        $data['slug'] = Str::slug($data['name']);

        Category::find($id)->update($data);

        return back()->with('success', 'Kategori Sudah Diubah!');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();

        return back()->with('success', 'Kategori Sudah Dihapus!');
    }
}
