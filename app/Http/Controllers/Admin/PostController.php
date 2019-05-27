<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;

class PostController extends Controller
{
    public function create() {
        return view('admin.post.create');
    }

    public function store(Request $request) {
        Post::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => 1,
            'author' => $request->author,
            'tag' => $request->tag,
            'image_thumb' => $request->image_thumb
        ]);
            
        return redirect()->route('post.create');
    }
}
