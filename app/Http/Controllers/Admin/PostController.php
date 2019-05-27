<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;

class PostController extends Controller
{
    public function create() {
        $categories = Category::all();

        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request) {
        Post::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'author' => $request->author,
            'tag' => $request->tag,
            'image_thumb' => $request->image_thumb
        ]);
            
        return redirect()->route('post.index');
    }

    public function view() {
        $posts = Post::with('category')->get();

        return view('admin.post.index', compact('posts'));
    }

    public function edit(Request $request, $id) {
        $posts = Post::find($id);
        $categories = Category::all();

        return view('admin.post.edit', compact('posts', 'categories'));
    }

    public function update(Request $request, $id) {
        $posts = Post::find($id);

        $posts->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'author' => $request->author,
            'tag' => $request->tag,
            'image_thumb' => $request->image_thumb
        ]);

        return redirect()->route('post.index');
    }

    public function destroy($id) {
        $posts = Post::find($id);

        $posts->delete();

        return redirect()->route('post.index');
    }
}
