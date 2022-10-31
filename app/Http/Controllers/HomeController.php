<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        // $posts = Post::where('title','=','It was, no doubt: only Alice did not answer, so.')->get();
        // $posts = Post::orderBy("title", "ASC")->get();
        $posts = Post::paginate(3);
        return view('Home', compact('posts'));
    }
    public function show($id) {
        $post = Post::find($id);
        return view('show', compact('post'));
    }
}
