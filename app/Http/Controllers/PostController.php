<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categories;
use App\User;


class PostController extends Controller
{

    public function index(){
        $posts = Post::paginate(5);
        $categories = Categories::all();
        
        return view('post.index', compact('posts', 'categories'));
    }

    public function create(){
        $categories = Categories::all();

        return view('post.create', compact('categories'));
    }

    public function store(Request $request){
        // Post::create([
        //     'title' => request('title'),
        //     'slug' => str_slug (request('title')),
        //     'content' => request ('content'),
        //     'categori_id' => request ('categori_id')
        // ]);
        
        $tambah = new Post();
        $tambah->user_id =  auth()->id();
        $tambah->title = $request['title'];
        $tambah->slug = str_slug($request['title']);
        $tambah->content= $request['content'];
        $tambah->categori_id = $request['categori_id'];
        

        $file       = $request->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", $fileName);

        $tambah->gambar = $fileName;
        
        $tambah->save();

        return redirect()->route('post.index')->with('success', 'Berhasil ditambahkan');
    }

    public function edit(Post $post){
        $categories = Categories::all();

        return view('post.edit', compact('post', 'categories'));
    }

    public function update(Request $request ,Post $post){
        
        $post->update([
            'title' => request('title'),
            'categori_id' => request('categori_id'),
            'content' => request('content'),
        ]);

        // $update = Post::where('id', $post)->first();
        // $update->user_id = auth()->id();
        // $update->title = $request['title'];
        // $update->slug = str_slug($request['title']);
        // $update->content= $request['content'];
        // $update->categori_id = $request['categori_id'];

        // if($request->file('gambar') == "")
        // {
        //     $update->gambar = $update->gambar;
        // } 
        // else
        // {
        //     $file       = $request->file('gambar');
        //     $fileName   = $file->getClientOriginalName();
        //     $request->file('gambar')->move("image/", $fileName);
        //     $update->gambar = $fileName;
        // }
        
        // $update->update();
        

        return redirect()->route('post.index')->with('success', 'Berhasil diedit');
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect()->route('post.index')->withDanger('Berhasil dihapus');
    }

    public function show(Post $post){
        return view('post.show', compact('post'));
    }

    public function galeri(){
        return view('konten.galeri');
    }

}