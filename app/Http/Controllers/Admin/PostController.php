<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create() {
        $categories = Category::all();

        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request) {
        $pathToStore = public_path('admin');
        $slug = Str::slug($request->name);

        if($request->hasFile('image_thumb')) {
            $foto = $request->file('image_thumb');
            $filename = $foto->getClientOriginalName(); 
            $extension = $foto->getClientOriginalExtension();
            $foto_name = sha1($filename . time()) . '.' . $extension;
            $foto->move($pathToStore, $foto_name);
        }

        Post::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'author' => $request->author,
            'tag' => $request->tag,
            'slug_name' => $slug,
            'image_thumb' => $foto_name
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
        $request_all = $request->all();
        $posts = Post::findOrFail($id);
        $pathToStore = public_path('admin');

        if($request->hasFile('image_thumb')) {
            $foto = $request->file('image_thumb');
            $filename = $foto->getClientOriginalName(); 
            $extension = $foto->getClientOriginalExtension();
            $foto_name = sha1($filename . time()) . '.' . $extension;
            $foto->move($pathToStore, $foto_name);

            $request_all['image_thumb'] = "{$foto_name}";
        }

        $posts->update($request_all);

        return redirect()->route('post.index');
    }

    public function destroy($id) {
        $posts = Post::find($id);

        $posts->delete();

        return redirect()->route('post.index');
    }
}
