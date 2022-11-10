<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    // many to many , and return $data

    public function index()
    {
        $data = User::with('roles')->get();
        return $data;
    }
}
