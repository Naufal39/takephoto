<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pesan;
use App\Post;

class ProfileController extends Controller
{
    public function profile(User $user, Pesan $pesan, Post $post){

       return view('profile.userprofile', compact('user', 'pesan', 'post'));
    }

    public function photoprofile(User $user){

       return view('profile.kangphoto', compact('user'));
    }

    public function editpro(User $user){

      
       return view('profile.editprofile', compact('user'));
    }

     public function updatepro(Request $request ,User $user){
      $user->update([
         'name'=>request('name'),
         'number_hp'=>request('number_hp')
      ]);
      
       return redirect()->route('post.profile', 'pro')->with('success', 'Berhasil diedit');
    }
}
