<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // has many and return data
    public function hasMany()
    {
        $post = Post::find(1);
        foreach ($post->comments as $comment) {
            echo $comment->content . "<br>";
        }
    }
    
}
