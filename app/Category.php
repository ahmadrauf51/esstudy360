<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subcategory;

class Category extends Model
{
    // Get the sub categories belongs to this category
    public function subcategory()
    {
        return $this->hasMany(Subcategory::class, 'category_id');
    }
}
