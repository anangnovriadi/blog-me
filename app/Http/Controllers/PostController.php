<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Comment;
use Illuminate\Support\Carbon;
use App\Model\Category;

class PostController extends Controller
{
    public function view() {
        $posts = Post::orderBy('created_at', 'DESC')->limit(4)->get();
        $categories = Category::all();

        return view('home', compact('posts', 'categories'));
    }

    public function loadMore(Request $request) {
        $output = '';
        $id = $request->id;

        $posts = Post::where('id', '>', $id)->orderBy('created_at', 'DESC')->limit(2)->get();

        if(!$posts->isEmpty()) {
            $output .= '<div class="row gap-y">';

            foreach($posts as $post) {
                $output .= 
                    '<div class="col-md-6">
                        <div class="card border hover-shadow-6 mb-6">
                            <a href="#"><img class="card-img-top" src="web/assets/img/thumb/2.jpg" alt="Card image cap"></a>
                            <div class="p-6 text-center">
                            <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">Marketing</a></p>
                            <h5 class="mb-0"><a class="text-dark" href="#">Top 5 brilliant content marketing strategies</a></h5>
                            </div>
                        </div>
                    </div>';   
            }

            $output .= '</div>';

            $output .= 
                '<div class="text-center" id="remove-row">
                    <button id="btn-more" data-id="'.$post->id.'" class="btn btn-lg btn-primary" type="button">Load More</button>
                </div>';
            
            echo $output;
        }
    }

    public function detail($slug) {
        $post = Post::where('slug_name', $slug)->first();
        $create = Carbon::parse($post->created_at)->format('F d, Y');

        $comments = Comment::where('post_id', $post->id)->get();
        $tag = explode(" ", $post->tag);

        return view('detail', compact('post', 'create', 'comments', 'tag'));
    }
}
