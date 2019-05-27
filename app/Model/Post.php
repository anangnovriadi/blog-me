<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'description', 'tag', 'author', 'category_id', 'image_thumb'
    ];
}
