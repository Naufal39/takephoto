<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function profile(User $user){

       return view('post.profile', compact('user'));
    }

    public function photoprofile(User $user){

       return view('post.kangphoto', compact('user'));
    }
}
