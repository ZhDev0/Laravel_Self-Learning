<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    //
    // belongs to and return data
    public function belongsTo()
    {
        $comment = Comment::find(1);
        return $comment->post->title;
    }
    
    
}
