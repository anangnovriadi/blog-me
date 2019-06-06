<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;

class CategoryController extends Controller
{
    public function view($id) {
        $posts = Post::where('category_id', $id)->get();
        $categories = Category::all();

        return view('categoryhome', compact('posts', 'categories'));
    }
}
