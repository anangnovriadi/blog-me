<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Comment;

class CommentController extends Controller
{
    public function sendComment(Request $request) {
        Comment::create([
            'post_id' => $request->id,
            'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message
        ]);

        return redirect()->back();
    }
}
