<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'description', 'tag', 'author', 'image_thumb', 'category_id', 'slug_name'
    ];

    public function category() {
        $category = $this->belongsTo('App\Model\Category', 'category_id');

        return $category;
    }
}
