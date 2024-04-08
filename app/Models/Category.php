<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'parent_id'];

    // Define the relationship for child categories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Define the relationship for the parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}


