<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Subcategory extends Model
{
    // Get the parent category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    // Get All posts that are belongs to sub category
    public function posts()
    {
        return $this->hasMany(Post::class, 'subcategory_id');
    }
}
