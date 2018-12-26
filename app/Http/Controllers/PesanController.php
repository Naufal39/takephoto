<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categories;
use App\User;
use App\Pesan;

class PesanController extends Controller
{
    public function pesan(Request $request){
        $pesanan = new Pesan();
        $pesanan->id_pemesan = auth()->id();
        $pesanan->id_categori = $request['id_categori'];
        $pesanan->id_photographer = $request['id_photographer'];
        $pesanan->no_hp = $request['number'];
        $pesanan->lokasi = $request['lokasi'];
        $pesanan->tanggal = $request['tanggal'];
        $pesanan->note = $request['note'];

        $pesanan->save();

         return view('konten.sukses'); 
    }

    public function sukses(Request $request, Post $post, User $user, Pesan $pesan){

        return view('konten.sukses'); 
    }
}
