<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class dbController extends Controller
{
    public function dbView(){
        $posts = Post::with('categories')->get();
        return view('dbrelation', compact('posts'));

    }
}
