<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class CariController extends Controller
{
    public function search(Request $request){
        $query = $request->get('q');
        $hasil = Post::where('title', 'LIKE', '%'. $query. '%')->paginate(10);

        return view('post.result', compact('hasil', 'query'));
    }
}