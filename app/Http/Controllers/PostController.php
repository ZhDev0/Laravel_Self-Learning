<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function getAllPosts() {
        $posts = Post::whereBetween('id',[0,5000])->orderBy('id', 'Desc')->get();
        return view('posts', compact('posts'));
    }
    public function addPost() {
        return view('add-post');
    }
    public function addPostSubmit(Request $request) {
        Post::insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return back()->with('post_created', 'Post Had Been Created SuccessFully !!!');
    }
    public function getPostById($id) {
        $post = Post::where('id', $id)->first();
        return view('single-post', compact('post'));
    }
    public function deletePost($id) {
        Post::where('id', $id)->delete();
        return back()->with('post_deleted', 'Post Had Been Deleted SuccessFully !!!');
    }
    public function editPost($id) {
        $post = Post::where('id', $id)->first();
        return view('edit-post', compact('post'));
    }
    public function updatePost(Request $request) {
        Post::where('id', $request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_updated', 'Post Had Been Updated SuccessFully !!!');
    }
}
