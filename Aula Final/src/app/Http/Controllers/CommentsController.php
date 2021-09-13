<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Post;

class CommentsController extends Controller
{
    public function index(Post $post)
    {
        $comments = Comments::where('post_id', $post->id)->get();
        return $comments;
    }

    public function show(Post $post, Comments $comments)
    {

    }
}
