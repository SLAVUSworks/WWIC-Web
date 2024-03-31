<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title', 'slug', 'desc', 'img', 'views', 'status', 'publish_date'];

    // RELATION
    public function Category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
