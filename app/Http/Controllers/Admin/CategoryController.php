<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;

class CategoryController extends Controller
{
    public function store(Request $request) {
        Category::create([
            'name' => $request->name
        ]);
            
        return redirect()->route('category.index');
    }

    public function view() {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }
}
