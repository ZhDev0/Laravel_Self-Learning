<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPosts() {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    public function addPost() {
        $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'New Post',
            'body' => 'New Post Description'
        ]);
        return $response->json();
    }
    public function updatePost($id) {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/'.$id,[
            'title'=> 'Update Post',
            'body' => 'Update Post Description'
        ]);
        return $response->json();
    }
    public function deletePost($id) {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }
}
