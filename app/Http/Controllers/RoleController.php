<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\role;

class RoleController extends Controller
{
    // many to many , and return $data
    
    public function index()
    {
        $data = role::with('users')->get();
        return $data;
    }
}
