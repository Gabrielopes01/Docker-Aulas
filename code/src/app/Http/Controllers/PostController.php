<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Jobs\GetFood;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
 
    public function home()
    {
        // $posts = Post::all();

        $fromCache = false;

        if (Cache::store('redis')->has('posts')) {
            $fromCache = true;

            $posts = Cache::store('redis')->get('posts');
        } else {
            $posts = Post::all();
            Cache::store('redis')->put('posts', $posts, 3600);
        }

        return view('posts', [
            'posts' => $posts,
            'fromCache' => $fromCache
        ]);
    }

    public function index()
    {
        return Post::all();
    }

    public function get()
    {
        GetFood::dispatch()->onQueue('food');

        return 'Added job to queue';
    }

    public function show(Post $post)
    {
        return $post;
    }

}
