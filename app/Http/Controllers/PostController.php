<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class PostController extends Controller
{
    public function view() {
        $posts = Post::orderBy('created_at', 'DESC')->limit(4)->get();

        return view('home')->withPosts($posts);
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
}
