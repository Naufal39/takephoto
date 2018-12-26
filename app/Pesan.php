<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Categories;
use App\Post;

class Pesan extends Model
{
     protected $fillable = ['name', 'number', 'tanggal','lokasi'];

      public function photographer(){
        return $this->belongsTo(Post::class);
    }

    public function usern(){
        return $this->belongsTo(User::class);
    }

    public function categore(){
        return $this->belongsTo(Categories::class);
    }
}
